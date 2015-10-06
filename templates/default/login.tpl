<{include file="header.tpl"}>
	<div class="login">
		<form action="" method="post">
			<h2>登录</h2>
			<label>用户名：</label><br/>
			<label><input type="text" name="username" style="height:25px; width:100%;" /></label><br/>
			<label>密码：</label><br/>
			<label><input type="password" name="password" style="height:25px; width:100%;" /></label><br/>
			<label style="display:block; margin-top:15px;">验证码：<input type="text" name="verify_code" style="height:25px; width:30%;" /> <img src="/Index/verify_code" onclick="this.src=this.src+'?'+Math.random"  /> </label><br/>
			<span style="display:block; color:red; text-aligin:center;"><{$err}></span>
			<label><input type="submit" value="登录" style="height:35px; width:103%;" /></label>
		</form>
	</div>
<div class="clean"></div>
<{include file="footer.tpl"}>