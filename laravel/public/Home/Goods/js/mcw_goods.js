// 促销倒计时
if(jQuery('#ECS_PROMOTE_COUNTDOWN')){
	gmt_end_time = jQuery('#ECS_PROMOTE_COUNTDOWN').attr('data-promote_end_time');
	setInterval(function(){
		var now = Math.round(new Date().getTime()/1000);
		var ts = gmt_end_time-now;
		dateLeft = parseInt(ts / 86400);
		ts = ts - dateLeft * 86400;
		hourLeft = parseInt(ts / 3600);
		ts = ts - hourLeft * 3600;
		minuteLeft = parseInt(ts / 60);
		secondLeft = ts - minuteLeft * 60;
		var text = '';
		if(ts<0){
			text = '促销结束啦！按F5刷新下页面看最新价格吧。';
		}
		if(dateLeft>0){
			text+= dateLeft+'天';
		}
		if(hourLeft>0){
			text+= hourLeft+'小时';
		}
		if(minuteLeft>0){
			text+= minuteLeft+'分';
		}
		if(secondLeft>0){
			text+= secondLeft+'秒';
		}
		jq('#ECS_PROMOTE_COUNTDOWN').html(text);
	},1000);
}

// 切换城市函数
function switch_city(city_name){
	//更换地址
	if(jq('#ECS_G_SHIP .toplace').html!='至 '+city_name){
		jq('#ECS_G_SHIP .toplace').html('至 '+city_name);
	}
	var yto_fee = yto_fee_ori	= city_ship.yto[city_name];
	var sf_fee	= sf_fee_ori	= city_ship.sf[city_name];
	var cod_fee;
	if(goods_addon){
		yto_fee = final_price>=200 ? yto_fee : yto_fee*2;
		sf_fee	= final_price>=300 ? sf_fee : sf_fee*2;
		cod_fee	= sf_fee_ori*2;
	}else{
		yto_fee = final_price>=200 ? 0 : yto_fee;
		sf_fee	= final_price>=300 ? 0 : sf_fee;
		cod_fee	= sf_fee_ori;
	}
	// 双11 COD包邮
	//if(final_price>=300){
	//	cod_fee = 0;
	//}
	if(goods_freeship && yto_fee<=10){
		yto_fee = 0;
	}
	//填写字符
	var text = '';
	if(yto_fee==0 && sf_fee==0 && cod_fee==0){
		text+= '圆通、顺丰（可货到付款）免邮';
	}else if(yto_fee==0 && sf_fee==0){
		text+= '圆通、顺丰免邮 （货到付款需另付'+cod_fee+'元）';
	}else{
		text+= yto_fee==0 ? '圆通：免邮 ' : '圆通：'+yto_fee+'元 ';
		if(sf_fee==cod_fee){
			text+= '顺丰（可货到付款）：'+sf_fee+'元 ';
		}else{
			text+= '顺丰：'+sf_fee+'元 ';
			text+= '顺丰货到付款：'+cod_fee+'元' ;
		}
	}
	jq('#ECS_G_SHIP span:eq(1)').html(text);
	jq.cookie('city_name',city_name, { expires: 7, path: '/'});
}

// 识别访问者城市，没有的话就上海
var city_name = (
	(typeof remote_ip_info == 'undefined') ||
	(typeof city_ship.yto[remote_ip_info.province] == 'undefined')
	) ? '上海' : remote_ip_info.province;
if(!jq.cookie('city_name')){
	switch_city(city_name);
}else{
	switch_city(jq.cookie('city_name'));
}

//配送
jq('#ECS_G_PROVINCE li:not(.area-title)').click(function(){
	jq('#ECS_G_PROVINCE').hide();
	var city_name = jq.trim(jq(this).html());//这里一定要trim，否则取出的文字有隐含非法字符导致城市识别失败
	switch_city(city_name);
});
jq('#ECS_G_SHIP .toplace').click(function(){
	jq('#ECS_G_PROVINCE').show();
});
jq('body').click(function(event) {
	if (!jq(event.target).closest('#ECS_G_PROVINCE,#ECS_G_SHIP .toplace').length) { //空白处点击
		jq('#ECS_G_PROVINCE').hide();
	};
});

// 清空历史记录
function mcw_clear_history(){
	jQuery.cookie('mcw_history','');
	jQuery('#history .inner').html('');
	return false;
}

// 选项卡
//tabs
jq('.arrow_tabs a').click(function(){
	if(jq(this).html()=='如何购买' || jq(this).html()=='商品评论'){
		return true;
	}
	jq(this).addClass('active').siblings().removeClass('active');
	var index = jq(this).index();
	jq(this).parent().siblings('.inner').hide().eq(index).show();
	return false;
});
jq('.common_tabs a').mouseover(function(){
	jq(this).addClass('active').siblings().removeClass('active');
	var index = jq(this).index();
	jq(this).parent().siblings('.inner').hide().eq(index).show();
	return false;
});
jq('.common_tabs a:eq(0)').mouseover();

//gallery
jq('.image_small img').mouseover(function(){
	var size398 = jq(this).attr('size398');
	jq('.image_big img').attr('src',size398);
});

//plus and minus
jq(function(){
	jq('form [name=item_number]').siblings('.min').click(function(){
		var val = jq('form [name=item_number]').val();
		if(val<2){
			jq('form [name=item_number]').val('1');
			return false;
		}
		jq('form [name=item_number]').val(--val);
	});
	jq('form [name=item_number]').siblings('.add').click(function(){
		var val = parseInt(jq('form [name=item_number]').val());
		val ++;
		var is_max = parseInt(jq('form [name=is_max]').val());
		var max_number = parseInt(jq('#max_number').html());
		if(is_max==1 && max_number>0 && val>max_number) {
				alert('对不起，您本次最多还可以买' + max_number + '件商品');
				return false;
		}
		jq('form [name=item_number]').val(val);
	});
});