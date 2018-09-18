<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>[后台系统]北京远达伟业机械设备有限公司</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="/Public/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/Public/css/style.css" rel='stylesheet' type='text/css' />
<link href="/Public/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="/Public/js/jquery.min.js"></script>
<!----webfonts--->
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="/Public/js/bootstrap.min.js"></script>
<script type="text/javascript">
	function tijiao(){
		if(document.frm.username.value==""){
			alert("后台登录用户名不能为空！");
			document.frm.username.focus();
			return false;
		}else if(document.frm.password.value==""){
			alert("后台登录密码不能为空！");
			document.frm.password.focus();
			return false;
		}
	}
</script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><img src="/Public/images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">远达海科技后台登录系统</h2>
  <div class="app-cam">
	  <form name='frm' action="/index.php/Admin/Public/checkLogin.html" method='post' onsubmit="return tijiao()">
		<input type="text" class="text" name='username' placeholder="请输入用户名" />
		<input type="password" name='password' />
        <div class="submit"><input type="submit" value="登录"></div>
			<div class="clearfix"></div>
	</form>
  </div>
   <div class="copy_layout login">
      <p>本网站后台技术支持---<a href="http://www.hongyangkeji.com.cn/" target="_blank" title="鸿扬网络">北京鸿扬网络科技</a> - Collect from <a href="http://www.hongyangkeji.com.cn/" title="鸿扬科技" target="_blank">技术支持</a></p>
   </div>
</body>
</html>