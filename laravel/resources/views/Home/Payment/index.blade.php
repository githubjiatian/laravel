@extends('Home.base.parent')
@section('content')
<center>
<div style="margin:18px 0 18px 0;">
	<img src="/img/ddtjcg.png" alt="">
</div>
<div style="margin:50px 50px 100px 50px;width:450px;height:220px; border: 3px solid #FFD89E;background:#FFF7EB">
	<div style="margin:40px 0 20px 0;">
		<div >
			<ul>
				<h4>您的订单已经成功提交</h4>
				<p></p>
				<li>订单号:{{ $ob['ordernum'] }}</li>
				<p></p>
				<li>应付款金额：<span style="color:#c00; font-weight:bold;">{{ $ob['damoney'] }}</span> 元</li>
				<p></p>
			</ul>
		</div>
		<img src="/img/payment.png" onclick=pay()>
		<!-- <input class="qufukuan_btn" value="去付款" onclick="window.open('https://www.alipay.com/cooperate/gateway.do?_input_charset=utf-8&amp;agent=C4335319945672464113&amp;logistics_fee=0&amp;logistics_payment=BUYER_PAY_AFTER_RECEIVE&amp;logistics_type=EXPRESS&amp;notify_url=http%3A%2F%2Fwww.maichawang.com%2Frespond.php%3Fcode%3Dalipay&amp;out_trade_no=201704284704329245&amp;partner=2088801819186756&amp;payment_type=1&amp;price=159&amp;quantity=1&amp;receive_address=%E4%B8%AD%E5%9B%BD%E5%AE%89%E5%BE%BD%E5%AE%89%E5%BA%86%E8%BF%8E%E6%B1%9F%E5%8C%BA%E5%B0%8F%E6%B2%99%E6%B2%B3&amp;receive_name=%E5%B0%8F%E7%8E%8B&amp;return_url=http%3A%2F%2Fwww.maichawang.com%2Frespond.php%3Fcode%3Dalipay&amp;seller_email=shdaoxuan%40126.com&amp;service=create_direct_pay_by_user&amp;subject=2017042847043&amp;sign=5121a78d308dcb7785ece52021f94c55&amp;sign_type=MD5')" type="button"> -->
	</div>
</div>
</center>
<script type="text/javascript">
	function pay()
	{
		if(confirm('确定付款么吗？')){
			alert('付款成功!');
		window.location.href="/home/fukuan/{{ $ob['gid'] }}";		
		}
	}
</script>
@endsection