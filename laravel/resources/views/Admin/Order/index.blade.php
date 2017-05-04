@extends('Admin.base.parent')
@section('content')
<div class="block-area" id="tableHover">
    <h3 class="block-title">订单列表</h3>
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
    	<form action='{{ url("admin/order") }}' method='post' name='myform'>
    		{{ csrf_field() }}
    		{{ method_field('DELETE') }}
    	</form>

    	<form action="{{ url('admin/order') }}" method='get'>
    		<div class='medio-body'>
    			订单号:<input type='text' class='form-control input-sm m-b-10' name='ordernum'>
    		</div>
    		<input type="submit" class='btn' value='搜索'>
    	</form>
    	 <table class="table table-bordered table-hover tile">
    		<thead>
    			<tr>

    				<th>用户id</th>
    				<th>商品id</th>
    				<th>地址id</th>
    				<th>商品名</th>
    				<th>订单号</th>
    				<th>下单时间</th>
    				
    				<th>购买数量</th>
    				<th>支付金额</th>
    				<th>物流状态</th>
    				<th>操作</th>
    			</tr>
    		</thead>
    		<tbody>
    			@foreach($list as $v)
					<tr>

						<td>{{ $v->uid }}</td>
						<td>{{ $v->gid }}</td>
						<td>{{ $v->arid }}</td>
						<td>{{ $v->name }}</td>
						<td>{{ $v->ordernum }}</td>
						<td>{{ $v->time }}</td>
						
						<td>{{ $v->num }}</td>
						<td>{{ $v->money }}</td>
						<td>
							<p>@if($v->flowstatus==1)买家已提交订单,未付款 @endif</p>
							<p>@if($v->flowstatus==2)买家已付款,请发货 @endif</p>
							<p>@if($v->flowstatus==3)买家已付款,请发货 @endif</p>
							<p>@if($v->flowstatus==4)买家已收货 @endif</p>
						</td>
						<td>
							<p>@if($v->flowstatus==3) <a class="btn btn-sm btn-alt m-r-5" href='javascript:doState({{ $v->ordernum }})'>发货</a> @endif</p>
						</td>
					</tr>
    			@endforeach
    		</tbody>
    	</table>
		{{ $list->appends($where)->links() }}
	</div>	
</div>
<script type="text/javascript">
	function doState(id){
		if(confirm('确认发货么?')){
			var form=document.myform;
			form.action="{{ url('/admin/order') }}"+'/'+id;
			form.method='get';
			form.submit();
		}
	}

</script>
@endsection