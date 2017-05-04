@extends ('Home.base.parent')
@section('content')
<!--大盒子**背景图片-->
<div style='width:100%;height:550px;background-image:url("{{  asset('/Home/images/bg_cha1.jpg') }}")'>
	<!--引入外部样式-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/Home/Login/css/login.css') }}"/>
		<div class="login_content">
			<div class="login_conleft"  style="float:right;">
				<form action="/home/dologin" method="post" name="myform" id="loginForm">
					{{ csrf_field() }}
					<table width="100%" border="0" cellspacing="4" cellpadding="0">
						<!--返回的处理信息-->
						<tr>
							<td align="center" colspan="2">
								@if(session('msg'))
				                    <b>{{ session('msg') }}</b>
				                @else
				                    <b>登录</b>
				                @endif
			                </td>
		                </tr>
						<tr>
							<td  height="35" align="right">用户名：</td>
							<td width="76%" align="left"><input type="text" name="name" id="textfield" class="input_loin2" placeholder="请输入用户名"></td>
						</tr>
						<tr>
							<td height="35" align="right">密&nbsp;&nbsp;码：</td>
							<td width="76%" align="left"><input type="password" name="pwd" id="textfield" class="input_mima2" placeholder="请输入密码"></td>
						</tr>
						<tr>
							<td height="35" align="right">有效期：</td>
							<td align="left"><a href="/c_user.php?act=find_password" class="for_pwd">忘记密码？</a>
								<input name="remember" type="checkbox" value="" style="vertical-align:middle;" />
								记住密码 </td>
						</tr>
						<tr style="display:none;">
							<td height="40" align="center">&nbsp;</td>
							<td height="40" class="color_red">用户名或密码错误</td>
						</tr>
						<tr>
							<td height="40" align="center">&nbsp;</td>
							<td height="40"><input type="submit" class="login_btn" value="登录" /></td>
						</tr>
					</table>
				</form>
			</div>
		<div class="cb"></div>
	</div>
</div>


@endsection