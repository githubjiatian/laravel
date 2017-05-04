//QQ客服
function getClientHeight(){
	var clientHeight=document.body.clientHeight;
	if(navigator.userAgent.indexOf("MSIE 6.0")!=-1){
		clientHeight = document.body.clientHeight;
	}else if(navigator.userAgent.indexOf("MSIE")!=-1){
		clientHeight = document.documentElement.offsetHeight
	}
	if(navigator.userAgent.indexOf("Chrome")!=-1){
		clientHeight = document.body.scrollHeight;
	}
	if(navigator.userAgent.indexOf("Firefox")!=-1){
		clientHeight = document.documentElement.scrollHeight;
	}
	return clientHeight;
}
function getContentHeight(){
	return document.documentElement.clientHeight;
}
function getScrollTop(){
	var scrollTop;
	if (window.pageYOffset){
		scrollTop = window.pageYOffset
	}else if (document.documentElement && document.documentElement.scrollTop){
		scrollTop = document.documentElement.scrollTop;
	}else if (document.body){
		scrollTop = document.body.scrollTop;
	}
	return scrollTop;
}
function float(){
	var dom		= document.getElementById(piaofuqqid);
	dom.style.display="block";
	var dom_height = dom.clientHeight;
	var dom_top = parseInt(dom.style.top);
	
	var start	= Math.ceil(dom_top);
	var end		= getScrollTop() + (getContentHeight()/2) - (dom_height/2);
	
	var distance= end-start;
	var move	= Math.ceil(distance*0.15)+start;
	dom.style.top = move+'px';
}
function piaofuqq_hide(){
	document.getElementById('piaofuqq1').style.display='none';
	document.getElementById('erweima').style.display='none';
	document.getElementById('piaofuqq2').style.display='inline';
}
function piaofuqq_show(){
	document.getElementById('piaofuqq1').style.display='inline';
	document.getElementById('erweima').style.display='block';
	document.getElementById('piaofuqq2').style.display='none';
}
function piaofuqq_open(string){
	window.open('http://b.qq.com/webc.htm?new=0&sid=4008804560&eid=218808P8z8p8y808x8q8x&o=&q=7');
}
var piaofuqqid = 'piaofuqq';
setInterval(float,30);
if(jq(window).width()>1250){
	piaofuqq_show();
}
//BLOCK XIEYUDA
// if(typeof remote_ip_info !=='undefined' && remote_ip_info.province=='安徽'){
// 	//分类
// 	jq('#sidebar a:contains(黄山毛峰)').replaceWith(jq('#sidebar a:contains(柯坦翠芽)'));
// 	//品牌
// 	jq('#brand a[title="漕溪牌"],#brand a[title="谢裕大"]').parent('li').hide();
// 	jq('#brand_listcon img[alt="漕溪牌"],#brand_listcon img[alt="谢裕大"]').parent('li').hide();
// 	//商品跳转
// 	if(jq('#crumb a:contains(黄山毛峰)').length>0){
// 		document.location.href="/";
// 	}
// 	//品牌跳转
// 	if(document.location.href.indexOf('xieyuda.html')>-1){
// 		document.location.href="/";
// 	}
// }
//SCROLLTOP
setInterval(function(){
	if(jq(window).scrollTop()>0){
		jq('#scrolltop').css({
			display		: 'block',
			top			: jq(document).scrollTop()+jq(window).height()-150+'px',
			left		: (jq('#footer').width()-990)/2+990+3+'px'
		});
	}else{
		jq('#scrolltop').hide();
	}
},50);

//DOUBAN
(function(){
	var referer = document.referrer;
	if(referer.match(/douban\.com/i)){
		//remove fanli51
		jq.cookie('fanli51_channel_id',	null,		{expires:0,path:'/',domain:'.maichawang.com'});
		jq.cookie('fanli51_u_id',		null,		{expires:0,path:'/',domain:'.maichawang.com'});
		jq.cookie('fanli51_username',	null,		{expires:0,path:'/',domain:'.maichawang.com'});
		jq.cookie('fanli51_tracking_code',	null,	{expires:0,path:'/',domain:'.maichawang.com'});
		//remove linktech
		jq.cookie('LTINFO',				null,		{expires:0,path:'/',domain:'.maichawang.com'});
		//remove caibei
		jq.cookie('CB_ShowMsg',			null,		{expires:0,path:'/',domain:'.maichawang.com'});
		jq.cookie('CB_HeadShow',		null,		{expires:0,path:'/',domain:'.maichawang.com'});
		jq.cookie('CB_JifenUrl',		null,		{expires:0,path:'/',domain:'.maichawang.com'});
		jq.cookie('CB_OpenId',			null,		{expires:0,path:'/',domain:'.maichawang.com'});
		//add douban
		jq.cookie('login_via',			'douban',	{expires:60,path:'/',domain:'.maichawang.com'});
	}
})();

//送优惠券
(function(){
	if(document.location.href.match('reg_coupon')){
		jq.cookie('reg', 'coupon');
	}
})();

//防止嵌套
if(top.location.href != self.location.href){
	top.location.href = self.location;
}

// 新茶倒计时
function pageBannerCountDown(){
    var timeleft = Math.round(new Date(2013,3-1,18,9,0,0).getTime()/1000) - Math.round(new Date().getTime()/1000);
    // timeleft = 3600*24 - (timeleft + 8*3600);//整天时间-时间戳+8时区
    var dayleft = Math.floor(timeleft/3600/24); timeleft-=3600*24*dayleft;
    var hourleft = Math.floor(timeleft/3600); timeleft-=3600*hourleft;
    var minleft = Math.floor(timeleft/60); timeleft-=60*minleft;
    var secleft = timeleft;
    jq('.page-banner-countdown span.d').html(dayleft);
    jq('.page-banner-countdown span.h').html(hourleft);
    jq('.page-banner-countdown span.m').html(minleft);
    jq('.page-banner-countdown span.s').html(secleft);
}
setInterval(pageBannerCountDown,1000);

// 首页倒计时
function indexMiaoshaCountDown(){
	var today = new Date();
	today.setHours(0);
	today.setMinutes(0);
	today.setSeconds(0);

    var timeleft = Math.round(today.getTime()/1000) + 86400 - Math.round(new Date().getTime()/1000);
    var hourleft = Math.floor(timeleft/3600); timeleft-=3600*hourleft;
    var minleft = Math.floor(timeleft/60); timeleft-=60*minleft;
    var secleft = timeleft;

    jQuery('#ECS_INDEX_MIAOSHA_COUNTDOWN span').html(hourleft+'小时'+minleft+'分'+secleft+'秒');
}
setInterval(indexMiaoshaCountDown,1000);

// 百度统计异步代码
var _hmt = _hmt || [];
(function() {
	var hm = document.createElement("script");
	hm.src = "//hm.baidu.com/hm.js?3f812b675bcb1147b2a0604c64a8515a";
	var s = document.getElementsByTagName("script")[0];
	s.parentNode.insertBefore(hm, s);
})();

// MediaV
if(typeof noMediaV === 'undefined'){
	var _mvq = _mvq || [];
	_mvq.push(['$setAccount', 'm-24354-0']);
	_mvq.push(['$logConversion']);
	(function() {
		var mvl = document.createElement('script');
		mvl.type = 'text/javascript'; mvl.async = true;
		mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js');
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(mvl, s); 
	})();
}