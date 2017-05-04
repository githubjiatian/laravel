@extends('Home.base.parent')
@section('content')

<center>
<div style="margin:18px 0 15px 0;">
	<table>
		<tr class='allorder' align='center' style="background:#FFD89E;">
			<td class='allorder0' style="width:150px;height:30px;">所有订单</td>
			<td class='allorder1' style="width:150px;height:30px;background:#FFD89E;">待付款</td>
			<td class='allorder2' style="width:150px;height:30px;background:#FFD89E;">待发货</td>
			<td class='allorder3' style="width:150px;height:30px;background:#FFD89E;">待收货</td>
			<td class='allorder4' style="width:150px;height:30px;background:#FFD89E;">待评价</td>
			<td style="width:200px;height:30px;background:#FFD89E;">@if(count($r)>0)亲,您还有商品未评价哦<a href="">去评价</a>@endif</td>
		</tr>
	</table>
</div>
<div>
<table style="background:#FFF7EB;">
	<tr>
		<td style="width:200px;height:30px;background:#FFF7EB;">下单时间</td>
		<td style="width:200px;height:30px;background:#FFF7EB;">商品名称</td>
		<td style="width:150px;height:30px;background:#FFF7EB;">订单号</td>
		<td style="width:100px;height:30px;background:#FFF7EB;">单价</td>
		<td style="width:100px;height:30px;background:#FFF7EB;">数量</td>
		<td style="width:100px;height:30px;background:#FFF7EB;">该商品小计</td>
		<td style="width:100px;height:30px;background:#FFF7EB;">商品订单总额</td>
	</tr>
</table>
<table>
	@foreach($all as $ob)
		<tr class='allorder00' style="display:block;">
			<td style="width:200px;height:30px;background:#FFF7EB;">{{ $ob->time }}</td>
			<td style="width:200px;height:30px;background:#FFF7EB;">{{ $ob->name }}</td>
			<td style="width:150px;height:30px;background:#FFF7EB;">{{ $ob->ordernum }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->money }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->num }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->xiaomoney }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->damoney }}</td>
		</tr>
	@endforeach
	@foreach($q as $ob)
		<tr class='allorder01' style="display:none;">
			<td style="width:200px;height:30px;background:#FFF7EB;">{{ $ob->time }}</td>
			<td style="width:200px;height:30px;background:#FFF7EB;">{{ $ob->name }}</td>
			<td style="width:150px;height:30px;background:#FFF7EB;">{{ $ob->ordernum }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->money }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->num }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->xiaomoney }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->damoney }}</td>
		</tr>
	@endforeach
	@foreach($w as $ob)
		<tr class='allorder02' style="display:none;">
			<td style="width:200px;height:30px;background:#FFF7EB;">{{ $ob->time }}</td>
			<td style="width:200px;height:30px;background:#FFF7EB;">{{ $ob->name }}</td>
			<td style="width:150px;height:30px;background:#FFF7EB;">{{ $ob->ordernum }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->money }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->num }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->xiaomoney }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->damoney }}</td>
		</tr>
	@endforeach
	@foreach($e as $ob)
		<tr class='allorder03' style="display:none;">
			<td style="width:200px;height:30px;background:#FFF7EB;">{{ $ob->time }}</td>
			<td style="width:200px;height:30px;background:#FFF7EB;">{{ $ob->name }}</td>
			<td style="width:150px;height:30px;background:#FFF7EB;">{{ $ob->ordernum }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->money }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->num }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->xiaomoney }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->damoney }}<a href="/home/shouhuo/{{ $ob->gid }}">确认收货</a></td>
		</tr>
	@endforeach
	@foreach($r as $ob)
		<tr class='allorder04' style="display:none;">
			<td style="width:200px;height:30px;background:#FFF7EB;">{{ $ob->time }}</td>
			<td style="width:200px;height:30px;background:#FFF7EB;">{{ $ob->name }}</td>
			<td style="width:150px;height:30px;background:#FFF7EB;">{{ $ob->ordernum }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->money }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->num }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->xiaomoney }}</td>
			<td style="width:100px;height:30px;background:#FFF7EB;">{{ $ob->damoney }}&nbsp;<a href="/home/qpj/{{ $ob->gid }}">去评价</a></td>
		</tr>
	@endforeach
	<!-- <div style='clear:both;height:5px;'></div> -->
	<!-- <div id='did' style='width:300px;height:400px;border:1px solid blue;'> -->
		
	<!-- </div> -->
	<div>
		<tr></tr>
	</div>
</div>
</table>
</center>
<script type="text/javascript" src='/js/jquery-1.8.3.min.js'></script>
<script type="text/javascript">
	$('.allorder0').click(function(){
		$('.allorder0').css('background','#FFD89E');
		$('.allorder1').css('background','#FFD89E');
		$('.allorder2').css('background','#FFD89E');
		$('.allorder3').css('background','#FFD89E');
		$('.allorder4').css('background','#FFD89E');
		$(this).css('background','#FB8636');
		$('.allorder00').css('display','none');
		$('.allorder01').css('display','none');
		$('.allorder02').css('display','none');
		$('.allorder03').css('display','none');
		$('.allorder04').css('display','none');
		$('.allorder00').css('display','block');
	});
	$('.allorder1').click(function(){
		$('.allorder0').css('background','#FFD89E');
		$('.allorder1').css('background','#FFD89E');
		$('.allorder2').css('background','#FFD89E');
		$('.allorder3').css('background','#FFD89E');
		$('.allorder4').css('background','#FFD89E');		
		$(this).css('background','#FB8636');
		$('.allorder00').css('display','none');
		$('.allorder01').css('display','none');
		$('.allorder02').css('display','none');
		$('.allorder03').css('display','none');
		$('.allorder04').css('display','none');
		$('.allorder01').css('display','block');
	});
	$('.allorder2').click(function(){
		$('.allorder0').css('background','#FFD89E');
		$('.allorder1').css('background','#FFD89E');
		$('.allorder2').css('background','#FFD89E');
		$('.allorder3').css('background','#FFD89E');
		$('.allorder4').css('background','#FFD89E');
		$(this).css('background','#FB8636');
		$('.allorder00').css('display','none');
		$('.allorder01').css('display','none');
		$('.allorder02').css('display','none');
		$('.allorder03').css('display','none');
		$('.allorder04').css('display','none');
		$('.allorder02').css('display','block');
	});
	$('.allorder3').click(function(){
		$('.allorder0').css('background','#FFD89E');
		$('.allorder1').css('background','#FFD89E');
		$('.allorder2').css('background','#FFD89E');
		$('.allorder3').css('background','#FFD89E');
		$('.allorder4').css('background','#FFD89E');
		$(this).css('background','#FB8636');
		$('.allorder00').css('display','none');
		$('.allorder01').css('display','none');
		$('.allorder02').css('display','none');
		$('.allorder03').css('display','none');
		$('.allorder04').css('display','none');
		$('.allorder03').css('display','block');
	});
	$('.allorder4').click(function(){
		$('.allorder0').css('background','#FFD89E');
		$('.allorder1').css('background','#FFD89E');
		$('.allorder2').css('background','#FFD89E');
		$('.allorder3').css('background','#FFD89E');
		$('.allorder4').css('background','#FFD89E');
		$(this).css('background','#FB8636');
		$('.allorder00').css('display','none');
		$('.allorder01').css('display','none');
		$('.allorder02').css('display','none');
		$('.allorder03').css('display','none');
		$('.allorder04').css('display','none');
		$('.allorder04').css('display','block');
	});

</script>

@endsection