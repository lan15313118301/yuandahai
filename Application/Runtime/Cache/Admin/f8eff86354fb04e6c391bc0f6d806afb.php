<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>修改公司联系方式</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<script src="/Public/js/d3.v3.js"></script>
<script src="/Public/js/rickshaw.js"></script>
<script type="text/javascript" src="/library/kindeditor/kindeditor.js"></script>
<script type="text/javascript">
	//加载编辑器
	var editor;
	var eneditor;
	KindEditor.ready(function(e){
		editor=e.create('[name=l_content]',{
			'width':"800px",
			'height':'200px'
		});
		eneditor=e.create('[name=enl_content]',{
			'width':"800px",
			'height':'200px'
		});
	})
	function tijiao(){
		if(document.frm.l_name.value==''){
			alert("公司名称不能为空！");
			document.frm.l_name.focus();
			return false;
		}else if(document.frm.l_fax.value==''){
			alert("公司传真不能为空！");
			document.frm.l_fax.focus();
			return false;
		}else if(document.frm.l_tel1.value==''){
			alert("公司电话不能为空！");
			document.frm.l_tel1.focus();
			return false;
		}else if(document.frm.l_tel2.value==''){
			alert("公司电话不能为空！");
			document.frm.l_tel2.focus();
			return false;
		}else if(document.frm.l_qq.value==''){
			alert("公司联系QQ不能为空！");
			document.frm.l_qq.focus();
			return false;
		}else if(document.frm.l_hotline.value==''){
			alert("公司热线电话不能为空！");
			document.frm.l_hotline.focus();
			return false;
		}else if(document.frm.l_web.value==''){
			alert("公司网址不能为空！");
			document.frm.l_web.focus();
			return false;
		}else if(document.frm.l_email.value==''){
			alert("公司邮箱不能为空！");
			document.frm.l_email.focus();
			return false;
		}else if(document.frm.l_addr.value==''){
			alert("公司地址不能为空！");
			document.frm.l_addr.focus();
			return false;
		}else if(editor.html()==''){
			alert("公司简介不能为空！");
			editor.focus();
			return false;
		}else if(document.frm.enl_name.value==''){
			alert("Englshi公司名称不能为空！");
			document.frm.enl_name.focus();
			return false;
		}else if(document.frm.enl_addr.value==''){
			alert("English公司地址不能为空！");
			document.frm.enl_addr.focus();
			return false;
		}else if(document.frm.enl_zhaopin.value==''){
			alert("English招聘方式不能为空！");
			document.frm.enl_zhaopin.focus();
			return false;
		}else if(eneditor.html()==''){
			alert("English公司简介不能为空！");
			eneditor.focus();
			return false;
		}
	}
	/* function shoutiao(id){
		var xuanxiang=id.value;
		if(xuanxiang=='0'){
			//隐藏添加图片栏
			$("#tupian").css("display","none");
		}else if(xuanxiang=='1'){
			//显示添加图片栏
			$("#tupian").css("display","block");
		}
	} */
	function tuichu(){
		window.location="/index.php/Admin";
	}
</script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <!-- 加载头部 -->
        <script type="text/javascript">
	function nologin(){
		if(confirm("您确定要退出后台吗？")){
			window.location="/index.php/Admin/Public/nologin.html";
		}
	}
</script>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.php/Admin/Index/index.html">北京远达伟业机械设备有限公司后台系统</a>
            </div>
            <!-- /.navbar-header -->
            
                       
            <ul class="nav navbar-nav navbar-right">
				
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/Public/images/<?php echo ($msg["picture"]); ?>"></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>修改密码</strong>
						</li>
						<li class="m_2"><a href="/index.php/Admin/Modpsd/index.html"><i class="fa fa-wrench"></i> Settings</a></li>	
						<li class="dropdown-menu-header text-center">
							<strong>退出登录</strong>
						</li>
						<li class="m_2" onclick="nologin()"><a href="javascript:;"><i class="fa fa-lock"></i> Logout </a></li>	
	        		</ul>
	      		</li>
			</ul>
			
        <!-- 加载左边部分 -->
        <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/index.php/Admin/Index/index.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>网站后台</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>导航滚动大图<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/index.php/Admin/Addbanner/index.html">添加导航大图</a></li>
                                <li><a href="/index.php/Admin/Modbanner/index.html">管理导航大图</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>新闻中心<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/index.php/Admin/Addnews/index.html">添加新闻</a></li>
                                <li><a href="/index.php/Admin/Modnews/index.html">新闻管理</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-flask nav_icon"></i>产品管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/index.php/Admin/Modgaishu/index.html">产品概述</a></li>
                                <li>——————————————</li>
                                <li><a href="/index.php/Admin/Addcate/index.html">添加产品种类</a></li>
                                <li><a href="/index.php/Admin/Modcate/index.html">管理产品种类</a></li>
                                <li>——————————————</li>
                                <li><a href="/index.php/Admin/Addpro/index.html">发布产品</a></li>
                                <li><a href="/index.php/Admin/Modpro/index.html">产品管理</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>关于我们<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/index.php/Admin/Addcompany/index.html">添加栏目种类</a></li>
                                <li>——————————————</li>
                                <li><a href="/index.php/Admin/Modcompany/index.html">栏目种类管理</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>合作伙伴<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/index.php/Admin/Addcooperation/index.html">添加合作伙伴</a></li>
                                <li><a href="/index.php/Admin/Modcooperation/index.html">合作伙伴管理</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>销售网络<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/index.php/Admin/Modqita/index.html">销售网络</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>人力资源<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<li><a href="/index.php/Admin/Modqita/index.html">人才理念</a></li>
                                <li>——————————————</li>
                                <li><a href="/index.php/Admin/Addjob/index.html">发布招聘岗位</a></li>
                                <li><a href="/index.php/Admin/Modjob/index.html">管理招聘信息</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>联系我们<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/index.php/Admin/Modlianxi/index.html">联系我们</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-sitemap nav_icon"></i>客户留言<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/index.php/Admin/Showmessage/index.html">查看客户留言</a></li>
                                <li>——————————————</li>
                                <li><a href="/index.php/Admin/Showmessage/huishou.html">回收站</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="/index.php"><i class="fa fa-flask nav_icon"></i>前台预览</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
	    <div id="page-wrapper">
		        <div class="graphs">
		        	<div>
						<div class="clearfix">
							<h3 class="content-title">修改公司联系方式</h3>
						</div>
						<div class="description" ><?php echo ($msg["role"]); ?></div>
						<div class="col-sm-12" style="display:none;">
                                <a href="/index.php/Admin/Addlianxi/index.html"  class="btn btn-secondary btn-lo pull-right">(勿动)联系方式(勿动)</a>
                            </div>
						<div class="clearfix" style="margin-bottom:8px;"></div> 
					</div>
					<div class="copy">
						<!-- 网站内容 -->
						<form name="frm" action="/index.php/Admin/Modlianxi/save.html" method='post' onsubmit="return tijiao()" enctype="multipart/form-data">
                                <table>
                                	<tr>
                                		<td>公司名称：<br/><br/></td>
                                		<td align='left'><input type="text" size="30" name="l_name" value="<?php echo ($lianxi["l_name"]); ?>"/><br/><br/></td>
                                		<td>传真：<br/><br/></td>
                                		<td align='left'><input type="text" size="30" name="l_fax" value="<?php echo ($lianxi["l_fax"]); ?>"/><br/><br/></td>
                                	</tr>
                                	<tr>
                                		<td>电话1：<br/><br/></td>
                                		<td align='left'><input type="text" size="30" name="l_tel1" value="<?php echo ($lianxi["l_tel1"]); ?>"/><br/><br/></td>
                                		<td>电话2：<br/><br/></td>
                                		<td align='left'><input type="text" size="30" name="l_tel2" value="<?php echo ($lianxi["l_tel2"]); ?>"/><br/><br/></td>
                                	</tr>
                                	<tr>
                                		<td>QQ：<br/><br/></td>
                                		<td align='left'><input type="text" size="30" name="l_qq"  value="<?php echo ($lianxi["l_qq"]); ?>"/><br/><br/></td>
                                		<td>全国热线：<br/><br/></td>
                                		<td align='left'><input type="text" size="30" name="l_hotline" value="<?php echo ($lianxi["l_hotline"]); ?>" /><br/><br/></td>
                                	</tr>
                                	<tr>
                                		<td>网址：<br/><br/></td>
                                		<td align='left'><input type="text" size="30" name="l_web" value="<?php echo ($lianxi["l_web"]); ?>" /><br/><br/></td>
                                		<td>邮箱：<br/><br/></td>
                                		<td align='left'><input type="text" size="30" name="l_email"  value="<?php echo ($lianxi["l_email"]); ?>"/><br/><br/></td>
                                	</tr>
                                	<tr>
                                		<td>招聘专线：<br/><br/></td>
                                		<td colspan='3' align='left'><input type="text" name="l_zhaopin" size='80'  value="<?php echo ($lianxi["l_zhaopin"]); ?>"/><br/><br/></td>
                                	</tr>
                                	<tr>
                                		<td>公司地址：<br/><br/></td>
                                		<td colspan='3' align='left'><input type="text" name="l_addr" size='50'  value="<?php echo ($lianxi["l_addr"]); ?>"/><br/><br/></td>
                                	</tr>
                                	<tr>
                                		<td>二维码：<br/><br/></td>
                                		<td align='left'><img src='/public/images/<?php echo ($lianxi["l_erweima"]); ?>' alt='' title='' width="80" height="80"/><br/><br/></td>
                                		<td><font color='red'>点击修改二维码--》》</font><br/><br/></td>
                                		<td align='left'><input id='tupian' type="file" name="upload[]" multiple="multiple"/><br/></td>
                                	</tr>
                                	<tr>
                                		<td>公司简介：<br/><br/></td>
                                		<td colspan='3'><textarea name='l_content'><?php echo ($lianxi["l_content"]); ?></textarea><br/></td>
                                	</tr>
                                	<tr>
                                		<td colspan="4"><br/>*******************English内容部分********************<br/></td>
                                	</tr>
                                	<tr>
                                		<td colspan="4"><br/><br/></td>
                                	</tr>
                                	<tr>
                                		<td>English名称：<br/><br/></td>
                                		<td colspan='3' align='left'><input type="text" name="enl_name" size='80'  value="<?php echo ($lianxi["enl_name"]); ?>"/><br/><br/></td>
                                	</tr>
                                	<tr>
                                		<td>English地址：<br/><br/></td>
                                		<td colspan='3' align='left'><input type="text" name="enl_addr" size='80'  value="<?php echo ($lianxi["enl_addr"]); ?>"/><br/><br/></td>
                                	</tr>
                                	<tr>
                                		<td>English招聘专线：<br/><br/></td>
                                		<td colspan='3' align='left'><input type="text" name="enl_zhaopin" size='80'  value="<?php echo ($lianxi["enl_zhaopin"]); ?>"/><br/><br/></td>
                                	</tr>
                                	<tr>
                                		<td>English公司简介：<br/><br/></td>
                                		<td colspan='3'><textarea name='enl_content'><?php echo ($lianxi["enl_content"]); ?></textarea><br/></td>
                                	</tr>
                                	<tr>
                                		<td colspan='4' style="text-align:center"><input type="submit" value="确认修改"/>&nbsp;&nbsp;<input onclick="tuichu()" type="button" value="退出编辑"/></td>
                                	</tr>
                                </table>
							</form>
				    </div>
				</div>
	      </div> 
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="/Public/js/bootstrap.min.js"></script>
</body>
</html>