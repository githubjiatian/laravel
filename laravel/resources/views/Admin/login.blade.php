<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <meta charset="UTF-8">

        <meta name="description" content="Violate Responsive Admin Template">
        <meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">

        <title>Super Admin Responsive Template</title>
            
        <!-- CSS -->
        <link href="{{ asset('Admin/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/form.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/generics.css') }}" rel="stylesheet"> 
    </head>
    <body id="skin-blur-violate">
        <section id="login">
            <header>
                <h1>超级管理员</h1>
            </header>
        
            <div class="clearfix"></div>
            
            <!-- Login -->
            <form class="box tile animated active" id="box-login" action='{{ url("admin/dologin") }}' method='post'>
                {{ csrf_field() }}
                @if(session('msg'))
                    <h2 class="m-t-0 m-b-15">{{ session('msg') }}</h2>
                @else
                    <h2 class="m-t-0 m-b-15">登录</h2>
                @endif
                
                <input type="text" class="login-control m-b-10" placeholder="请输入用户名" name='name'>
                <input type="password" class="login-control" placeholder="请输入密码" name='password'>

                <!--验证码显示在视图-->
                <div class='row' style="margin-top:10px;">
                    <div class='col-xs-4'>
                        <input type="text" class="login-control m-b-10" placeholder="请输入验证码" name='mycode'>
                    </div>
                    <div class='col-xs-4'>
                        <img src="{{ url('admin/captch/'.time()) }}" onclick="this.src='{{ url('/admin/captch') }}/'+Math.random()" />
                    </div>

                </div>
                <div class="checkbox m-b-20">
                    <label>
                        <input type="checkbox">
                        记住密码
                    </label>
                </div>
                <button class="btn btn-sm m-r-5">登录</button>
                
                <small>
                    <a class="box-switcher" data-switch="box-register" href="">没有账号？ | </a>
                    <a class="box-switcher" data-switch="box-reset" href="">忘记密码？</a>
                </small>
            </form>
            
            <!-- Register -->
            <form class="box animated tile" id="box-register" action="{{ url("/admin/demo2/store") }}" method="post">
                <h2 class="m-t-0 m-b-15">注册</h2>
                <input type="text" class="login-control m-b-10" placeholder="姓名" name='name'>
                <input type="password" class="login-control m-b-10" placeholder="密码" name='pwd'>
                <input type="text" class="login-control m-b-10" placeholder="注册令牌码" name='csrf'> 
                <button class="btn btn-sm m-r-5">注册</button>

                <small><a class="box-switcher" data-switch="box-login" href="">已有账号？</a></small>
            </form>
            
            <!-- Forgot Password -->
            <form class="box animated tile" id="box-reset">
                <h2 class="m-t-0 m-b-15">重置密码</h2>
                <p>如需要重置密码请输入您的邮箱</p>
                <input type="email" class="login-control m-b-20" placeholder="请输入邮箱">    

                <button class="btn btn-sm m-r-5">重置密码</button>

                <small><a class="box-switcher" data-switch="box-login" href="">已有账号？</a></small>
            </form>
        </section>                      
        
        <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="{{ asset('Admin/js/jquery.min.js') }}"></script> <!-- jQuery Library -->
        
        <!-- Bootstrap -->
        <script src="{{ asset('Admin/js/bootstrap.min.js') }}"></script>
        
        <!--  Form Related -->
        <script src="{{ asset('Admin/js/icheck.js') }}"></script> <!-- Custom Checkbox + Radio -->
        
        <!-- All JS functions -->
        <script src="{{ asset('Admin/js/functions.js') }}"></script>
    </body>
</html>
