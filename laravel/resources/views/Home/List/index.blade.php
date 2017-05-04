@extends('Home.base.parent')
@section('content')
<div id="filters" style="margin:7px 105px 0;">
	<p><span class="fr clear f12"></span>筛选商品</p>
	<div class="filter clearfix">
		<span class="filter_name">品牌</span>
		<ul>
			<li><a @if($brand==1) style="background:greenyellow" @endif href="/home/list/{{ $id }}" >不限</a></li>
			<li><a @if($brand=='徽六牌') style="background:greenyellow" @endif href="/home/list/{{ $id }}/徽六牌/{{ $grade }}" >徽六牌</a></li>
			<li><a @if($brand=='谢裕大') style="background:greenyellow" @endif href="/home/list/{{ $id }}/谢裕大/{{ $grade }}" >谢裕大</a></li>
			<li><a @if($brand=='碧螺春') style="background:greenyellow" @endif href="/home/list/{{ $id }}/碧螺春/{{ $grade }}" >碧螺春</a></li>
			<li><a @if($brand=='张家山') style="background:greenyellow" @endif href="/home/list/{{ $id }}/张家山/{{ $grade }}" >张家山</a></li>
			<li><a @if($brand=='宋品') style="background:greenyellow" @endif href="/home/list/{{ $id }}/宋品/{{ $grade }}"  >宋品</a></li>
			<li><a @if($brand=='其他') style="background:greenyellow" @endif href="/home/list/{{ $id }}/其他/{{ $grade }}"  >其他</a></li>
		</ul>
	</div>
	<div class="filter clearfix">
	<span class="filter_name">等级</span>
	<ul>
		<li><a @if($grade==1) style="background:greenyellow" @endif href="/home/list/{{ $id }}">不限</a></li>
		<li><a @if($grade=='精品级') style="background:greenyellow" @endif href="/home/list/{{ $id }}/{{ $brand }}/精品级" >精品级</a></li>
		<li><a @if($grade=='AAA级') style="background:greenyellow" @endif href="/home/list/{{ $id }}/{{ $brand }}/AAA级" >AAA级</a></li>
		<li><a @if($grade=='特级') style="background:greenyellow" @endif href="/home/list/{{ $id }}/{{ $brand }}/特级" >特级</a></li>
		<li><a @if($grade=='其他') style="background:greenyellow" @endif href="/home/list/{{ $id }}/{{ $brand }}/其他" >其他</a></li>
	</ul>
	</div>
</div>	<!--/#filters-->
	<!-- 排序方式--------------------------------------------------------------------------------- -->
				<!-- <p id="sort" class="mt10" style="margin:0 105px 0;">
					<span class="fr"></span>
					<span class="sortbtn">排序方式：</span>
					<a href="/wulongcha/tieguanyin.html" title="销量从高到低" class="sortbtn sort_arrow_down_light">销量</a>
					<a href="/products/53-0-0-0-1-0-x-week_view_num-desc.html" title="浏览量从高到低" class="sortbtn sort_arrow_down_dark">浏览量</a>
					<a href="/products/53-0-0-0-1-0-x-shop_price-desc.html" title="点击按价格从低到高排序" class="sortbtn sort_arrow_double_dark">价格</a>
				</p> -->

	<!-- 列表-------------------------------------------- -->
				
				<div id="goods_list" class="clearfix" style="border-top:none; width:1034px; overflow:hidden; margin:0 105px 0;">
					@if(count($ob)==0) 
						<p>对不起,没有搜索到该商品</p> 
					@endif	
					@foreach($ob as $v)
						<div class="good_single oh277" style="margin:0 0 0 24px; padding:1px;">
							<!--
							<img class="tag" src="/themes/v3/tag/yq.png">
							-->
							<a code="new" target="_blank" title="{{ $v->name }}" href="/home/goods/{{ $v->id }}" >
								<img src='/Admin/good/img/{{ $v->picname }}' width="175" height="175" alt="{{ $v->name }}">
								<div>{{ $v->name }}&nbsp净重{{ $v->weight }}</div>
								<p class="buy">购买</p>
							</a>
							<p>
								<span class="good_price">
									{{ $v->price }}元
								</span>
							</p>
						</div>
					@endforeach
					
					<!-- 商品列表样式 -->
					<!-- <div class="good_single oh277">
						
						<a code="new" target="_blank" title="宋品 特级黑乌龙 黑乌龙茶 240g 买二送一 买四送二" href="/goods-101778.html">
							<img src='/Home/Type/images/gg_42700.jpg!175' width="175" height="175" alt="宋品 特级黑乌龙 黑乌龙茶 240g 买二送一 买四送二">
						</a>
						<a target="_blank" title="宋品 特级黑乌龙 黑乌龙茶 240g 买二送一 买四送二" href="/goods-101778.html" class="good_name">宋品 特级黑乌龙 黑乌龙茶 240g 买二送一 买四送二</a>
						<p>
							<del class="fr">￥88.00元</del>
							<span class="good_price">￥49元
							</span>
						</p>

						<p class="tc">
							<span class="good_off">5.6折</span>　
							<a href="/comment_list-101778.html" target="_blank" class="good_comment">已有20人评论</a>
						</p>

						<p class="buy_panel">
							<a rel="nofollow" href="/goods-101778.html" class="buy">购买</a>
							<a rel="nofollow" href="javascript:collect(101778);" class="fav">收藏</a>
						</p>
					</div>

					<div class="good_single oh277">
						<img class="tag" src="/Home/Type/images/tag_hot.png" alt="热卖" /> 
						
						<a code="hot" target="_blank" title="八马 乌龙茶 特级安溪铁观音 抢新天涵（半斤）" href="/goods-100421.html">
							<img src='/Home/Type/images/gg_30647.jpg!175' width="175" height="175" alt="八马 乌龙茶 特级安溪铁观音 抢新天涵（半斤）"></a>
						<a target="_blank" title="八马 乌龙茶 特级安溪铁观音 抢新天涵（半斤）" href="/goods-100421.html" class="good_name">八马 乌龙茶 特级安溪铁观音 抢新天涵（半斤）</a>
						<p>
							<del class="fr">￥388.00元</del>
							<span class="good_price">￥220元</span>
						</p>

						<p class="tc">
							<span class="good_off">5.7折</span>
							<a href="/comment_list-100421.html" target="_blank" class="good_comment">已有540人评论</a>
						</p>

						<p class="buy_panel">
							<a rel="nofollow" href="/goods-100421.html" class="buy">购买</a>
							<a rel="nofollow" href="javascript:collect(100421);" class="fav">收藏</a>
						</p>
					</div>

					<div class="good_single oh277">
						<img class="tag" src="/Home/Type/images/tag_cuxiao.png" alt="促销" /> 
						
						<a code="cuxiao" target="_blank" title="【茶农散茶】 乌龙茶 特级安溪铁观音 铁罐装2015新茶（3两）" href="/goods-100259.html">
							<img src='/Home/Type/images/gg_28027.jpg!175' width="175" height="175" alt="【茶农散茶】 乌龙茶 特级安溪铁观音 铁罐装2015新茶（3两）">
						</a>
						<a target="_blank" title="【茶农散茶】 乌龙茶 特级安溪铁观音 铁罐装2015新茶（3两）" href="/goods-100259.html" class="good_name">【茶农散茶】 乌龙茶 特级安溪铁观音 铁罐装2015新茶（3两）</a>
						<p>
							<del class="fr">￥288.00元</del>
							<span class="good_price">￥238元</span>
						</p>
						<p class="tc">
							<span class="good_off">8.3折</span>　
							<a href="/comment_list-100259.html" target="_blank" class="good_comment">已有189人评论</a>
						</p>
						<p class="buy_panel">
							<a rel="nofollow" href="/goods-100259.html" class="buy">购买</a>
							<a rel="nofollow" href="javascript:collect(100259);" class="fav">收藏</a>
						</p>
					</div>  -->
				</div>	


<!-- js--------------------------------------------------------------------- -->
<link href="/Home/Type/css/base.css?1445259609" rel="stylesheet" type="text/css" />

<link href="/Home/Type/css/style.css?1450340548" rel="stylesheet" type="text/css" />

<script src="/Home/Type/js/jquery.js?1328604144"></script>

<script src="/Home/Type/js/jquery.cookie.js?1336726124"></script>



<script src="/Home/Type/js/jquery.fancybox-1.3.4.pack.js?1289490058"></script>

<script src="/Home/Type/js/common.js?1330590817"></script>





<!--[if lte IE 6]>

<script src="/js/ddpng.js"></script>

<script>

DD_belatedPNG.fix('img.tag,#header .logo img,#content .pri_icon,#content .pri_info');

</script> 

<![endif]-->

<script src="/Home/Type/js/tag.js" type="text/javascript" async></script>

<!--[if lte IE 6]>

<script src="/js/ddpng.js"></script>

<script>

DD_belatedPNG.fix('img.tag');

</script>

<![endif]-->
@endsection

