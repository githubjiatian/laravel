@extends('Home.base.parent')
@section('content')
<!--收货地址列表-->

	<table style="border:1px solid green;border-spacing:;width:1000px;margin:0 auto;">
	@if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- 显示成功返回信息 -->
	    @if(session('msg'))
        	<div class="alert alert-success alert-icon">
			{{ session('msg') }}
			<i class="icon"></i>
			</div>
        @endif
        <!-- 显示失败返回信息 -->
        @if(session('error'))
        	<div class="alert alert-warning alert-icon">
			{{ session('error') }}
			<i class="icon"></i>
			</div>
		@endif
	<caption>收货地址列表:</caption>
	<!--隐藏域传值-->
		<form action="/admin/address" method="post" name="myform">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
		</form>
		<tr style="height:60px;background:yellowgreen">
			<th>详细地址</th>
			<th>邮编</th>
			<th>收货人姓名</th>
			<th>手机号码</th>
			<th>收货时间</th>
			<th>操做</th>
		</tr>
		@foreach($list as $v)
		<tr style="height:50px;">
			<td>{{ $v->adder }}</td>
			<td>{{ $v->post }}</td>
			<td>{{ $v->name }}</td>
			<td>{{ $v->cellphone }}</td>
			<td>@if ($v->time===1) 任何时候 @elseif ($v->time === 2) 工作日 @else 周末 @endif</td>
			<td style="background:white;"><a href="javascript:doDel({{ $v->id }})">删除</a></td>
		</tr>
		@endforeach
	</table>
	<a href="/home/ajaxdemo">添加收货地址</a>
	<script type="text/javascript">
	// 删除
	 function doDel(id){
        	if(confirm('确定删除吗？')){
        		var form = document.myform;
        		form.action = '/home/addresss/'+id;
        		form.submit();
        	}
        }
	</script>
@endsection