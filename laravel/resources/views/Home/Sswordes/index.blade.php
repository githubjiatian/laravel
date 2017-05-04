@extends('Home.base.parent')
@section('content')	
		
<div id="filters" style="margin:7px 105px 0;border:0px;">
<div id="goods_list" class="clearfix" style="border-top:none; width:1034px; overflow:hidden; margin:0 105px 0;">
	<p>商品搜索_{{ $ss }}</p>
	
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
</div>
</div>
<link href="/Home/Type/css/base.css?1445259609" rel="stylesheet" type="text/css" />

<link href="/Home/Type/css/style.css?1450340548" rel="stylesheet" type="text/css" />

<script src="/Home/Type/js/jquery.js?1328604144"></script>

<script src="/Home/Type/js/jquery.cookie.js?1336726124"></script>



<script src="/Home/Type/js/jquery.fancybox-1.3.4.pack.js?1289490058"></script>

<script src="/Home/Type/js/common.js?1330590817"></script>

<script src="/Home/Type/js/tag.js" type="text/javascript" async></script>
@endsection