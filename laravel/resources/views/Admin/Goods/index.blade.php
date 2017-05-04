@extends('Admin.base.parent')
@section('content')
<div class="block-area" id="tableHover">
	<h3 class="block-title">商品信息列表</h3>
	@if(session('msg'))
    	<div class="alert alert-success alert-icon">
		{{ session('msg') }}
		<i class="icon"></i>
		</div>
    @endif
    @if(session('error'))
    	<div class="alert alert-warning alert-icon">
		{{ session('error') }}
		<i class="icon"></i>
		</div>
	@endif
	 <div class="table-responsive overflow">
		<form action='{{ url("admin/goods") }}' method='post' name='myform'>
    		{{ csrf_field() }}
    		{{ method_field('DELETE') }}
    	</form>

		<form action="{{url('/admin/goods')}}" method='get'>
			<div class='medio-body'>
				商品名: <input type="text" class='form-control input-sm m-b-10' name='name'>
			</div>
			<input type="submit" class='btn' value='搜索'>
		</form>
		<table class="table table-bordered table-hover tile">
			<thead>
				<tr>
	                <th>ID</th>
	                <th>类Id</th>
	                <th>商品名</th>
	                <th>价格</th>
	                <th>商品品牌</th>
	                <th>商品等级</th>
	                <th>净重</th>
	                <th>商业用途</th>
	                <th>产地</th>
	                <th>采摘时间</th>
	                <th>商品图片</th>
	                <th>是否是导航商品</th>
	                <th>是否推荐商品</th>
	                <th>是否上架/下架</th>
	                <th>库存</th>
	                <th>操作</th>
	            </tr>
            </thead>
            <tbody>
            	@foreach($list as  $v)
					<tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->tid }}</td>
                        <td>{{ $v->name }}</td>
                        <td>{{ $v->price }}</td>
                        <td>{{ $v->brand }}</td>
                        <td>{{ $v->grade }}</td>
                        <td>{{ $v->weight }}</td>
                        <td>{{ $v->purpose }}</td>
                        <td>{{ $v->place }}</td>
                        <td>{{ $v->picktime }}</td>
                        <td><div>
                        	<img src="/Admin/good/img/{{ $v->picname }}" alt="等待加载中" width='80'> 
                        </div></td>
                        <td>{{ $v->navigation }}</td>
                        <td>{{ $v->goodstuff }}</td>
                        <td>{{ $v->sell }}</td>
                        <td>{{ $v->num }}</td>
                        <td>
                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->id }})'>删除</a>
                        	<a class="btn btn-sm btn-alt m-r-5" href="{{ url('admin/goods').'/'.$v->id }}/edit">修改</a>
                        </td>
                    </tr>
				@endforeach
            </tbody>
		</table>
		{{ $list->appends($where)->links() }}
	</div>
</div>
<script type="text/javascript">
    function doDel(id){
    	if(confirm('确定删除吗？')){
    		var form = document.myform;
    		form.action = '/admin/goods/'+id;
    		form.submit();
    	}
    }
</script>
@endsection