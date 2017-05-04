@extends('Home.base.parent')
@section('content')
<link href="css/base.css?1445259609" rel="stylesheet" type="text/css" />
<link href="css/style.css?1450340548" rel="stylesheet" type="text/css" />
<!-- <link href="css/public.css?1456751210" rel="stylesheet" type="text/css" /> -->

<script src="js/jquery.js?1328604144"></script>
<script src="js/jquery.cookie.js?1336726124"></script>
<script src="js/mcw_common.js?1465206299"></script>
<script src="js/jquery.fancybox-1.3.4.pack.js?1289490058"></script>

<link href="css/jquery.fancybox-1.3.4.css?1289489920" rel="stylesheet" type="text/css" />

<script src="js/mcw_checkout_cart.js?1430921515"></script>
<script src="js/jquery.js?1328604144"></script>
<p></p>
<div id="body">
	<div class="w1000 bc pr inner">
		<div id="good">
			<p id="crumb"></p>
			<div class="images fl">
				<div class="image_big" id="spec-n1">
					<img src="/Admin/good/img/{{ $random1->picname }}" alt="正在加载中" width="398" height="398" />
				</div>
<!-- 				<div class="images_small">
					<div class="image_small"><img src="images/gg_30646.jpg!398" width="74" height="74" size398="images/gg_30646.jpg!398"></div>
					<div class="image_small"><img src="images/gg_30647.jpg!398" width="74" height="74" size398="images/gg_30647.jpg!398"></div>
					<div class="image_small"><img src="images/gg_30648.jpg!398" width="74" height="74" size398="images/gg_30648.jpg!398"></div>
					<div class="image_small"><img src="images/gg_30649.jpg!398" width="74" height="74" size398="images/gg_30649.jpg!398"></div>
					
					<div class="image_small"><img src="images/gg_30652.jpg!398" width="74" height="74" size398="images/gg_30652.jpg!398"></div>
				</div> -->
				<div class="images_small">
					<div class="image_small"><img src="/Admin/good/img/{{ $random1->picname }}" width="74" height="74" size398="images/gg_30646.jpg!398"></div>
					<div class="image_small"><img src="/Admin/good/img/{{ $random2->picname }}" width="74" height="74" size398="images/gg_30647.jpg!398"></div>
					<div class="image_small"><img src="/Admin/good/img/{{ $random3->picname }}" width="74" height="74" size398="images/gg_30648.jpg!398"></div>
					<div class="image_small"><img src="/Admin/good/img/{{ $random4->picname }}" width="74" height="74" size398="images/gg_30649.jpg!398"></div>
				</div>
				<script type="text/javascript">
				$(function(){			

				   $(".jqzoom").jqueryzoom({

						xzoom:400,

						yzoom:400,

						offset:10,

						position:"right",

						preload:1,

						lens:1

					});

					$("#spec-list").jdMarquee({

						deriction:"left",

						width:400,

						height:56,

						step:2,

						speed:4,

						delay:10,

						control:true,

						_front:"#spec-right",

						_back:"#spec-left"

					});

					$("#spec-list img").bind("mouseover",function(){

						var src=$(this).attr("src");

						$("#spec-n1 img").eq(0).attr({

							src:src.replace("\/n5\/","\/n1\/"),

							jqimg:src.replace("\/n5\/","\/n0\/")

						});

						$(this).css({

							"border":"2px solid #ff6600",

							"padding":"1px"

						});

					$("#spec-list img").bind("mouseout",function(){

						$(this).css({

							"border":"1px solid #d3d3d3",

							"padding":"2px"

						});

					});				

				})

				</script>

				<script src="js/zoom_base.js?1390381482"></script>

				<script src="js/zoom_lib.js?1390381482"></script>

				<script src="js/zoom_163css.js?1390381482"></script>
				</div>
				@foreach($ob as $list)
				<div class="good_info" style="margin:100px 0 0 0;">
                    <h1>{{ $list->name }}</h1>
                	<dl>
                        <dd id="ECS_G_PRICE">

                        	<span class="fl">单 价：</span>

							<span class="yahei">￥<strong class="good_pri">{{ $list->price }}</strong></span>
						</dd>

						<div class=' hlf-entry ' style=''></div>

													
					</dl>

<!--                      惠立方入口          -->

                    <div class="ui-entrance2" style=""></div>

                    <div class="good_pinpai">

                    	<ul>

	            			<li>品牌：{{ $list->brand }}</li>

	            			<li>等级：{{ $list->grade }}</li>

	            			<li>产地：{{ $list->place }}</li>

	            			<li>净重：{{ $list->weight }}</li>

                    	</ul>		

                        <div class="cb"></div>

					</div>

					<div class="good_tobuy">
						
						<form id="buybox" action="/home/order" method='get'>
							<input type="hidden" name='id' value="{{ $list->id }}">
							<input type="hidden" name='name' value="{{ $list->name }}">
							<input type="hidden" name='price' value="{{ $list->price }}">

							<div class="buy_bum">

								<span class="fl">我要买：</span>

								<div class="good_numall">

									<a class="min"></a>
									<input type="text" value="1" class="good_num" id='price' name="item_number"/>
									<a class="add"></a>
									<span class="chabi"></span>

								</div>

								<div class="cb"></div>
									<input style="float:left;" type="submit" class="tobuy_btn" value=' '>
									<!--按钮：加入购物车-->
									<a href="{{ url('/Home/cars') }}/{{ $list->id }}">
										<div class="addtocart_btn" style="float:left;width:127px;height:36px;"></div>
									</a>
									<!-- <a href="{{ url('/Home/shopcars') }}/{{ $list->id }}/{{ session('users.id') }}">连接到购物车</a> -->
								<!-- <p class="p_buybtn" height='10px'>
									<input type="button" class="tobuy_btn" onclick="Cart.add(100421,jQuery('#buybox input[name=item_number]').val()); return false;"/>
									<input type="button" class="addtocart_btn" onclick="Cart.add(100421,jQuery('#buybox input[name=item_number]').val()); return false;"/>
								</p> -->
									<!--xxl 20150323 start -->
									<!--xxl 20150323 end -->								
								<div class="cb"></div>

							</div>

							

						</form>
					</div>

					<!-- Baidu Button BEGIN -->

					

					<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=0" ></script>

					<script type="text/javascript" id="bdshell_js"></script>

					<script type="text/javascript">

					

					</script>

					<!-- Baidu Button END -->

					

                    <!-- JiaThis Button BEGIN -->

						<!-- <div id="ckepop" class="good_jiathis">

							<span class="jiathis_txt">分享到：</span>

							<a class="jiathis_button_tsina">新浪微博</a>

							<a class="jiathis_button_tqq">腾讯微博</a>

							<a class="jiathis_button_douban">豆瓣</a>

							<a class="jiathis_button_qzone">QQ空间</a>

							<a class="jiathis_button_copy">复制网址</a>

							<a class="jiathis_button_fav">收藏夹</a>

							<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>

						</div> -->

					<!-- JiaThis Button END -->

              </div>
			</div><!--/#good-->

			<div class="cb"></div>

			<div class="fl w200 mt10" id="good_sidebar">

				<div id="seealsobab" class=" mb10">

					<div class="title">买过该商品的茶友还买过</div>

					<div class="inner clearfix" id="bfd_bab"></div>

				</div><!--/#seealsobab-->

<!--/#history-->

				<div id="seealsovav" class="mt10">

					<div class="title">看过该商品的茶友还看过</div>

					<div class="inner clearfix" id="bfd_vav"></div>

				</div><!--/#seealsovav-->

			</div><!--/#good_sidebar-->

						<div id="bundle" class="fr pt10 w790">

<!--/#bundle-->

						<div id="good_detail" class="fr w790 mt10">

				<div class="arrow_tabs">

				<a href="#" class="active">商品详情</a>

<!--								

								



								<a href="#">冲泡方法</a>

				-->				

				<!-- <a href="/comment_list-100421.html" target="_blank">商品评论</a> -->

					

<!--				

				<a href="#">购物保障</a>

-->								

				</div>

				<div class="inner">
					<div class="attrs clearfix mt10">	
						
						<span style=" width:185px"><b>品牌：</b>{{ $list->brand }}</span>
						<span style=" width:185px"><b>等级：</b>{{ $list->grade }}</span>
						<span style=" width:185px"><b>净重：</b>{{ $list->weight }}</span>
						<span style=" width:185px"><b>用途：</b>{{ $list->purpose }}</span>
						<span style=" width:185px"><b>产地：</b>{{ $list->place }}</span>
						<span style=" width:185px"><b>采摘时间：</b>{{ $list->picktime }}</span>
						<span style=" width:185px"><b>保质期：</b>2年</span>
						<span style=" width:370px"><b>储藏方法：</b>密封、低温、避光、干燥、无异味</span>
					</div>

					<div class="mt10 good_intro">

						<div class="title"></div>

						<div class="content">

							<p style="text-align: center;"><span style="font-size:24px;">天然悠长的兰花香</span></p><p style="text-align: center;">来自八马生态茶园， 依山傍水，酸性黄壤、雨量充沛、气候温和。 茶树天生天养，品质上乘。</p><p style="text-align: center;">采用驻芽二三叶的茶青采摘标准，内含物丰富，品质犹优。味似天然悠长的兰花香，独特“观音韵”，七泡有余香，实乃乌龙茶中的珍品。价格实惠适合自饮。<br /></p><p style="text-align: center;"><img alt="八马 乌龙茶 特级安溪铁观音 抢新天涵（半斤）" src="images/gd_30949.jpg" /><img alt="八马 乌龙茶 特级安溪铁观音 抢新天涵（半斤）" src="images/gd_30679.jpg" /><img alt="八马 乌龙茶 特级安溪铁观音 抢新天涵（半斤）" src="images/gd_30680.jpg" /><img alt="八马 乌龙茶 特级安溪铁观音 抢新天涵系列（半斤）" src="images/gd_28843.jpg" /><img alt="八马 乌龙茶 特级安溪铁观音 抢新天涵系列（半斤）" src="images/gd_28848.jpg" /><img alt="八马 乌龙茶 特级安溪铁观音 抢新天涵系列（半斤）" src="images/gd_28842.jpg" /><img alt="八马 乌龙茶 特级安溪铁观音 抢新天涵（半斤）" src="images/gd_30681.jpg" /><img alt="八马 乌龙茶 特级安溪铁观音 抢新天涵系列（半斤）" src="images/gd_28845.jpg" /><img alt="八马 乌龙茶 特级安溪铁观音 抢新天涵系列（半斤）" src="images/gd_28846.jpg" /><br /></p>

						</div>

					</div>

					<div class="mt10 brand_intro">

						<div class="title"></div>

						<div class="inner clearfix">

							<div class="fl">

								<img src="images/1329937098525657126.jpg" width="120" height="120">

								<p>品牌：八马牌</p>

							</div>

							<div class="text">    八马茶业是一家集茶园基地、生产加工、内销外销为一体的大型茶叶企业。源于百年前的“信记”茶行，掌门人王文礼先生是非物质文化遗产铁观音代表性传承人，是铁观音发现者王士让的十三代传人。公司旗下有安溪八马茶业有限公司、深圳市八马茶业连锁有限公司、安溪八马新农业综合开发有限公司。 ...</div>

						</div>

					</div>

				</div>
@endforeach
				<!--

								-->

<div class="inner" style="display:block;">
<p>&nbsp; <span style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; ">明代的许次疏在《茶疏》中说：&ldquo;茶滋于水蕴于器，汤成于火，四者相连，缺一不可&rdquo;。茶、水、器、火四者，环环相扣，这和我们谈的如何泡好茶正好相呼应。 泡茶看似容易，将茶置于壶内，注热水，待片刻，再倒出来，就完成了&ldquo;泡茶&rdquo;！表面看来，铁观音茶就如上述的分解动作，就可得好茶汤！然而，静心观茶、识茶，钻研茶的特质，才是泡好茶的第一步！在上述文字记载之外，实际泡茶过程中，以及面对不同茶叶和茶器时更仔细分辨，才得好茶汤滋味。</span><br style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; " />

<span style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; ">　　安溪铁观音茶的泡饮方法别具一格，自成一家。首先，必须严把用水，茶具，冲泡三道关。&ldquo;水以石泉为佳，炉以炭火为妙，茶具以小为上&rdquo;，意思就是水以山泉水最好，茶具以小巧方便为佳，如果用炭火来烧水那是最好不过。</span><br style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; " />

<span style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; ">　　冲泡按其程序可分为八道：</span><br style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; " />

<span style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; ">　　1 白鹤沐浴 （洗 杯）：用开水洗净茶具</span><br style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; " />

<span style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; ">　　2 乌龙入宫 （落 茶）：把铁观音茶放入茶具，放茶量约占茶具容量的五分；</span><br style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; " />

<span style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; ">　　3 悬壶高冲 （冲 茶）：把滚开的水提高冲入茶壶或盖瓯，使茶叶转动；</span><br style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; " />

<span style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; ">　　4 春风拂面 （刮泡沫）：用壶盖或瓯盖轻轻刮去漂浮的白泡沫，使其清新洁净；</span><br style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; " />

<span style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; ">　　5 关公巡城 （倒 茶）：把泡一，二分钟后的茶水依次巡回注入并列的茶杯里；</span><br style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; " />

<span style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; ">　　6 韩信点兵 （点 茶）：茶水倒到少许时要一点一点均匀地滴到各茶杯里；</span><br style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; " />

<span style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; ">　　7 鉴尝汤色 （看 茶）：观尝杯中茶水的颜色</span><br style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; " />

<span style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; ">　　8 品啜甘霖 （喝 茶）：乘热细缀，先闻其香，后尝其味，边啜边闻，浅斟细饮。饮量虽不多，但能齿颊留香，喉底回甘，心旷神怡，别有情趣。</span><br style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; " />

<span style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; ">　　习茶技艺 五、习茶:</span><br style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; " />

<span style="font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 14px; line-height: 28px; text-align: left; text-indent: 28px; ">　　对于冲泡艺术而言，非常重要的一点是讲究理趣并存的程序，讲究形神兼备。茶的冲泡程序可分为：备茶、赏茶、置茶、冲泡、奉茶、品茶、续水、收具。</span>
</p>
</div>

								<div class="inner" style="display:none;"></div><!--这段为空就自动跳转到评论了-->

				<div class="inner" style="display:none;"></div><!--这一段只为占位，不会真正切换到-->

				<div class="inner" style="display:none;">

					买茶网所售出的产品全部为通过正规进货渠道购买的正牌商品，与亲临商场和专卖店选购的商品享受同样的质量保证。含有质量保证书的商品按照保证书的承诺执行，买茶网对销售产品的质量承担所有相应法律责任并为改变想法或不完全满意的顾客提供无条件退换货政策。<br>

					1）所有商品绝对正宗，100%原厂正品。<br>

					2）所有商品可以享受退换货服务。<br>

					3）全国快递/EMS送货上门。<br>

					4）大中城市72小时内到货。

				</div>

		</div>

			<div class="mt10 fr w790" id="ECS_COMMENT">

				<a name="comment"></a>
			</div>
		</div><!--/#body .inner-->

	</div><!--/#body-->

	<div class="blank10"></div>
	<!-- 数据JS -->

	<script type="text/javascript">

	var final_price = 220;

	var goods_addon = '';

	var goods_freeship = 0;

	</script>

	<script src="other/iplookup.php?format=js"></script>

	<script src="js/mcw_city_ship.js?1362559296"></script>

	<script src="js/mcw_goods.js?1411031439"></script>

	<!-- <script type="text/javascript" src="http://v2.jiathis.com/code/jia.js" charset="utf-8"></script> -->

	<script type="text/javascript">

	// 百分点

	var bfd_script = document.createElement('script');

	bfd_script.setAttribute('type',"text/javascript");

	bfd_script.setAttribute('charset',"utf-8");

	bfd_script.setAttribute('src',"http://static.baifendian.com/service/Trial_Cmaicha/bfd-service-min.js");

	document.getElementsByTagName('head')[0].appendChild(bfd_script);



	// MediaV

	var _mvq = _mvq || [];

	jQuery.getJSON('/block/user_info.php', function(data){

		_mvq.push(['$setAccount', 'm-24354-0']);

		if(data){

			_mvq.push(['$setGeneral', 'goodsdetail', '', /*用户名*/ data.user_name, /*用户id*/ data.user_id]);

		}else{

			_mvq.push(['$setGeneral', 'goodsdetail', '', /*用户名*/ '', /*用户id*/ '']);

		}

		_mvq.push(['$logConversion']);

		_mvq.push(['$addGoods',  /*分类id*/ '53', /*品牌id*/ '18', /*商品名称*/ '八马 乌龙茶 特级安溪铁观音 抢新天涵（半斤）',/*商品ID*/ '100421',/*商品售价*/ '220', /*商品图片url*/ 'http://img03.maichawang.com/upload/goods/100421/gg_30647.jpg!300', /*分类名*/ '铁观音', /*品牌名*/ '八马牌', /*商品库存状态1或是0*/ '1', /*网络价*/ '388',/*收藏人数*/ '', /*商品下架时间*/ '']);

		_mvq.push(['$logData']);

		_mvq.push(['$setAccount', 'm-24354-0']);

		_mvq.push(['$logConversion']);



		(function() {

			var mvl = document.createElement('script');

			mvl.type = 'text/javascript'; mvl.async = true;

			mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js');

			var s = document.getElementsByTagName('script')[0];

			s.parentNode.insertBefore(mvl, s); 

		})();

	});

	var noMediaV = true;
	</script>
	﻿<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!--统计-->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-9888227-2']);

_gaq.push(['_trackPageview']);
_gaq.push(['_addOrganic', 'baidu', 'wd']);

_gaq.push(['_addOrganic', 'soso', 'w']);

_gaq.push(['_addOrganic', 'yodao', 'q']);

_gaq.push(['_addOrganic', 'sogou', 'query']);

_gaq.push(['_addOrganic', '360', 'q']);
<!---->
(function() {

var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

})();

</script>

<script src="js/mcw_common_footer.js?1432306277"></script>

<!--[if lte IE 6]>

<script src="/js/ddpng.js"></script>

<script>

DD_belatedPNG.fix('img.tag,#header .logo img,#content .pri_icon,#content .pri_info');

</script> 

<![endif]-->
<script src="js/tag.js" type="text/javascript" async></script>

</div>

<script src="js/hlf.js" data-baseuri="http://cdn.youhui3.cn/huilifang/"></script>

<script type='text/javascript'>

         HLF.init({

            goodsId:'100421',     //商品ID，string

            merId: '56',    //商家ID

            token: '2e72ec0348e84932c4c304fd384c3e65',       //Token加密字符串，string

            selector: '.ui-entrance2',   //选择器，默认.hlf-entry，可改变 string

            pageType: 3,   //页面类型，Int

            categoryId:'53',    //栏目ID，string

            userId:'0',        //当前登录用户ID，string

            time:   '1491144851'       //生成Token使用的时间戳，string

         });

</script>
@endsection