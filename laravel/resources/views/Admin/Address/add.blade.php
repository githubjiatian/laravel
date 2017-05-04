@extends('Admin.base.parent')
@section('content')

	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加收货地址</h3>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <form action='/admin/address' method='post'>
                {{ csrf_field() }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入姓名" name='name'>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入收货地址" name='adder'>
                </div>
                 <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入邮政编码" name='post'>
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='time'>
                        <option value='0'>--收货时间：请选择--</option>
                        <option value='1'>收货时间：任何时候</option>
                        <option value='2'>收货时间：工作日</option>
                        <option value='3'>收货时间：休息日</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入固定电话" name='telephone'>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入手机号" name='cellphone'>
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>

@endsection