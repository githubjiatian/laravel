@extends('Home.base.parent')
@section('content')
<link rel="stylesheet" type="text/css" href="/Home/register/css/login.css" />

<div class="login_content">

	<div class="reg_top">

		<div class="login_link">已有买茶网帐号?<a href="/home/logins">直接登录>></a></div>

		用户注册<span class="bitiantishi">--以下内容 * 为必填项</span>

	</div>

	<form action="" method="post" name="myform" id="registerForm">
	{{ csrf_field() }}
		<table  border="0" cellspacing="4" cellpadding="0" class="reg">

			<tr>

				<th colspan="2"></th>

			</tr>
			<tr>
				<td colspan='2' align='center'>
					返回信息
				</td>
			</tr>

			<tr>

				

				<td><input type="text" name="name" class="reg_texbox" maxlength="20" type="text"/>

					<span style="color:#f00;">*</span><span class="reg_tishi" id="username_notice">用户名的长度必须大于0</span></td>

			</tr>

			<tr>

				<td class="reg_left">邮箱：</td>

				<td><input type="text" name="email" id="username2" class="reg_texbox"/>

					<span style="color:#f00;">*</span><span class="reg_tishi" id="email_notice">只有正确的电子邮件，才能找回密码。免费邮箱：搜狐 网易 新浪 （或者使用QQ邮箱）</span></td>

			</tr>

			<tr>

				<td class="reg_left">登录密码：</td>

				<td><input type="password" name="pwd" id="password1" class="reg_texbox"  maxlength="16" autocomplete="off"/>

					<span style="color:#f00;">*</span><span class="reg_tishi" id="password_notice">密码长度6～20位，由英文字母a～z（区分大小写），数字0～9，特殊字符组成。</span></td>

			</tr>

			<tr>

				<td class="reg_left">确认密码：</td>

				<td><input type="password" name="repwd" id="password2" class="reg_texbox"  maxlength="16" autocomplete="off"/>

					<span style="color:#f00;">*</span><span class="reg_tishi" id="conform_password_notice">必须与第一次输入的密码一致</span></td>

			</tr>

						<tr>

				<td>&nbsp;</td>

				<td height="70"><input type="submit" class="reg_btn" value="" name="Submit" /></td>

			</tr>

			<tr>

				<td class="reg_left">会员注册协议：</td>

				<td colspan="2"><textarea cols="" rows="" class="yonghuxieyi">1、买茶网服务条款的接受买茶网为上海中茗电子商务有限公司所独立拥有，买茶网提供的服务完全按照其发布的服务条款和操作规则。为获得网络服务，服务使用人（以下称"用户"）应当同意本协议的全部条款并按照页面上的提示完成全部的注册程序。用户在进行注册程序过程中点击"同意"按钮即表示用户完全接受本协议项下的全部条款。
	}

2、服务使用说明

（1）买茶网运用自己的操作系统通过国际互联网向用户提供丰富的产品服务。除非另有明确规定，增强或强化目前服务的任何新功能，包括新产品，均无条件地适用本服务条款。买茶网保留随时变更、中断或终止部分或全部网络服务的权利。

（2）买茶网对网络服务不承担任何责任，即用户对网络服务的使用承担风险。买茶网不保证服务一定会满足用户的使用要求，也不保证服务不会受中断，对服务的及时性、安全性、准确性也不作担保。

（3）用户在申请使用买茶网服务时，必须向买茶网提供完整、真实、准确、最新的个人资料。如个人资料有任何变动，必须及时更新。若用户提供任何错误、不实、过时或不完整的资料，并为买茶网所确知；或者买茶网有合理理由怀疑前述资料为错误、不实、过时或不完整，买茶网有权暂停或终止用户的帐号，并拒绝现在或将来使用本服务的全部或一部分。

（4）用户注册成功后，买茶网将给予每个用户一个用户帐号及相应的密码，该用户帐号和密码由用户负责保管；用户应当对以其用户帐号进行的所有活动和事件负法律责任，因此所衍生的任何损失或损害，买茶网无法也不负担任何责任。

本服务条款的生效、履行、解释及争议的解决均适用中华人民共和国法律，发生的争议提交上海仲裁委员会，其仲裁裁决是终局的。本服务条款因与中华人民共和国现行法律相抵触而导致部分无效，不影响其他部分的效力。</textarea></td>

			</tr>

			<tr>

				<td>&nbsp;</td>

				<td height="35"><span class="reg_help">有任何疑问请点击<a href="#">帮助中心</a>或<a href="#">联系客服</a></span>

					<input name="agreement" type="checkbox" value="checkbox" checked="checked" />

					我已阅读并完全接受服务协议

					</label></td>

			</tr>

		</table>

	</form>

</div>


@endsection