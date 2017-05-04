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
		<form action='/admin/discuss' method='get'>
    		<div>
    			评价等级：<select  class='form-control input-sm m-b-10' name="level">
    				<option value=''>--请选择--</option>
    				<option value='1'>--一星--</option>
    				<option value='2'>--二星--</option>
    				<option value='3'>--三星--</option>
    				<option value='4'>--四星--</option>
    				<option value='5'>--五星--</option>
    			</select>
    		</div>
    		<input type='submit' class='btn' value='搜索'>
        </form>
        <h3 class="block-title">商品评价列表</h3>
	    <div class="table-responsive overflow">
	    	<form action="/admin/discuss" method="post" name="myform">
	    		{{ csrf_field() }}
				{{ method_field('DELETE') }}
	    	</form>
	        <table class="table table-bordered table-hover tile">
	            <thead>
	                <tr>
	                    <th>ID</th>
	                    <th>被评价商品id</th> 
	                    <th>评价内容</th>
	                    <th>评价时间</th>
	                    <th>评价星级</th>
	                    <th>评价人id</th>
	                    <th>操作</th>
	                </tr>
	            </thead>
	            <tbody>
	            @foreach($list as $v)
	                <tr>
	                    <td>{{ $v->id }}</td>
	                    <td>{{ $v->gid }}</td>
	                    <td>{{ $v->content }}</td>
	                    <td>{{ $v->dtime }}</td>
	                    <td>{{ $v->level }}</td>
	                    <td>{{ $v->uid }}</td>
	                    <td>
	                    	<a href="/admin/discuss/{{ $v->id }}/edit">查看详情 | </a>
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
        		form.action = '/admin/discuss/'+id;
        		form.submit();
        	}
        }
	</script>

@endsection