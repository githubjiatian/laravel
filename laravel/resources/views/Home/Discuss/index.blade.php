@extends('Home.base.parent')
@section('content')

	<div style="width:900px;margin:10px auto 10px;">
		<div style="width:350px;height:210px;background:blue;float:left;">
			<img src="{{ asset('Admin/good/img') }}/{{ $qpj->picname }}" style="width:350px;height:210px;">
		</div>
		<div style="width:540px;height:210px;float:right;">
			<center><div style="margin:20px;">
				<b>{{ $qpj->name }}</b> <br> 单价：￥<span style="font-color:red;">{{ $qpj->price }}
			</div></center>
			<table style="background-color:#F8F8F8;width:500px;height:50px;margin:10px auto;">
				<tr>
					<td>品牌：{{ $qpj->brand }}</td>
					<td>等级：{{ $qpj->grade }}</td>
				</tr>
				<tr>
					<td>产地：{{ $qpj->place }}</td>
					<td>净重：{{ $qpj->weight }}</td>
				</tr>
			</table>
		</div>
		<div style="clear:both;width:900px;height:10px;"></div>
		<div style="width:900px;">
			<form action="/home/qpj/{{ $qpj->id }}" method="post">
			<input type="hidden" name="gid" value="{{ $qpj->id }}">
			{{ csrf_field() }}
			<div style="width:900px;margin:5px auto 25px;;background-color:#F8F8F8;">
				<textarea name="content" id="" cols="60" rows="6" style="resize:none;" placeholder="请评价本商品"></textarea>
				评分：
				<input type="radio" name="level" value="1"> 一星 
				<input type="radio" name="level" value="2"> 二星 
				<input type="radio" name="level" value="3"> 三星 
				<input type="radio" name="level" value="4"> 四星 
				<input type="radio" name="level" value="5"> 五星
				<br>
				<input type="submit" value="提交">
			</div>
			
			</form>
			
			
		</div>
	</div>

@endsection