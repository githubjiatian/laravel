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
		<form action='/admin/puser' method='get'>
    		<div class='medio-body'>
				姓名：<input type='text' class='form-control input-sm m-b-10' name='name'>
			</div>
    		<div>
    			性别：<select name='sex' class='form-control input-sm m-b-10'>
    				<option value=''>--请选择--</option>
    				<option value='1'>--男--</option>
    				<option value='2'>--女--</option>
    			</select>
    		</div>
    		<input type='submit' class='btn' value='搜索'>
        </form>
        <h3 class="block-title">普通会员员列表</h3>
	    <div class="table-responsive overflow">
	    	<form action="/admin/puser" method="post" name="myform">
	    		{{ csrf_field() }}
				{{ method_field('DELETE') }}
	    	</form>
	        <table class="table table-bordered table-hover tile">
	            <thead>
	                <tr>
	                    <th>ID</th>
	                    <th>头像</th>
	                    <th>姓名</th>
	                    <th>密码</th>
	                    <th>性别</th>
	                    <th>邮箱</th>
	                    <th>余额</th>
	                    <th>积分</th>
	                    <th>状态</th>
	                    <th>操作</th>
	                </tr>
	            </thead>
	            <tbody>
	            @foreach($list as $v)
	                <tr>
	                    <td>{{ $v->id }}</td>
	                    <td><img src="/Admin/upload/{{ $v->pic }}" width="20px" height="20px" /></td>
	                    <td>{{ $v->name }}</td>
	                    <td>{{ $v->pwd }}</td>
	                    <td>@if($v->sex === 1) 男 @else 女 @endif</td>
	                    <td>{{ $v->email }}</td>
	                    <td>{{ $v->balance }}</td>
	                    <td>{{ $v->integral }}</td>
	                    <td>@if($v->status==1) 正常 @else 禁封 @endif</td>
	                    <td>
	                    	<a href="/admin/puser/{{ $v->id }}/edit">修改 | </a>
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
        		form.action = '/admin/puser/'+id;
        		form.submit();
        	}
        }
	</script>

@endsection