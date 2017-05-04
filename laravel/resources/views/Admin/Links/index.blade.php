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
		<!--删除要提交的表单-->
		<form action='/admin/links' method='get'>
    		<div class='medio-body'>
				链接名：<input type='text' class='form-control input-sm m-b-10' name='name'>
			</div>
    		<input type='submit' class='btn' value='搜索'>
        </form>
        <h3 class="block-title">友情链接列表</h3>
	    <div class="table-responsive overflow">
	    	<form action="/admin/links" method="post" name="myform">
	    		{{ csrf_field() }}
				{{ method_field('DELETE') }}
	    	</form>
	        <table class="table table-bordered table-hover tile">
	            <thead>
	                <tr>
	                    <th>ID</th>
	                    <th>logo</th>
	                    <th>链接名</th>
	                    <th>链接描述</th>
	                    <th>操作</th>
	                </tr>
	            </thead>
	            <tbody>
	            @foreach($list as $v)
	                <tr>
	                    <td>{{ $v->id }}</td>
	                    <td><img src="/Admin/upload/{{ $v->logo }}" width="20px" height="20px" /></td>
	                    <td>{{ $v->name }}</td>
	                    <td>{{ $v->description }}</td>
	                    <td>
	                    	<a href="/admin/links/{{ $v->id }}/edit">修改 | </a>
	                    	<a href="javascript:doDel({{ $v->id }})">删除</a>
	                    </td>
	                </tr>
	              @endforeach
	            </tbody>
	        </table>
	        <!--页码显示-->
	        {{ $list->appends($where)->links() }}
	    </div>
	</div>
	<script type="text/javascript">
	// 删除
	 function doDel(id){
        	if(confirm('确定删除吗？')){
        		var form = document.myform;
        		form.action = '/admin/links/'+id;
        		form.submit();
        	}
        }
	</script>

@endsection