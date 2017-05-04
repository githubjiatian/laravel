@extends('Home.base.parent')
@section('content')
<link href="/Home/Shopcar/css/base.css?1445259609" rel="stylesheet" type="text/css" />

<link href="/Home/Shopcar/css/style.css?1450340548" rel="stylesheet" type="text/css" />

<link href="/Home/Shopcar/css/jquery.fancybox-1.3.4.css?1289489920" rel="stylesheet" type="text/css" />

<link href="/Home/Shopcar/css/shopping_cart.css?1356679305" rel="stylesheet" type="text/css" />

<script src="/Home/Shopcar/js/jquery.js?1328604144"></script>

<script src="/Home/Shopcar/js/jquery.cookie.js?1336726124"></script>

<script src="/Home/Shopcar/js/mcw_common.js?1465206299"></script>

<script src="/Home/Shopcar/js/jquery.fancybox-1.3.4.pack.js?1289490058"></script>

<script src="/Home/Shopcar/js/handlebars-1.0.rc.1.js?1355908975"></script>

<script src="/Home/Shopcar/js/mcw_checkout_cart.js?"></script>

<script src="/Home/Shopcar/js/jquery.js?1328604144"></script>

	<!-- 显示成功返回信息 -->
	    @if(session('msg'))
		    <div style="width:500px;height:100px;background:yellowgreen;margin:10px auto;font-size:40px;line-height:100px;">
		    	{{ session('msg') }}
		    </div>
        @endif
        <!-- 显示失败返回信息 -->
        @if(session('error'))
	        <div style="width:500px;height:100px;background:yellowgreen;margin:10px auto;font-size:40px;line-height:100px;">
				{{ session('error') }}
			</div>
		@endif

	<div class="w990 bc inner pt10">
		<!-- 提交删除的表单 -->
		<form action="/Home/shopcars" method="post" name="myform">
	    		{{ csrf_field() }}
				{{ method_field('DELETE') }}
	    	</form>
	    <!-- 提交清除购物车 -->
		<form action="/Home/cars/clear/{uid}" method="post" name="myform_c">
	    		{{ csrf_field() }}
	    	</form>
			<div class="step"></div>
               <!--                      惠立方入口          -->
                    <div class="ui-entrance2" style=""></div>
			
			<div id="cart_content">
				<img src="/statics/images/loading_16.gif" alt="" style="display: none;">
				<table class="cartcontab" style="display: table;" cellspacing="0" cellpadding="0" border="0" id='tab'>
					<tbody><tr>
						<th colspan="2">商品</th>
						<th width="160">单价</th>
						<th width="80">商品数量</th>
						<th width="100">小计</th>
						<th width="80">赠送茶币</th>
						<th width="80">操作</th>
					</tr>
					<!-- 利用form表单提交购物车中的数据到shopcar，更新shopcar中的数据 -->
					<form action="/home/count" method="post" name='mycount' id="jisuan">
						{{ csrf_field() }}
					<input type="hidden" name="str_s" id="str_s" class="" value='123'>
					<input type="hidden" name="str_g" id="str_g" class="" value='123'>
					<input type="hidden" name="str_x" id="str_x" class="" value='123'>
					<input type="hidden" name="str_n" id="str_n" class="" value='123'>
					<input type="hidden" name="zongjia" value="">
					@foreach($list as $v)
					
					<tr>
						<input type="hidden" name="gid" value="{{ $v->gid }}" class="gids">
						
						<!-- 购物车改修  -->
						<td class="propic">
							
								<a href="/goods-100103.html" target="_blank" title="{{ $v->name }}&nbsp;{{ $v->description }}"><img src="{{ asset('/Admin/good/img/').'/'.$v->picname }}"  height="48" width="48"></a>
							
						</td>
						<td style="border-left:none; text-align:left; line-height:22px; color:#444;">
							
							<input type="text" class="sj_names" name="name" value="{{ $v->name }}&nbsp;" style="border:0px;width:150px;height:40px;">{{ $v->description }}
								
							
							
						</td>
						<td class="present_price" id="wanglu">
							
							<span class="price" name="price">{{ $v->price }}</span>
							
						</td>
						<td class="plusnminus">
							
								<span id='min' onclick="min(this)">-</span>
								<input size="2" class="goods_id" item_id="{{ $v->num }}" item_type="" is_dirty="0"  type="text" name="num" value='{{ $v->num }}'>
								<span id='add' onclick="add(this)">+</span>
							
						</td>
						<td class="subtotal">
							<span id="xj" class="xjs_s">{{ $v->price }}</span>
						</td>
						<td class='teas'><span class="ss">{{ $v->price }}</span> 茶币</td>
						<td>
							<a href="javascript:doDel({{ $v->id }})">删除</a>
						</td>
					</tr>
					@endforeach
					</form>
					<!-- 总计金额的那一栏 -->
					<tr>
						<td class="total_oper_td" colspan="8" style=" text-align:right; height:40px; padding-right:10px;">（不含运费）商品金额合计：<span class="totol_pri" id='total'></span>元

						</td>
					</tr>
				</tbody></table>
			</div>
			
			<div class="cartbot">
			<!--  结算按钮  -->
				<input class="jiesuan_btn" type="button" id="jiesuan_btno" onclick="Num()">
				<ul>
					<li class="goon_buy"><a href="{{url('/home/demo') }}">继续购物</a></li>
					<li class="empty_cart"><a href="javascript:doClear({{ session('users.id') }})">清空购物车</a></li>
				</ul>
			</div><div class="collect_pro_top">
			<div class="collect_pro_top_title">
			<a class="bfd_img_logo" target="_blank" style="margin-right:10px;"></a>买过该商品的茶友还买过</div>
			<div class="collect_pro_con">
			<ul>
				<li>
				<a title="碧螺牌" href="" target="_blank">
					<img alt="碧螺牌" src="http://img03.maichawang.com/upload/goods/102238/gg_32999.jpg!398" height="48" width="48">
				</a>
					<div class="pro_nameandpri">
						<a title="碧螺牌" href="" target="_blank">碧螺牌</a><p>￥300</p>
					</div>
				</li>
			</ul><div class="cb"></div></div></div>
		</div>

	<div class="blank10"></div>

	﻿<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
	<script>
		//加
		function add(obj){
			//定位到数量输入框，进行加操作
			var t=$(obj).parent().find('input[name*=num]');
			t.val(parseInt(t.val())+1);
			//数量
			var a = t.val();
			// alert(a);
			var b = $(obj).parent().parent().children('.present_price').find('span').text();
			// alert(b);
			xj = a*b;
			$(obj).parent().parent().children('.subtotal').find('span').text(xj);
			//插入赠送的茶币
			var z = $(obj).parent().parent().children('.teas').find('span').text(xj);
			// alert(z);这是一个对象 
			//调用总计函数
			all();
		}

		//减
		function min(obj){
			//定位到数量输入框，进行减操作
			var t=$(obj).parent().find('input[name*=num]');
			t.val(parseInt(t.val())-1);
			//不能小于一
			if(parseInt(t.val())<1){
			t.val(1);
			}
			//数量
			var a = t.val();
			// alert(a);
			var b = $(obj).parent().parent().children('.present_price').find('span').text();
			// alert(b);
			//计算出小计xj
			xj = a*b;
			//
			$(obj).parent().parent().children('.subtotal').find('span').text(xj);
			//插入赠送的茶币
			var z = $(obj).parent().parent().children('.teas').find('span').text(xj);
			// alert(z);这是一个对象
			//调用总计函数 
			all();
			}

		//临时总价，获取单价那一列
         var list = $('#wanglu');
         //定义一个临时总价
         var tmptotal = 0;
         //遍历累加求和算出total
     	for (var i = 0; i < list.length; i++) {
     		tmptotal += parseInt($(list[i]).text());
     		// alert($(list[i]).text());
     		// alert(total);
     	}
     	$('#total').html(tmptotal);


		//总计函数
         function all(){
         	//获取小计的那一列
         	var list = $('.subtotal');
         	//alert(list);这是对象
         	//定义一个总价
         	var total = 0;
         	//遍历累加求和算出total
         	for (var i = 0; i < list.length; i++) {
         		total += parseInt($(list[i]).text());
         		// alert($(list[i]).text());
         		// alert(total);
         	}
         	$('#total').html(total);
            // $('#zongj').val(total);

            //在隐藏域中插入总价
        	$("[name='zongjia']").val(total)
         }
         all();
		
		//删除
	 	function doDel(id){
        	if(confirm('确定删除吗？')){
        		var form = document.myform;
        		form.action = '/Home/shopcars/'+id;
        		form.submit();
        	}
        }	

        //清空购物车	
        function doClear(uid){
        	// alert(uid);
        	if(confirm('确定清空吗？')){
        		var form = document.myform_c;
        		form.action = '/Home/cars/clear'+'/'+uid;
        		form.submit();
        	}
        }

        //去结算，提交form表单  submit函数
       // $('#jiesuan_btno').click(function(){
       // 		form = $('#jisuan');
       // 		form.submit();
       // });
       	


       // var cnum = $(obj).parent().find('input[name*=num]').val();
       // $("[name='cnum']").val(cnum);
		//获取数量的列
		var str_s = '';//数量
		var str_g = '';//gid
		var str_x = '';//小计
		var str_n = '';//商品名
		// var Str = '';
		function Num(){
			var s = $('.goods_id');
		    for (var i = 0; i < s.length; i++) {
		    	// alert(333);
		       str_s += parseInt($(s[i]).val())+',';
		       // alert($strs);
		       $('#str_s').val(str_s);

			}
			var g = $('.gids');
			for (var i = 0; i < g.length; i++) {
			    	// alert(333);
			       str_g += parseInt($(g[i]).val())+',';
			       // alert($str_g);
			        $('#str_g').val(str_g);
			}

			var x = $('.xjs_s');
			for (var i = 0; i < x.length; i++) {
			    	// alert(333);
			       str_x += parseInt($(x[i]).text())+',';
			       // alert($str_x);
			        $('#str_x').val(str_x);
			}
			var n = $('.sj_names');
			for (var i = 0; i < n.length; i++) {
			    	// alert(333);
			       str_n += ($(n[i]).val())+',';
			       // alert($str_n);
			       $('#str_n').val(str_n);

			}

		
			// //将要传的值组合成字符串
   //      	Str = $str_s+'*'+$str_g+'*'+$str_x+'*'+$str_n;
   //      	 // alert(Str);
   //      	 //获取隐藏域
   //      	 document.getElementById('strb').value = Str;
   //      	 alert(document.getElementById('strb').value);
        	 var mycount = document.getElementById('jisuan');
        	 mycount.action="{{ url('home/count') }}";
        	 mycount.submit();
        }
       
	</script>
@endsection