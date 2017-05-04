@extends('Admin.base.parent')

@section('content')

	<!-- Table Hover -->
	<div class="block-area" id="tableHover">
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
        <h3 class="block-title">网站配置列表</h3>
	    <div class="table-responsive overflow">
	    	<form action="/admin/config" method="post" name="myform">
	    		{{ csrf_field() }}
				{{ method_field('DELETE') }}
	    	</form>
	        <table class="table table-bordered table-hover tile">
	            <thead>
	                <tr>
	                    <th>ID</th>
	                    <th>网站名称</th>
	                    <th>logo</th>
	                    <th>状态</th>
	                    <th>版权</th>
	                    <th>邮箱</th>
	                    <th>操作</th>
	                </tr>
	            </thead>
	            <tbody>
	            @foreach($list as $v)
	                <tr>
	                    <td>{{ $v->id }}</td>
	                    <td>{{ $v->name }}</td>
	                    <td><img src="/Admin/upload/{{ $v->logo }}" width="20px" height="20px" /></td>
	                    <td>@if($v->status === 1) 正常 @else 维护中 @endif</td>
	                    <td>{{ $v->copy}}</td>
	                    <td>{{ $v->email }}</td>
	                    <td>
	                    	<a href="/admin/config/{{ $v->id }}/edit">修改</a>
	                    </td>
	                </tr>
	              @endforeach
	            </tbody>
	        </table>
	    </div>
	</div>

@endsection