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
        <link href="{{ asset('Admin/css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/form.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/calendar.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/icons.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/generics.css') }}" rel="stylesheet">
    </head>
    <body id="skin-blur-violate">

        <header id="header" class="media">
            <a href="" id="menu-toggle"></a> 
            <a class="logo pull-left" href="/admin/demo">首页</a>
            <div class="media-body">
                <div class="media" id="top-menu">
                    <div id="time" class="pull-right">
                        <span id="hours"></span>
                        :
                        <span id="min"></span>
                        :
                        <span id="sec"></span>
                    </div>
                    
                    <div class="media-body">
                        <input type="text" class="main-search">
                    </div>
                </div>
            </div>
        </header>
        
        <div class="clearfix"></div>
        
        <section id="main" class="p-relative" role="main">
            
            <!-- Sidebar -->
            <aside id="sidebar">
                
                <!-- Sidbar Widgets -->
                <div class="side-widgets overflow">
                    <!-- Profile Menu -->
                    <div class="text-center s-widget m-b-25 dropdown" id="profile-menu">
                        <a href="" data-toggle="dropdown">
                            <img class="profile-pic animated" src="{{ asset('Admin/img/profile-pic.jpg') }}" alt="">
                        </a>
                        <ul class="dropdown-menu profile-menu">
                            <li><a href="">My Profile</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="">Messages</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="">Settings</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="{{ url('admin/over') }}">Sign Out</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>

                        </ul>
                        <h4 class="m-0">Malinda Hollaway</h4>
                        @malinda-h
                    </div>
                    
                    <!-- Calendar -->
                    <div class="s-widget m-b-25">
                        <div id="sidebar-calendar"></div>
                    </div>
                    
                    <!-- Feeds -->
                    <!-- Projects -->

                </div>
                
                <!-- Side Menu -->
                <ul class="list-unstyled side-menu">
                    <li class="active">

                        <a class="sa-side-home" href="/admin/demo">
                            <span class="menu-item">首页</span>
                        </a>
                    </li>
            
                <li class="dropdown">
                        <a class="sa-side-form" href="">
                            <span class="menu-item">超级用户管理</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/demo2">显示管理员列表</a></li>
                            <li><a href="/admin/demo2/create">添加管理员</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-form" href="">
                            <span class="menu-item">普通会员管理</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/puser">显示会员列表</a></li>
                            <li><a href="/admin/puser/create">添加会员</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-form" href="">
                            <span class="menu-item">友情链接管理</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/links">显示友情链接列表</a></li>
                            <li><a href="/admin/links/create">添加友情链接</a></li>
                        </ul>
                    </li>
                     <li class="dropdown">
                        <a class="sa-side-form" href="">
                            <span class="menu-item">评论管理</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/discuss">显示评论列表</a></li>
                            <li><a href="/admin/discuss/create">添加评论</a></li>
                        </ul>
                    </li>
                     <li class="dropdown">
                        <a class="sa-side-form" href="">
                            <span class="menu-item">收货地址管理</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/address">显示收货地址列表</a></li>
                            <li><a href="/admin/address/create">添加收货地址</a></li>
                        </ul>
                    </li>
                     <li class="dropdown">
                        <a class="sa-side-form" href="">
                            <span class="menu-item">网站配置管理</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/config">显示网站配置列表</a></li>
                        </ul>
                    </li>

                <!-- 商品分类管理 -->
                <li class="dropdown">
                    <a class="sa-side-form" href="">
                        <span class="menu-item">类别管理</span>
                    </a>
                    <ul class="list-unstyled menu-item">
                        <li><a href="/admin/type">显示类别</a></li>
                        <li><a href="/admin/type/create">添加类别</a></li>
                    </ul>
                </li>

                <!-- 商品管理 -->
                <li class="dropdown">
                    <a class="sa-side-form" href="">
                        <span class="menu-item">商品管理</span>
                    </a>
                    <ul class="list-unstyled menu-item">
                        <li><a href="/admin/goods">显示商品</a></li>
                        <li><a href="{{url('/admin/goods/create')}}">添加商品</a></li>
                    </ul>
                </li>

                <!-- 订单管理 -->
                <li class="dropdown">
                    <a class="sa-side-form" href="">
                        <span class="menu-item">订单管理</span>
                    </a>
                    <ul class="list-unstyled menu-item">
                        <li><a href="{{url('/admin/order')}}">显示订单</a></li>
                    </ul>
                </li>
            </ul>

            </aside>
        
            <!-- Content -->
            <section id="content" class="container">

            <!--父模板的占位-->
            @yield('content')
            </section>

            <!-- Older IE Message -->
            <!--[if lt IE 9]>
                <div class="ie-block">
                    <h1 class="Ops">Ooops!</h1>
                    <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser in order to access the maximum functionality of this website. </p>
                    <ul class="browsers">
                        <li>
                            <a href="https://www.google.com/intl/en/chrome/browser/">

                                <img src="{{ asset('Admin/img/browsers/chrome.png') }}" alt="">

                                <div>Google Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.mozilla.org/en-US/firefox/new/">

                                <img src="{{ asset('Admin/img/browsers/firefox.png') }}" alt="">

                                <div>Mozilla Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com/computer/windows">

                                <img src="{{ asset('Admin/img/browsers/opera.png') }}" alt="">

                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://safari.en.softonic.com/">

                                <img src="{{ asset('Admin/img/browsers/safari.png') }}" alt="">

                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/downloads/ie-10/worldwide-languages">

                                <img src="{{ asset('Admin/img/browsers/ie.png') }}" alt="">

                                <div>Internet Explorer(New)</div>
                            </a>
                        </li>
                    </ul>
                    <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
                </div>   
            <![endif]-->
        </section>

        <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="{{ asset('Admin/js/jquery.min.js') }}"></script> <!-- jQuery Library -->
        <script src="{{ asset('Admin/js/jquery-ui.min.js') }}"></script> <!-- jQuery UI -->
        <script src="{{ asset('Admin/js/jquery.easing.1.3.js') }}"></script> <!-- jQuery Easing - Requirred for Lightbox + Pie Charts-->

        <!-- Bootstrap -->
        <script src="{{ asset('Admin/js/bootstrap.min.js') }}"></script>

        <!-- Charts -->
        <script src="{{ asset('Admin/js/charts/jquery.flot.js') }}"></script> <!-- Flot Main -->
        <script src="{{ asset('Admin/js/charts/jquery.flot.time.js') }}"></script> <!-- Flot sub -->
        <script src="{{ asset('Admin/js/charts/jquery.flot.animator.min.js') }}"></script> <!-- Flot sub -->
        <script src="{{ asset('Admin/js/charts/jquery.flot.resize.min.js') }}"></script> <!-- Flot sub - for repaint when resizing the screen -->

        <script src="{{ asset('Admin/js/sparkline.min.js') }}"></script> <!-- Sparkline - Tiny charts -->
        <script src="{{ asset('Admin/js/easypiechart.js') }}"></script> <!-- EasyPieChart - Animated Pie Charts -->
        <script src="{{ asset('Admin/js/charts.js') }}"></script> <!-- All the above chart related functions -->

        <!-- Map -->
        <script src="{{ asset('Admin/js/maps/jvectormap.min.js') }}"></script> <!-- jVectorMap main library -->
        <script src="{{ asset('Admin/js/maps/usa.js') }}"></script> <!-- USA Map for jVectorMap -->

        <!--  Form Related -->
        <script src="{{ asset('Admin/js/icheck.js') }}"></script> <!-- Custom Checkbox + Radio -->

        <!-- UX -->
        <script src="{{ asset('Admin/js/scroll.min.js') }}"></script> <!-- Custom Scrollbar -->

        <!-- Other -->
        <script src="{{ asset('Admin/js/calendar.min.js') }}"></script> <!-- Calendar -->
        <script src="{{ asset('Admin/js/feeds.min.js') }}"></script> <!-- News Feeds -->
        

        <!-- All JS functions -->
        <script src="{{ asset('Admin/js/functions.js') }}"></script>
    </body>
</html>
