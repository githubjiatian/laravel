// 购物车引擎
// xie.xuyang@gmail.com 2012-12-25 16:15:02
// require jquery.js handlebars.js
Cart = {
	timer_id:0,
	// 加入购物车
	add:function(item_id,item_number,item_type){
		this.post({
			act:'ajax_add',
			item_id:item_id,
			item_number:typeof item_number =='undefined' ? 1 : item_number,
			item_type:item_type
		});
	},
	set_number:function(item_id,item_number,item_type,callback){
		this.post({
			act:'ajax_set_number',
			item_id:item_id,
			item_number:item_number,
			item_type:item_type
		},callback);
	},
	batch_set_number:function(items,callback){
		this.post({
			act:'ajax_batch_set_number',
			items:items
		},callback);
	},

	remove:function(item_id,item_type){
		var me = this;
		this.set_number(item_id,0,item_type,function(){
			me.render_page();
		});
	},
	clear:function(){
		this.post({act:'clear'});
	},
	_default_callback:function(){
		window.location.href="c_cart.php";
	},
	post:function(object,callback){
		if(typeof callback === 'undefined'){
			var callback = this._default_callback;
		}
		jQuery.post('c_cart.php',object,callback);
	},
	_fetch_data:function(callback){
		jQuery.getJSON('c_cart.php',{act:'ajax_get',time:new Date().getTime()},callback);
	},
	_process_data:function(data){
		this.items = data.items;
		// 这里主要是为了handlebars做一些处理
		for(var i in data.items){
			// 商品类型
			if(data.items[i].item_type=='gift'){
				data.items[i].is_gift = true;
			}else if(data.items[i].item_type=='package_buy'){
				data.items[i].is_package = true;
			}
			// 价格
			if(data.items[i].shop_price != data.items[i].user_final_price){
				data.items[i].diff_price = true;
			}
		}
		return data;
	},
	render_page:function(){
		// 渲染器
		if(typeof this.page_renderer == 'undefined'){
			this.page_renderer = Handlebars.compile(jQuery('#cart_content').html());
		}
		var me = this;
		// 渲染
		this._fetch_data(function(data){
			data = me._process_data(data);
			jQuery('#cart_content').html(me.page_renderer(data));
			jQuery('#cart_content>img').hide();
			jQuery('#cart_content table').show();
		});
	},
	render_page_plusnminus:function(){
		var me = this;
		// 增减
		jQuery('.plusnminus span:contains("-")').live('click',function(){
			var val = jQuery(this).siblings('input').val();val--;
			var input = jQuery(this).siblings('input');
			input.val(val);
			input.attr('is_dirty',1);
			me.update_dirty();
		});
		jQuery('.plusnminus span:contains("+")').live('click',function(){
			var val = jQuery(this).siblings('input').val();val++;
			var input = jQuery(this).siblings('input');
			input.val(val);
			input.attr('is_dirty',1);
			me.update_dirty();
		});
	},
	//xxl change for cat start 20150429
	render_page_check:function(){
		
	var me = this;
	jQuery('.item_id input[type=checkbox]').live('click',function(){			
			var p_item_id = jQuery(this).val();
			var p_checked = jQuery(this).is(':checked');
			var is_sel = 1;
			
			if(!p_checked){
				is_sel = 0;
			}else{
				is_sel = 1;
			}
			this.timer_id = setTimeout(function(){
				me.batch_set_check(p_item_id,is_sel,function(){
					me.render_page();
				});		
			});

		});		
    },	

	batch_set_check:function(item_id,is_sel,callback){
			
		this.post({
			act:'ajax_set_check',
			item_id:item_id,
			is_sel:is_sel
		},callback);
	},	
	//xxl change for cat end 20150430	
	
	update_dirty:function(){
		if(this.timer_id){
			clearTimeout(this.timer_id);
			this.timer_id = 0;
		}
		var me = this;
		this.timer_id = setTimeout(function(){
			var dirty_items = [];
			jQuery('.plusnminus input[is_dirty=1]').each(function(){
				dirty_items.push({
					item_id     : jQuery(this).attr('item_id'),
					item_number : jQuery(this).val(),
					item_type   : jQuery(this).attr('item_type')
				});
			});
			// 全都设置好之后刷新一下购物车
			me.batch_set_number(dirty_items,function(){
				me.render_page();
			});
		},500);
	}
};

// 初始化页面
jQuery(function(){
	// 购物车页面，渲染购物车
	if(jQuery('body#cart').length>0){
		Cart.render_page();
		Cart.render_page_plusnminus();
		//xxl change for cat start 20150430			
		Cart.render_page_check();
		//xxl change for cat end 20150430	
	}
});