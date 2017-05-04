@extends('Home.base.parent')
@section('content')

	<div style="width:900px;height:450px;margin:5px auto;">
	<h3 align="center">添加收货地址</h3>
	@if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
		<table style="border:1px solid green;width:900px;">
			<tr>
				<th width="150px">地址:</th>
				<td>
				<form action="/home/addresss" method="post" name="myajax">
				{{ csrf_field() }}
					<select name="city[]" id="cid">
						<option value="">--请选择--</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>收货人：</th>
				<td><input type="text" name="name" value="{{ session('users.name') }}"></td>
			</tr>
			<tr>
				<th>邮编：</th>
				<td><input type="text" name="post"></td>
			</tr>
			<tr>
				<th>手机号：</th>
				<td><input type="text" name="cellphone"></td>
			</tr>
			<tr>
				<th>收货时间：</th>
				<td>
					<input type="radio" name="time" value="1">任何时候
					<input type="radio" name="time" value="2">工作日
					<input type="radio" name="time" value="3">休息日
				</td>
			</tr>
		</table>
	
	
		<input type="submit" value="添加">
	</form>
	</div>
	<script type="text/javascript" src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
	<script>
		 //Ajax
	    $.ajax({
	    	url:'/home/ajaxdemo/doget',
	    	type:'get',
	    	async:true,
	    	data:{upid:0},
	    	dataType:'json',

	    	success:function(data)
	    	{
	    		//console.log(data);
	    		//遍历从数据库查出来的数据，生成option选项追加到select里
	    		for (var i = 0; i < data.length; i++) {
						$('#cid').append("<option value="+data[i].id+">"+data[i].name+"</option>");
					};
	    	},
	    	error:function()
	    	{
	    		alert('ajax请求失败');
	    	}
	    });
	    //给所有的select标签绑定change事件
		$('select').live("change",function(){
			//干掉当前你选择的select标签后面的select标签
			$(this).nextAll('select').remove();
			//判断你选择是不是--请选择--
			if($(this).val() != '--请选择--'){
				//因为在ajax的回调函数中需要使用当前对象，但是$(this)在ajax的回调函数中用不了
				var ob = $(this);
				$.ajax({
					url:'/home/ajaxdemo/dopost',
					type:'post',
					async:true,
					// 
					data:{upid:$(this).val(),'_token':"{{ csrf_token() }}"},
					dataType:'json',
					success:function(data)
					{
						// alert(data);
						// console.log(data);
						//判断是不是最后一级城市，最后一级城市查数据库length==0
						if(data.length>0){
							//生成一个新的select标签
							var select = $("<select name='city[]'><option>--请选择--</option></select>");
							//遍历从数据库查出来的数据，生成option选项追加到select里
							for (var i = 0; i < data.length; i++) {
								$(select).append("<option value="+data[i].id+">"+data[i].name+"</option>");
							};
							//外部插入到前一个select后面
							ob.after(select);
						}
					},
					error:function()
					{
						alert('ajax请求失败');
					}
				});
			}
		});
	</script>
@endsection