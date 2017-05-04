@extends('Home.base.parent')
@section('content')

<script type="text/javascript">
// alert($);
//添加新地址点击事件
function address(){
	// $('.ar').css('display','none');
	//开启模态框
	$('.addaddress').fadeIn('slow');
	// select省
	$.ajax({
	url:'/home/newaddress',
	type:'get',
	data:{'upid':0},
	async:false,
	dataType:'json',

	success:function(data)
	{
		// alert('ajax请求成功');
		// console.log(data);
		//遍历从数据库查出来的数据，生成option选项追加到select里

		for (var i = 0; i < data.length; i++) {
			$('#sheng').append("<option value="+data[i].id+">"+data[i].name+"</option>");
		};
	},
	error:function()
	{
		alert('ajax请求失败');
	}
});

}

//关闭模态框
function doout(){
	$('.addaddress').fadeOut('slow');
	// $('.ar').css('display','block');
	if($("select[name='sheng']")){
		var sheng=$("select[name='sheng']").val();
		// alert(sheng);
	};
	if($("select[name='shi']")){
		var shi=$("select[name='shi']").val();
		// alert(shi);
	};
	if($("select[name='xian']")){
		var xian=$("select[name='xian']").val();
		// alert(xian);
	};
	if($("select[name='cun']")){
		var cun=$("select[name='cun']").val();
		// alert(cun);
	};
	var detailed=$("input[name='detailed']").val();
	// alert(detailed);
	var name=$("input[name='name']").val();
	// alert(name);
	var cellphone=$("input[name='cellphone']").val();
	// alert(cellphone);
	if(sheng=='--请选择--'){alert('省级地址必须选择');return false;};
	if(shi=='--请选择--'){alert('市级地址必须选择');return false;};
	if(xian=='--请选择--'){alert('县级地址必须选择');return false;};
	if(cun=='--请选择--'){alert('村级地址必须选择');return false;};
	if(detailed==''){alert('详细地址必须填写'); return false;};
	if(name==''){alert('收货人必须填写');return false;};
	if(cellphone==''){alert('联系电话必须填写');return false;};


	$.ajax({
	url:'/home/newaddressadd',
	type:'get',
	async:false,
	data:{sheng:sheng,shi:shi,xian:xian,cun:cun,detailed:detailed,name:name,cellphone:cellphone},
	dataType:'json',

	success:function(data)
	{

		// alert(111);
		//生成一个新的td
		var xin = $("<td class='ar'><div class='xuankuang' style='border:1px solid greenyellow;background:#EFFDDF;margin:3px;'><p style='line-height:25px;font-size:15px;'><span></span><b>"+data['adder']+"</b></p><p>详细地址:<span>"+data['detailed']+"</span></p><p>收件人:<span>"+data['name']+"</span></p><p>联系电话<span>"+data['cellphone']+"</span></p><span style='display:none;'>"+data['id']+"</span></div></td>");
		$('#tianjia').before(xin);

	},
	error:function()
	{
		alert('ajax请求失败');
	}
});
}

// 隔行换色
$('.gdtd').mouseover(function(){			
	$(this).css('background','orange');
}).mouseout(function(){
	$(this).css('background','#E2E2E2');
});


// 点击选择收货地址
$('.xuankuang').live('click',function(){
$('.xuankuang').css('border','1px solid greenyellow');
$(this).css('border','1px solid red');
// style="border:1px solid greenyellow;"
var aa=($(this).find('b:eq(0)').text());
var bb=($(this).find('span:eq(1)').text());
var cc=($(this).find('span:eq(2)').text());
var dd=($(this).find('span:eq(3)').text());
var ee=($(this).find('span:eq(4)').text());
$('#aaa').val(aa);
$('#bbb').val(bb);
$('#ccc').val(cc);
$('#ddd').val(dd);
$('#eee').val(ee);
});
</script>

<script>

//当省级select被点击时触发
$("select[name='sheng']").live("change",function(){
	// alert(11);
	$(this).nextAll('select').remove();
	if($(this).val()!=='--请选择--'){
		var ob=$(this);
		$.ajax({
			url:'/home/newaddress',
			type:'get',
			async:false,
			data:{upid:$(this).val()},
			dataType:'json',
			success:function(data)
			{
				// alert(data);
				// 判断是不是最后一级城市
				if(data.length>0){
					var select=$("<select name='shi' id='shi'><option>--请选择--</option></select>");
					//遍历从数据库里查出来的数据,生成option选项追加到selectli
					for (var i = 0; i < data.length; i++) {
						$(select).append("<option value="+data[i].id+">"+data[i].name+"</option>");
					};
					//外部插入到前一个select后面
					ob.after(select);
				}
			},
			error:function()
			{
				alert('ajax请求失败');
			}
		});
	}
});
//当市的select被点击时触发
$('#shi').live("change",function(){
	// alert(11);
	$(this).nextAll('select').remove();
	if($(this).val()!=='--请选择--'){
		var oob=$(this);
		$.ajax({
			url:'/home/newaddress',
			type:'get',
			async:false,
			data:{upid:$(this).val()},
			dataType:'json',
			success:function(data)
			{
				// alert(data);
				// 判断是不是最后一级城市
				if(data.length>0){
					var select=$("<select name='xian' id='xian'><option>--请选择--</option></select>");
					//遍历从数据库里查出来的数据,生成option选项追加到selectli
					for (var i = 0; i < data.length; i++) {
						$(select).append("<option value="+data[i].id+">"+data[i].name+"</option>");
					};
					//外部插入到前一个select后面
					oob.after(select);
				}
			},
			error:function()
			{
				alert('ajax请求失败');
			}
		});
	}
});
//当县的select被点击时触发
$('#xian').live("change",function(){
	// alert(11);
	$(this).nextAll('select').remove();
	if($(this).val()!=='--请选择--'){
		var oob=$(this);
		$.ajax({
			url:'/home/newaddress',
			type:'get',
			async:false,
			data:{upid:$(this).val()},
			dataType:'json',
			success:function(data)
			{
				// alert(data);
				// 判断是不是最后一级城市
				if(data.length>0){
					var select=$("<select name='cun' id='cun'><option>--请选择--</option></select>");
					//遍历从数据库里查出来的数据,生成option选项追加到selectli
					for (var i = 0; i < data.length; i++) {
						$(select).append("<option value="+data[i].id+">"+data[i].name+"</option>");
					};
					//外部插入到前一个select后面
					oob.after(select);
				}
			},
			error:function()
			{
				alert('ajax请求失败');
			}
		});
	}
});
function doSubmit(){
	var from=document.myform;
	var adder=from.adder.value;
	if(adder.length<1){ alert('收件地址必须选择'); return false;}
}	
</script>
<center>
<img src="/Home/Porder/img/up.png" alt=".." style="margin:10px 0 0 0">

		<div style="width:990px;margin:10px 0 0 0;padding:0px;">


			<form name="myform" action="/home/addorder" method='get' onsubmit="return doSubmit();">	
				<table >
					<tr>
						<th style="background-color:#EFFDDF;width:198px;line-height:25px;font-size:15px;"><center>购物清单</center></th>
						<th style="background-color:#E2E2E2;width:198px;line-height:25px;font-size:15px;"><center>商品编号</center></th>
						<th style="background-color:#E2E2E2;width:198px;line-height:25px;font-size:15px;"><center>商品名称</center></th>
						<th style="background-color:#E2E2E2;width:198px;line-height:25px;font-size:15px;"><center>会员价</center></th>
						<th style="background-color:#E2E2E2;width:198px;line-height:25px;font-size:15px;"><center>购买数量</center></th>
						<th style="background-color:#E2E2E2;width:198px;line-height:25px;font-size:15px;"><center>小计</center></th>
					</tr>
				@foreach($ob as $v)
					<tr>
						<td style="background-color:#EFFDDF;width:198px;line-height:25px;font-size:15px;"><center></center></td>
						<td class="gdtd" style="background-color:#E2E2E2;width:198px;line-height:25px;font-size:15px;"><center>{{ 100000+$v->gid }}</center></td>
						<input type="hidden" name="gid[]" value="{{ $v->gid }}">
						<td class="gdtd" style="background-color:#E2E2E2;width:198px;line-height:25px;font-size:15px;"><center>{{ $v->name }}</center></td>
						<input type="hidden" name="gname[]" value="{{ $v->name }}">
						<td class="gdtd" style="background-color:#E2E2E2;width:198px;line-height:25px;font-size:15px;"><center>{{ $v->price }}</center></td>
						<input type="hidden" name="money[]" value="{{ $v->price }}">
						<td class="gdtd" style="background-color:#E2E2E2;width:198px;line-height:25px;font-size:15px;"><center>{{ $v->num }}</center></td>
						<input type="hidden" name="num[]" value="{{ $v->num }}">
						<td class="gdtd" style="background-color:#E2E2E2;width:198px;line-height:25px;font-size:15px;"><center>{{ $v->total }}</center></td>
						<input type="hidden" name="xiaomoney[]" value="{{ $v->total }}">
					</tr>

				@endforeach
					<tr>
						<td style="background-color:#EFFDDF;width:198px;line-height:25px;font-size:15px;"></td>
						<td style="background-color:#E2E2E2;width:198px;line-height:25px;font-size:15px;"></td>
						<td style="background-color:#E2E2E2;width:198px;line-height:25px;font-size:15px;"></td>
						<td style="background-color:#E2E2E2;width:198px;line-height:25px;font-size:15px;"></td>
						<td style="background-color:#E2E2E2;width:198px;" colspan="2" align="center">商品金额合计:<span style="font-family:verdana;font-size:90%;color:red">{{ $amount }}</span></td>
						<input type="hidden" name="damoney" value="{{ $amount }}">
					</tr>
					<p></p>
					<tr>
						<td style="background-color:#EFFDDF;width:198px;line-height:25px;font-size:15px;"><center>收货信息</center></td>

						@foreach($ad as $v)
							<td class='ar'>
								<div class='xuankuang' style="border:1px solid greenyellow;background:#EFFDDF;margin:3px;">
									<p style="line-height:25px;font-size:15px;"><span></span><b>{{ $v->adder }}</b></p>
									<p>详细地址:<span>{{ $v->detailed }}</span></p>
									<p>收货人:<span>{{ $v->name }}</span></p>
									<p>联系电话:<span>{{ $v->cellphone }}</span></p>
									<span style='display:none;'>{{ $v->id }}</span>
								</div>
							</td>
						@endforeach
						<td id='tianjia' style="font-size:20px;color:green;">
							<a style="font-size:20px;color:green;" onclick="address()">添加新地址</a>
						</td>
						<td>
							<div style="width:500px;height:500px;position:fixed;left:300px;top:50px;z-index:1;background:#EFFDDF;display:none;" class="addaddress">
								<p>选择地区:<select name="sheng" id="sheng"><option>--请选择--</option></select></p>
								<p>详细地址:<input type="text" name='detailed'></p>
								<p>收货人:&nbsp;&nbsp;&nbsp;<input type="text" name='name'></p>
								<p>联系电话:<input type="text" name='cellphone'></p>

								<span onclick="doout()"><img src="/Home/Scar/img/2.png" alt=""></span>

							</div>
						</td>
					</tr>
					<tr>
						<td style="background-color:#EFFDDF;width:198px;line-height:25px;font-size:15px;"><center></center></td>
						<td style="background-color:#E2E2E2;width:198px;line-height:25px;font-size:15px;">备注:<input type="text" name='note'></td>
					</tr>
				</table>
				<script type="text/javascript">

				</script>
				<input id='aaa' type="hidden" name="adder" value="">
				<input id='bbb' type="hidden" name="detailed" value="">
				<input id='ccc' type="hidden" name="renname" value="">
				<input id='ddd' type="hidden" name="cellphone" value="">
				<input id='eee' type="hidden" name="address_id" value="">
				<!-- 提交按钮 -->
				<input type="image" src='/home/Scar/img/tijiao.png'>
			</form>	



		</div>
	</div>
</center>


<!-- 收货地址 -->

<!-- <div class="delivery_info" id="delivery">
		<div class="delivery_info_right">
			
			<div id="address" style="display: none;">
				<div class="item"><span>收货人：</span><span class="address_coustomer">wanglu</span></div>
				<div class="item"><span>地址：</span><span class="address_address">北京 昌平区  回龙观</span></div>
												<div class="item"><span>手机号：</span><span class="address_mobile">182****2777</span></div>
				<div class="item"><span>收货时间：</span>仅工作日送货</div>
			</div>
			<div id="address_list" style="display: block;">
				
				<div class="address selected" onclick="select_address(28799)">
					<p class="title"><span class="province">北京 昌平区 </span> (wanglu 收)</p>
					<p>回龙观 <span class="mobile">182****2777</span></p>
					<p>仅工作日送货</p>
				</div>
				
				<a href="#" class="add_address_btn" onclick="switch_to_add();return false;">添加新地址</a>
			</div>
			<div id="address_add" style="display: none;">
				<form id="form_address_add">
					<div class="item location"><b>选择地区：</b><span class="address_selector"><select name="address_selector_"><option value="">请选择</option><option value="2" class="final">北京</option><option value="3" class="final">安徽</option><option value="4" class="final">福建</option><option value="5" class="final">甘肃</option><option value="6" class="final">广东</option><option value="7" class="final">广西</option><option value="8" class="final">贵州</option><option value="9" class="final">海南</option><option value="10" class="final">河北</option><option value="11" class="final">河南</option><option value="12" class="final">黑龙江</option><option value="13" class="final">湖北</option><option value="14" class="final">湖南</option><option value="15" class="final">吉林</option><option value="16" class="final">江苏</option><option value="17" class="final">江西</option><option value="18" class="final">辽宁</option><option value="19" class="final">内蒙古</option><option value="20" class="final">宁夏</option><option value="21" class="final">青海</option><option value="22" class="final">山东</option><option value="23" class="final">山西</option><option value="24" class="final">陕西</option><option value="25" class="final">上海</option><option value="26" class="final">四川</option><option value="27" class="final">天津</option><option value="28" class="final">西藏</option><option value="29" class="final">新疆</option><option value="30" class="final">云南</option><option value="31" class="final">浙江</option><option value="32" class="final">重庆</option><option value="33" class="final">香港</option><option value="34" class="final">澳门</option><option value="35" class="final">台湾</option></select><input name="address_selector" type="hidden"></span></div>
					<div class="item address"><b>详细地址：</b><input name="address" type="text"> <span class="imp_point">*</span></div>
					<div class="item zipcode"><b>邮政编码：</b><input name="zipcode" type="text"></div>
					<div class="item consignee"><b>收货人：</b><input name="consignee" type="text"> <span class="imp_point">*</span></div>
					<div class="item consignee"><b>手机：</b><input class="phonenum_text" name="mobile" type="text"> 固定电话：<input class="phone_text2" name="tel" type="text"> <span class="imp_point">*</span> 手机号码必填，固定电话可不填</div>
					<div class="item consignee">
						<b>送货时间：</b>
						<label><input name="best_time" value="仅工作日送货" checked="" type="radio">仅工作日送货</label>
						<label><input name="best_time" value="工作日、双休日均可送货" type="radio">工作日、双休日均可送货</label>
						<label><input name="best_time" value="仅双休日送货" type="radio">仅双休日送货</label>
					</div>
					<input class="add_ok_btn" value="确认该地址" type="submit"> <a href="#" class="showlist" onclick="switch_to_list();return false;">返回从地址列表中选择</a>
				</form>
			</div>
			
		</div>
		<div class="delivery_info_left">
			<p>收货信息</p>
			<a href="#" onclick="switch_to_list(); return false;">更改</a>
		</div>
		<div class="cb"></div>
	</div> -->
@endsection