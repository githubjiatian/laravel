@extends('Admin.base.parent')
@section('content')

	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加用户</h3>

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
            <form action='/admin/puser' method='post'>
                {{ csrf_field() }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='name'>
                </div>
                <div class="col-lg-4">
                    <input type="password" class="form-control m-b-10" placeholder="请输入密码" name='pwd'>
                </div>
                 <div class="col-lg-4">
                    <input type="email" class="form-control m-b-10" placeholder="请输入邮箱" name='email'>
                </div>
                <div class="col-lg-4">
                    <select class="form-control m-b-10" name='sex'>
                        <option value='1'>男</option>
                        <option value='2'>女</option>
                    </select>
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>

@endsection