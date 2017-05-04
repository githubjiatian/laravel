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
		<form action='/admin/address' method='get'>
    		<div class='medio-body'>
				收货人姓名：<input type='text' class='form-control input-sm m-b-10' name='name'>
			</div>
    		<input type='submit' class='btn' value='搜索'>
        </form>
        <h3 class="block-title">管理员列表</h3>
	    <div class="table-responsive overflow">
	    	<form action="/admin/address" method="post" name="myform">
	    		{{ csrf_field() }}
				{{ method_field('DELETE') }}
	    	</form>
	        <table class="table table-bordered table-hover tile">
	            <thead>
	                <tr>
	                    <th>ID</th>
	                    <th>姓名</th>
	                    <th>收货地址</th>
	                    <th>收货时间</th>
	                    <th>邮政编码</th>
	                    <th>固定电话</th>
	                    <th>移动电话</th>
	                    <th>操作</th>
	                </tr>
	            </thead>
	            <tbody>
	            @foreach($list as $v)
	                <tr>
	                    <td>{{ $v->id }}</td>
	                    <td>{{ $v->name }}</td>
	                    <td>{{ $v->adder }}</td>
	                    <td> @if ($v->time===1) 任何时候 @elseif ($v->time === 2) 工作日 @else 周末 @endif</td>
	                    <td>{{ $v->post }}</td>
	                    <td>{{ $v->telephone }}</td>
	                    <td>{{ $v->cellphone }}</td>
	                    <td>
	                    	<a href="/admin/address/{{ $v->id }}/edit">修改 | </a>
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
        		form.action = '/admin/address/'+id;
        		form.submit();
        	}
        }
	</script>

@endsection