<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>{{ session('config.name') }}</title>

    <meta name="Description" content="【网上买茶老字号】-买茶网品牌茶叶商城,西湖龙井春茶、碧螺春、黄山毛峰新茶上市,买茶就上买茶网,主要经营绿茶、乌龙茶、红茶、花茶、茶具和茶书等,是您购买茶叶的首选。" />

    <meta name="Keywords" content="买茶叶,西湖龙井,2017新茶,绿茶,黄山毛峰,碧螺春,乌龙茶,茶叶商城,maichawang.com,买茶网" />

    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" href="/Home/css/index.css" />



    <script src="/Home/js/jquery.js?1328604144"></script>

    <script src="/Home/js/jquery.cookie.js?1336726124"></script>



    <script src="/Home/js/mcw_common.js?1465206299"></script>

    <script src="/Home/js/jquery.fancybox-1.3.4.pack.js?1289490058"></script>

    <script src="/Home/js/common.js?1330590817"></script>

    <link href="/Home/css/jquery.fancybox-1.3.4.css?1289489920" rel="stylesheet" type="text/css" />

    <link href="/Home/css/rateit.css?1359608938" rel="stylesheet" type="text/css" />

    <script src="/Home/js/jquery.rateit.min.js?1353579268"></script>

    <script src="/Home/js/ad.js?1453369047"></script>

    <style type="text/css">

        .bannerbg { overflow: hidden; width: 100%; }

            .bannerbg .bannerbig { width: 100%; margin: 0px auto; overflow: hidden; }

        #play_list { width: 100%; list-style: none; position: relative; height: 350px; }

            #play_list li { width: 100%; height: 350px; position: absolute; left: 0px; top: 0px; z-index: 0; filter: alpha(opacity=0); -moz-opacity: 0; opacity: 0; }

                #play_list li.ac { z-index: 1; filter: alpha(opacity=100); -moz-opacity: 1; opacity: 1; }



        #play_list_text { position: relative; width: 1200px; margin: 0px auto; }

            #play_list_text ul { position: absolute; left: 550px; z-index: 5; margin: 0px auto; height: 24px; top: -34px; width: 150px; overflow: hidden; list-style: none; }

                #play_list_text ul li { float: left; cursor: pointer; width: 24px; height: 14px; }





        #top { height: 30px; background: url(/Home/images/main.gif) repeat-x; font-size: 12px; font-family: arial,"宋体"; _font-family: '宋体'; color: #333; line-height: 18px; }

            #top .main, #header, #nav .main, #tup .Picture, #content, #footer .main { width: 1190px; margin: auto; }

            #top .main { height: 30px; overflow: hidden; }

                #top .main li { height: 29px; line-height: 29px; color: #d8d8d8; float: left; display: inline; display: table; }

                    #top .main li a { color: #666; padding: 0 10px; }

                        #top .main li a:hover { color: #4d9409; }

                #top .main .wel { color: #666; }

                #top .main .fl li { padding-right: 12px; }

                #top .main .top_login { color: #4d9409; }

                    #top .main .top_login a { color: #4d9409; padding: 0; }

                        #top .main .top_login a:hover { color: #f60; }

                    #top .main .top_login span { color: #d8d8d8; padding: 0 6px; }

                #top .main .alipay_login, #top .main .qq_login, #top .main .sina_login, #top .main .taobao_login, #top .main .douban_login, #top .main .renren_login, #top .main .more_login p { background: url(images/main.gif) no-repeat; }

                #top .main .alipay_login { padding-left: 18px; background-position: -8px -325px; }

                    #top .main .alipay_login a, #top .main .qq_login a { color: #666; padding: 0; }

                #top .main .qq_login { padding-left: 18px; background-position: -8px -356px; }

                #top .main .more_login { color: #666; }

                    #top .main .more_login p { background-position: 0 -208px; width: 76px; height: 20px; display: block; margin-top: 5px; line-height: 19px; padding-left: 9px; cursor: pointer; }

                    #top .main .more_login .down { width: 83px; position: absolute; top: 24px; border: 1px solid #d4d4d4; background: #fff; display: none; z-index: 99; }

                        #top .main .more_login .down a { padding: 0; margin: 0; height: 24px; width: 83px; display: block; line-height: 24px; background: #fff; cursor: pointer; }

                            #top .main .more_login .down a:hover { background: #f6f6f6; text-decoration: none; color: #f60; }

                        #top .main .more_login .down span { display: block; height: 24px; width: 53px; padding-left: 25px; }

                #top .main .taobao_login { background-position: -3px -388px; }

                #top .main .sina_login { background-position: -3px -420px; }

                #top .main .douban_login { background-position: -3px -451px; }

                #top .main .renren_login { background-position: -3px -482px; }

                #top .main .fr .rel { padding: 0px 10px; color: #666; }

        .fl { float: left; display: inline; }

        .fr { float: right; display: inline; }

        .orange { color: #fd9000; }

        /*底部*/

        .clear { clear: both; }

        #footer { background: #F9F9F9 0 -287px url(/Home/images/help.jpg) repeat-x; padding: 30px 0; clear: both; zoom: 1; }

            #footer .main { width: 995px; margin: auto; }

                #footer .main .contact { width: 995px; margin: auto; width: 160px; height: 162px; background: url(/Home/images/help.jpg) no-repeat; padding-left: 30px; position: relative; }

                    #footer .main .contact a { width: 97px; height: 37px; display: block; bottom: 0; left: 0; position: absolute; }

                #footer .main .help { width: 775px; padding-right: 10px; }

                    #footer .main .help dl { width: 135px; float: left; display: inline; padding: 10px; }

                    #footer .main .help dt { background: url(/Home/images/help.jpg) no-repeat; }

                    #footer .main .help dt { height: 25px; margin-bottom: 7px; }

                    #footer .main .help dl .dt1 { background-position: 0 -162px; }

                    #footer .main .help dl .dt2 { background-position: 0 -187px; }

                    #footer .main .help dl .dt3 { background-position: 0 -212px; }

                    #footer .main .help dl .dt4 { background-position: 0 -237px; }

                    #footer .main .help dl .dt5 { background-position: 0 -262px; }

                    #footer .main .help dd { padding-left: 20px; margin-left: 10px; background: -143px -182px url(/Home/images/help.jpg) no-repeat; line-height: 20px; }

                        #footer .main .help dd a { color: #666; }

                #footer .main .baozhang { background: 0 20px url(/Home/images/baozhang.jpg) no-repeat; height: 51px; padding: 20px 0; }

                #footer .main .bot_nav { color: #999; line-height: 26px; text-align: center; }

                    #footer .main .bot_nav a { color: #999; padding: 0 9px; }

                #footer .main .safe { background: url(/Home/images/safe.jpg) no-repeat; width: 970px; height: 59px; margin: auto; position: relative; margin-top: 15px; }

                    #footer .main .safe .xinyong_star { width: 102px; height: 35px; display: block; position: absolute; right: 0; top: 22px; }

                    #footer .main .safe .zhengxin { width: 84px; height: 37px; display: block; position: absolute; right: 114px; bottom: 0; }

                #footer .main .fri_link { width: 970px; margin: auto; color: #cbcbcb; line-height: 20px; margin-top: 20px; }

                    #footer .main .fri_link a { color: #cbcbcb; }



        /*评论、论坛、问题*/

        #con { width: 1195px; margin: auto; margin-bottom: 15px; }

        #comments, #bbs, #ques { border: 1px solid #E5E5E5; border-top: none; height: 358px; overflow: hidden; }

        #comments { width: 901px; float: left; display: inline; }



            #comments .top, #bbs .top, #ques .top { height: 34px; background: 0 -103px url(/Home/images/main.gif) repeat-x; color: #666; line-height: 34px; font-size: 14px; padding-left: 10px; font-weight: bold; padding-top: 3px; }

                #comments .top .more, #bbs .top .more, #ques .top .more { font-size: 12px; font-weight: normal; color: #666; float: right; display: inline; margin-right: 7px; }

            #comments .con .left { width: 66px; margin-top: 1px; }

                #comments .con .left img { width: 60px; height: 60px; border: 3px solid #EBEBEB; }

            #comments .con .rgiht { width: 340px; padding-left: 15px; *width: 330px; }

                #comments .con .rgiht .title { color: #0068B7; line-height: 22px; height: 22px; overflow: hidden; display: block; }

                #comments .con .rgiht .comment_content { color: #666666; line-height: 20px; height: 40px; overflow: hidden; display: block; }

                #comments .con .rgiht .user_name { color: #f60; }

                #comments .con .rgiht .time { color: #999; margin-left: 8px; }

            #comments .con li { margin: 0 7px; padding: 14px 0 10px 5px; border-bottom: 1px dotted #D5D5D5; width: 427px; float: left; height: 78px; *width: 427px; }

            #comments .con .left .star_none { background: -140px -498px url(/Home/images/main.gif) no-repeat; display: block; height: 12px; width: 60px; }

            #comments .con .left .srar_full { background: -140px -486px url(/Home/images/main.gif) no-repeat; display: block; height: 12px; width: 60px; }

        #bbs { float: left; display: inline; width: 488px; margin-left: 10px; }

            #bbs .con { padding: 15px 14px 0 14px; }

                #bbs .con .first { padding-bottom: 6px; }

                    #bbs .con .first .right { width: 271px; float: right; display: inline; }

                        #bbs .con .first .right h4 { padding-bottom: 10px; }

                            #bbs .con .first .right h4 a { color: #6F8D03; font-size: 14px; font-weight: bold; }

                        #bbs .con .first .right span { color: #555; line-height: 22px; }

                #bbs .con li { width: 215px; float: left; display: inline; padding-left: 14px; background: -180px -318px url(/Home/images/main.gif) no-repeat; line-height: 26px; overflow: hidden; height: 26px; }

                    #bbs .con li a { color: #555; }

        #ques { width: 273px; float: right; display: inline; }

            #ques .con { padding: 12px; }

                #ques .con li { line-height: 25px; background: -180px -317px url(/Home/images/main.gif) no-repeat; padding-left: 12px; height: 25px; overflow: hidden; }

                    #ques .con li a { color: #555; }







        .all { FONT-SIZE: 13px; HEIGHT: 318px; WIDTH: 220px; BACKGROUND: #fff; POSITION: absolute; Z-INDEX: 8; LINE-HEIGHT: 41px; TOP: 41px; margin-left: -970px; }

            .all LI A { COLOR: #666; MARGIN: 0px 8px 0px 0px; }

            .all LI { PADDING-BOTTOM: 0px; PADDING-TOP: 0px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; }

            .all STRONG { FONT-WEIGHT: bold; }

            .all SPAN { BACKGROUND: #287b1b; PADDING-BOTTOM: 3px; TEXT-ALIGN: center; PADDING-TOP: 3px; PADDING-LEFT: 9px; PADDING-RIGHT: 0px; MARGIN-RIGHT: 5px; border-radius: 25px; }

                .all SPAN A { COLOR: #fff; }

    </style>



</head>

<body>

       <div id="top">

        <div class="main">

            <ul class="fl">

                <li class="wel">您好，欢迎光临买茶网</li>

                @if(session()->has('users'))
                    
                <li class="wel">{{ session('users.name') }}</li>

                <li class="wel"><a href="/home/over">[退出登录]</a></li>

                @else<li class="wel">游客</li>

                <li class="wel"><a href="/home/logins">[登录]</a></li>

                <li class="wel"><a href="/home/registers/create">[注册]</a></li>

                @endif


            </ul>

            <ul class="fr">

                <li><a rel="nofollow" href="/home/demo" target="_blank">买茶网</a>|</li>

                <li><a rel="nofollow" href="/home/liuchengs" target="_blank">购买流程</a>|</li>

                <li><a rel="nofollow" href="/home/myorder" target="_blank">我的订单</a>|</li>

                <li><a rel="nofollow" href="/home/addresss/create" target="_blank">收货地址</a>|</li>

                <li><a rel="nofollow" href="/home/reset/edit" target="_blank">修改密码 </a>|</li>

                <li class="rel">咨询热线：<b class="orange">400-880-4560</b></li>

            </ul>

        </div>

    </div>


    <div style="margin:0 auto; position:relative; left:50%; margin-left:-960px;display:none;">

       <img src="/Home/images/ban1.jpg" alt=""> 

    </div>



    <div class="doc">

        <!--头部开始------------>

        <div class="u-top">

            <div class="header">


                <div class="header-content">


                    <div class="logo"><img src="/Home/images/logo.png"></div>

                    <div class="header-left">

                        <div class="search">

                            <div class="search-box">

                                <form action="/home/sswords" name="demoform">
                                    <input name="keywords" value="请输入搜索关键词" onclick="this.value=''" onblur="if(this.value=='')this.value='请输入搜索关键词'" style="height:14px;">
                                    
                            </div>
                                    <input type="submit" class="search-button" value='搜索'>
                            <!-- <div class="search-button"><a href="javascript:void(0)" name="submit" onclick="document.getElementById('demoform').submit();">搜 索</a></div> -->
                                
                                    
                                
                                </form>

                        </div>





                    </div>

                    <div class="header-right">


                 
                            <div class="shopp-car"></div>
                            <div class="shopp-text"><span><a style="text-decoration:underline;color:#e20000;" href="{{ url('/Home/shopcars') }}">我的购物车</a></span> </div>
          




                    </div>

                </div>

            </div>
            <div class="u-top-nav">

                <div class="menu">
                    <section id="content" class="container">
                    <!-- 全部商品下拉框-------------------------------------------------- -->
                        <div class="menu-left"><i></i><a>全部商品分类</a></div>


<div id="allcontent" class="all" style='margin-left:0;display:none;' >


    <ul>

        <div class=" btnone item" style="height:55px;">

            <div class="product" style="background-color:#fff ">

                <li style="padding-top:7px; line-height:24px; height:46px; line-height:46px">
                    <span><a>绿茶</a></span>
                    <strong><a href="/home/list/8" title="">西湖龙井</a></strong>
                    <strong><a href="/home/list/9" title="">黄山毛峰</a></strong>
                    
                </li>
                <s style="display:block;"></s>
            </div>
            <div class="product-wrap posone">
                <div class="cf">
                    <div class="fl wd252 pr20">
                        <h2>绿茶</h2>
                        <ul class="cf">
                            <!-- 遍历 -->
                            <li><a href="/home/list/8" >西湖龙井</a></li>
                            <li><a href="/home/list/9" >黄山毛峰</a></li>
                            <li><a href="/home/list/10" >碧螺春</a></li>
                            <li><a href="/home/list/11" >安吉白茶</a></li>
                        </ul>

                    </div>



                </div>

            </div>

        </div>
        <div class="item">

            <div class="product" style="background-color:#F3F3F3">

                <li style="background:#f3f3f3;">

                    <strong><span><a>乌龙茶</a></span></strong>

                    <strong><a href="/home/list/13">铁观音</a></strong>

                    <strong><a href="/home/list/14">大红袍</a></strong>
                </li>
                <s></s>
            </div>
            <div class="product-wrap postwo">
                <div class="cf">

                    <div class="fl wd252 pr20">
                        <h2><a>乌龙茶</a></h2>
                        <ul class="cf">
                            <!-- 遍历  -->
                            <li><a href="/wulongcha/tieguanyin.html" title="铁观音,铁观音茶,铁观音价格,铁观音礼盒">铁观音</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="item">

            <div class="product" style="background-color:#fff">
                <li>
                    <span><a href="/" title="">黑茶</a> </span>
                    <strong><a href="/heicha.html" title="黑茶,黑茶茶,黑茶价格,黑茶礼盒">普洱茶</a></strong>
                    <strong><a href="/heicha.html" title="黑茶,黑茶茶,黑茶价格,黑茶礼盒">安化黑茶</a></strong>
                </li>
                <s></s>
            </div>
            <div class="product-wrap posthree">
                <div class="cf">
                    <div class="fl wd252 pr20">
                        <h2>
                            <a href="/heicha.html">
                                黑茶
                            </a>
                        </h2>
                        <ul class="cf">
                            <!-- 遍历 -->
                            <li><a href="/heicha/puercha.html" title="普洱茶,普洱茶茶,普洱茶价格,普洱茶礼盒">普洱茶</a></li>
                            <li><a href="/heicha/anhuaheicha.html" title="安化黑茶,安化黑茶茶,安化黑茶价格,安化黑茶礼盒">安化黑茶</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <div class="item">

            <div class="product" style="background-color:#F3F3F3">
                <li style="background:#f3f3f3;">
                    <span><a href="/hongcha/qimenhongcha.html" title="">红茶</a></span>
                    <strong><a href="/hongcha.html" title="红茶,红茶茶,红茶价格,红茶礼盒">祁门红茶</a></strong>
                    <strong><a href="/hongcha/jinjunmei.html" title="金骏眉,金骏眉茶,金骏眉价格,金骏眉礼盒">金骏眉</a></strong>
                </li>
                <s></s>
            </div>

            <div class="product-wrap posfour">
                <div class="cf">
                    <div class="fl wd252 pr20">
                        <h2><a href="/hongcha.html">红茶</a></h2>
                        <ul class="cf">
                            <!-- 遍历 -->
                            <li><a href="/hongcha/qimenhongcha.html" title="祁门红茶,祁门红茶茶,祁门红茶价格,祁门红茶礼盒">祁门红茶</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="product">
                <li>
                    <strong><span><a href="/baicha.html" title="白茶,白茶茶,白茶价格,白茶礼盒">白茶</a></span></strong>
                    <strong><a href="/baicha/baihaoyinzhen.html" title="白毫银针,白毫银针茶,白毫银针价格,白毫银针礼盒">白毫银针</a></strong>
                    <strong><a href="/baicha/baimudan.html" title="白牡丹,白牡丹茶,白牡丹价格,白牡丹礼盒">白牡丹</a></strong>
                </li>
                <s></s>
            </div>



            <div class="product-wrap posfive">
                <div class="cf">
                    <div class="fl wd252 pr20">
                        <h2>
                            <a href="/baicha.html">白茶</a>
                        </h2>
                        <ul class="cf">
                            <!-- 遍历  -->
                            <li><a href="/baicha/baihaoyinzhen.html" title="白毫银针,白毫银针茶,白毫银针价格,白毫银针礼盒">白毫银针</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">

            <div class="product" style="background-color:#F3F3F3">

                <li style="background:#f3f3f3;">
                    <strong><span><a href="/huacha.html" title="花茶,花茶茶,花茶价格,花茶礼盒">花茶</a></span></strong>
                    <strong><a href="/huacha/kunlunxueju.html" title="昆仑雪菊,昆仑雪菊茶,昆仑雪菊价格,昆仑雪菊礼盒">昆仑雪菊</a></strong>
                </li>
                <s></s>
            </div>
            <div class="product-wrap possix">
                <div class="cf">
                    <div class="fl wd252 pr20">
                        <h2><a href="/huacha.html">花茶</a></h2>
                        <ul class="cf">

                            <li><a href="/huacha/huacaocha.html" title="花草茶,花草茶茶,花草茶价格,花草茶礼盒">花草茶</a></li>

                        </ul>

                    </div>



                </div>

            </div>

        </div>

        <div class="item">

            <div class="product">

                <li >

                    <strong><span><a href="#">其 他</a></span></strong>

                    <strong><a href="/huangcha/huoshanhuangya.html" title="霍山黄芽,霍山黄芽茶,霍山黄芽价格,霍山黄芽礼盒">霍山黄芽</a></strong>

                    <strong><a href="/baojiancha/kuqiaocha.html" title="苦荞茶,苦荞茶茶,苦荞茶价格,苦荞茶礼盒">苦荞茶</a></strong>

                </li>

                <s></s>

            </div>

            <div class="product-wrap poseight">
                <div class="cf">
                    <div class="fl wd252 pr20">
                        <h2><a href="#">其他</a></h2>
                        <ul class="cf">
                            <li><a href="/huangcha/huoshanhuangya.html" title="霍山黄芽,霍山黄芽茶,霍山黄芽价格,霍山黄芽礼盒">霍山黄芽</a></li>
                            <li><a href="/baojiancha/kuqiaocha.html" title="苦荞茶,苦荞茶茶,苦荞茶价格,苦荞茶礼盒">苦荞茶</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </ul>

</div>


<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
$('.menu-left').mouseover(function(){
    $('.all').slideDown(1000);
}).mouseout(function(){
    setTimeout(function(){$('.all').slideUp(1000);},5000);
});
</script>

                    </section>




                    <div class="menu-center">

                        <ul>

                            <li><a href="/home/demo" class="active">首 页</a></li>

                            <li><a href="/home/list/1">绿茶</a></li>

                            <li><a href="/home/list/4">红茶</a></li>

                            <li><a href="/home/list/3">黑茶</a></li>

                            <li><a href="/home/list/7">白茶</a></li>

                            <li><a href="/home/list/2">乌龙茶</a></li>

                            <li><a href="/home/list/6">花茶</a></li>

                        </ul>

                    </div>

                    <div class="menu-right">

                        <ul>

                            <!--

                            <li><a href="/marketing/he.huodong/qycg/index.html">企业采购</a></li>

                            <li><a href="/help/">茶百科</a>/</li>

                            <li style="padding:0px;"><a href="/exchange.php">茶币商城</a></li>

                            -->

                        </ul>

                    </div>

                </div>

            </div>


        </div>

        <!--头部结束------------>

        <!--banner开始------------>

        @yield('content')
        



        <div class="banner" style="display:none;">

            <a href="http://www.maichawang.com/marketing/ganenjie.php" target="_blank"><img src="/Home/images/ganenjie1.jpg" width="1920px" height="450px"></a>

        </div>

        <!--banner结束------------>

        <!--内容区开始------------>



        <!--内容区1结束------------>

        <!--ad区开始------------>



        <!--ad区结束------------>

        <!--焦点1产品区开始------------>



        <!--焦点1产品区结束------------>

        <!--焦点2产品区开始------------>



    </div>

    <!--焦点2产品区结束------------>

    <!--焦点3产品区开始------------>



    </div>

    <!--焦点3产品区结束------------>

    <!--焦点4产品区开始------------>



    </div>

    <!--焦点4产品区结束------------>

    <!--焦点5产品区开始------------>



    </div>

    <!--焦点5产品区结束------------>

    <!--焦点6产品区开始------------>



    </div>

    <!--焦点6产品区结束------------>

    <!--焦点7产品区开始------------>



    </div>

    <!--焦点7产品区结束------------>

    </div>



    <div id="con">

        <!--comments-->







        <div class="clear"></div>

    </div>



    <div id="footer">

        <div class="main">

            <div class="contact fl"><a href="http://weibo.com/teashopping" rel="nofollow" target="_blank"></a></div>

            <a href="http://218.242.124.22:8081/businessCheck/verifKey.do?showType=extShow&serial=9031000020160530100413000000864047-SAIC_SHOW_310000-20150814104605817556&signData=MEUCIF7wN0Mzx+FsxAiD1OO5NPdOsOCXwEyroKk4sdYn4clrAiEAqsTGv9eAQGJmlsQM3siMcgrKBUmwPnG2G+mmM+xFCwU=" rel="nofollow" target="_blank">

                <img src='/Home/images/icon.gif' border=0>

            </a>


            <b>&nbsp;&nbsp;&nbsp;友情链接</b>
            
                 <a title="{{ session('youlian.url') }}" href="{{ session('youlian.url') }}" target="_blank">{{ session('youlian.name') }}</a>
         
                友链申请QQ1984982938



            <div class="help fr">

                <dl>

                    <dt class="dt1"></dt>

                    <dd><a rel="nofollow" href="/help-55.html" target="_blank">普通快递</a></dd>

                    <dd><a rel="nofollow" href="/help-56.html" target="_blank">顺丰快递</a></dd>

                    <dd><a rel="nofollow" href="/help-57.html" target="_blank">EMS特快专递</a></dd>

                    <dd><a rel="nofollow" href="/help-58.html" target="_blank">宅急送</a></dd>

                    <dd><a rel="nofollow" href="/help-59.html" target="_blank">快递查询</a></dd>

                </dl>

                <dl>

                    <dt class="dt2"></dt>

                    <dd><a rel="nofollow" href="/help-52.html" target="_blank">网上支付</a></dd>

                    <dd><a rel="nofollow" href="/help-53.html" target="_blank">银行转帐</a></dd>

                    <dd><a rel="nofollow" href="/help-54.html" target="_blank">货到付款</a></dd>

                </dl>

                <dl>

                    <dt class="dt3"></dt>

                    <dd><a rel="nofollow" href="/help-6.html" target="_blank">用户协议</a></dd>

                    <dd><a rel="nofollow" href="/help-47.html" target="_blank">交易条款</a></dd>

                    <dd><a rel="nofollow" href="/help-48.html" target="_blank">购物流程</a></dd>

                    <dd><a rel="nofollow" href="/help-49.html" target="_blank">订单查询</a></dd>

                    <dd><a rel="nofollow" href="/help-50.html" target="_blank">会员积分</a></dd>

                    <dd><a rel="nofollow" href="/help-51.html" target="_blank">优惠券</a></dd>

                </dl>

                <dl>

                    <dt class="dt4"></dt>

                    <dd><a rel="nofollow" href="/help-60.html" target="_blank">服务承诺</a></dd>

                    <dd><a rel="nofollow" href="/help-61.html" target="_blank">退换货原则</a></dd>

                    <dd><a rel="nofollow" href="/help-62.html" target="_blank">退换货流程</a></dd>

                </dl>

                <dl>

                    <dt class="dt5"></dt>

                    <dd><a rel="nofollow" href="/help-63.html" target="_blank">我的帐户</a></dd>

                    <dd><a rel="nofollow" href="/help-64.html" target="_blank">找回密码</a></dd>

                    <dd><a rel="nofollow" href="/help-65.html" target="_blank">常见问题</a></dd>

                </dl>

            </div>

            <div class="baozhang clear"></div>

            <p class="bot_nav">

                <a href="/article-107.html" rel="nofollow">关于我们</a> | <a rel="nofollow" href="/article-6.html">服务条款</a> | <a rel="nofollow" href="/article-108.html">招商加盟</a> | <a rel="nofollow" href="/article-109.html">诚聘英才</a> | <a rel="nofollow" href="/article-110.html">友情链接</a> | <a rel="nofollow" href="/article-111.html">联系我们</a> | <a rel="nofollow" href="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=4008804560&eid=218808P8z8p8y808x8q8x&o=&q=7')">企业QQ</a><br>

                订购及客服电话：400 880 4560 （固话，手机 小灵通，免长途）<br>

                版权所有 © 2007-2012 买茶网　沪ICP备12028247号-2

            </p>

            <div class="safe"><a href="http://www.zx110.org/" rel="nofollow" target="_blank" class="zhengxin"></a><a href="http://www.51honest.org/wscredit/detail.credit?action=preLevel&amp;credcode=NO.20000040081" rel="nofollow" target="_blank" class="xinyong_star"></a></div>

            <p class="fri_link">

                <b>友情链接</b>

                                <a title="绞股蓝" href="http://www.gr51.com/" target="_blank">绞股蓝</a>

                                <a title="海南茶叶" href="http://www.daisha.com.cn/" target="_blank">海南茶叶</a>

                                <a title="茶业通" href="http://www.tea846.com/" target="_blank">茶业通</a>

                                <a title="茶叶加盟" href="http://chaye.liansuo.com/" target="_blank">茶叶加盟</a>

                                <a title="扣扣头像" href="http://www.qqcanting.cn" target="_blank">扣扣头像</a>

                                <a title="上海灯箱厂" href="http://www.lldx88.com" target="_blank">上海灯箱厂</a>

                                <a title="天猫代运营" href="http://www.shzhongming.com/" target="_blank">天猫代运营</a>

                                <a title="没得比导购网" href="http://www.meidebi.com/" target="_blank">没得比导购网</a>

                                <a title="食品饮料招商" href="http://www.5888.tv/" target="_blank">食品饮料招商</a>

                                <a title="奶茶店加盟" href="http://www.chazhilan.com" target="_blank">奶茶店加盟</a>

                                <a title="普洱茶" href="http://www.meijitea.com/" target="_blank">普洱茶</a>

                                <a title="中国酒水招商网" href="http://www.js178.com/" target="_blank">中国酒水招商网</a>

                                <a title="茶叶网" href="http://www.chamei.com" target="_blank">茶叶网</a>

                                <a title="隐形眼镜" href="http://www.easeeyes.com" target="_blank">隐形眼镜</a>

                                <a title="临安家具" href="http://www.meilele.com/linan/" target="_blank">临安家具</a>

                                <a title="植物图片大全" href="http://www.wdptj.com/" target="_blank">植物图片大全</a>

                                <a title="购物网站大全" href="http://www.178good.com" target="_blank">购物网站大全</a>

                                <a title="美食网" href="http://www.54hcz.com/" target="_blank">美食网</a>

                                <a title="中国惠农网" href="http://www.cnhnb.com/" target="_blank">中国惠农网</a>

                                <a title="食品饮料招商网" href="http://www.3490.cn/" target="_blank">食品饮料招商网</a>

                                <a title="白酒代理" href="http://www.jmbao.com" target="_blank">白酒代理</a>

                                <a title="祁门红茶" href="http://www.maichawang.com/hongcha/qimenhongcha.html" target="_blank">祁门红茶</a>

                                <a title="找好茶" href="http://zhaohaocha.maichawang.com" target="_blank">找好茶</a>

                                <a title="淘宝代运营" href="http://www.shzhongming.com/" target="_blank">淘宝代运营</a>

                                <a title="安溪茶叶批发" href="http://www.anxicha.cc" target="_blank">安溪茶叶批发</a>

                                <a title="京东代运营" href="http://www.shzhongming.com/" target="_blank">京东代运营</a>

                                <a title="易展安防网" href="http://www.anf-z.com" target="_blank">易展安防网</a>

                                <a title="云南普洱茶" href="http://www.puertea8.com/" target="_blank">云南普洱茶</a>

                                <a title="宜兴紫砂壶" href="http://www.zisha.com/" target="_blank">宜兴紫砂壶</a>

                                <a title="雅茗居茶文化网" href="http://www.368tea.com" target="_blank">雅茗居茶文化网</a>

                                <a title="白茶" href="http://www.thcha.com/" target="_blank">白茶</a>

                                <a title="欧宝丽" href="http://www.obolee.com/" target="_blank">欧宝丽</a>

                                友链申请QQ1984982938

            </p>

        </div>

    </div>



    <div class="kefu" id="piaofuqq" style="top:0; position:absolute; right:0px; z-index:99; display:none;">
    <div style="display:none">
        <img src="/Home/images/kefu.jpg" border="0" usemap="#piaofuqq" id="piaofuqq1" style="display:none;" alt="客服" />

        <img src="/Home/images/kefu2.png" id="piaofuqq2" style=" cursor:pointer;" onClick="piaofuqq_show();" alt="客服" />

        <map name="piaofuqq">

            <area shape="rect" coords="9,48,118,82" href="#" onClick="piaofuqq_open('在线咨询'); return false;">

            <area shape="rect" coords="9,89,119,122" href="#" onClick="piaofuqq_open('订单查询'); return false;">

            <area shape="rect" coords="9,129,119,161" href="#" onClick="piaofuqq_open('售后服务'); return false;">

            <area shape="rect" coords="3,299,129,328" href="javascript:window.external.AddFavorite('http://www.maichawang.com/','买茶网');">

            <area shape="rect" coords="113,5,129,20" href="javascript:piaofuqq_hide();">

        </map>

        <img src="/Home/images/erweima.jpg" id="erweima" width="132px" style="display:block;" alt="二维码" />
    </div>
    </div>









    









    <script src="/Home/js/jquery.min.js?1443926417"></script>

    <script src="/Home/js/jquery.easing.1.3.js?1443926417"></script>


    <!-- // <script src="/Home/js/jquery-1.3.1.min.js?1443926417"></script> -->
    <script src="/js/jquery-1.8.3.min.js"></script>


    <script src="/Home/js/zzsc.js?1443926417"></script>







    <div class="marketad" id="marketadbak" style="display:none" >

        <a target="_blank" href="http://www.maichawang.com/marketing/youhui.php?yhid=0764">

            <img src="/Home/images/ads.gif"  />

        </a>

        <div class="close">

            <a href="javascript:;">

                <img src="/Home/images/close.png">

            </a>

        </div>

    </div>

    <div class="marketadbg" id="marketadbg">

    </div>

</body>

</html>