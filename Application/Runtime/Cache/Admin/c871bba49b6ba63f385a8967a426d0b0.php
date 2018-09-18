<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
 <!-- Bootstrap Core CSS -->
<link href="/Public/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/Public/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="/Public/css/lines.css" rel='stylesheet' type='text/css' />
<link href="/Public/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="/Public/js/jquery.min.js"></script>
<!----webfonts--->
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="/Public/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/Public/js/metisMenu.min.js"></script>
<script src="/Public/js/custom.js"></script>
<!-- Graph JavaScript -->
<script type="text/javascript">
	var i=2;
	function time(){
		document.getElementById("spantime").innerHTML=i;
		i--;
		if(i>0){
			//调用此函数
			window.setTimeout("time()",1000);
		}else{
			window.location="<?php echo ($jumpUrl); ?>";
		}
	}
</script>
</head>
<body onload="time()">
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <!-- /.navbar-static-side -->
        </nav>
	    <div id="page-wrapper">
		        <div class="graphs">
		        	<div>
						<div class="clearfix">
							<h3 class="content-title">系统提示信息：</h3>
						</div>
						<div class="description" ><?php echo ($msg["role"]); ?></div>
						<div class="col-sm-12">
                                <a href="/index.php/Admin/Modcont/index.html"  class="btn btn-secondary btn-lo pull-right">查看所有新闻</a>
                            </div>
						<div class="clearfix" style="margin-bottom:8px;"></div> 
					</div>
					<div class="copy">
						<!-- 网站内容 -->
						<table width='100%'>
                        	<tr>
                        		<td height="50">&nbsp;</td>
                        	</tr>
                        	<tr>
                        		<td style="text-align:center;font-size:17px;">
                        			<?php echo ($message); ?>,时间过<span id="spantime">2</span>秒 自动跳转。<br/><br/>
                        			如果没有跳转，<a href="<?php echo ($jumpUrl); ?>">请点击这里</a>！<br/><br/>
                        		</td>
                        	</tr>
                        </table>
				    </div>
				</div>
	      </div> 
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
</body>
</html>