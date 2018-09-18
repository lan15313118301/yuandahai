<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>修改产品</title>
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
		editor=e.create('[name=p_content]',{
			'width':"800px",
			'height':'100px'
		});
		eneditor=e.create('[name=enp_content]',{
			'width':"800px",
			'height':'100px'
		});
	})
	function tijiao(){
		if(document.frm.p_name.value==''){
			alert("产品名称不能为空！");
			document.frm.p_name.focus();
			return false;
		}else if(document.frm.p_intro.value==''){
			alert("产品介绍不能为空！");
			document.frm.p_intro.focus();
			return false;
		}else if(editor.html()==''){
			alert("产品简介不能为空！");
			editor.focus();
			return false;
		}else if(document.frm.enp_name.value==''){
			alert("English产品名称不能为空！");
			document.frm.enp_name.focus();
			return false;
		}else if(document.frm.enp_intro.value==''){
			alert("English产品介绍不能为空！");
			document.frm.enp_intro.focus();
			return false;
		}else if(eneditor.html()==''){
			alert("English产品简介不能为空！");
			eneditor.focus();
			return false;
		}
	}
	function tuichu(){
		location="/index.php/Admin/Modpro/index.html";
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
							<h3 class="content-title">修改产品</h3>
						</div>
						<div class="description" ><?php echo ($msg["role"]); ?></div>
						<div class="col-sm-12">
                                <a href="/index.php/Admin/Modpro/index.html"  class="btn btn-secondary btn-lo pull-right">查看所有产品</a>
                            </div>
						<div class="clearfix" style="margin-bottom:8px;"></div> 
					</div>
					<div class="copy">
						<!-- 网站内容 -->
						<form name="frm" action="/index.php/Admin/Modpro/save/proId/<?php echo ($product["p_id"]); ?>.html" method="post" enctype="multipart/form-data" onsubmit="return tijiao()">
						<table>
						<tr align="left">
								<td>所属分类1：</td>
								<td colspan='2'>
								<select name="c_id">
								<?php if(is_array($cate)): foreach($cate as $key=>$v): if($product[c_id] == $v[c_id]): ?><option value="<?php echo ($v["c_id"]); ?>"  selected ><?php echo ($v["c_name"]); ?></option>
									<?php else: ?>
										<option value="<?php echo ($v["c_id"]); ?>"><?php echo ($v["c_name"]); ?></option><?php endif; endforeach; endif; ?>	
								</select>
								</td>
							</tr>
							<tr>
								<td colspan='3'>&nbsp;</td>
							</tr>
							<tr align="left">
								<td>关键字：</td>
								<td colspan='2'><input type="text" size="30" name="p_keys" value="<?php echo ($product["p_keys"]); ?>"/></td>
							</tr>
							<tr>
								<td colspan='3'>&nbsp;</td>
							</tr>
							<tr>
								<td colspan='3'>*************中文部分************</td>
							</tr>
							<tr>
								<td colspan='3'>&nbsp;</td>
							</tr>
							<tr align="left">
								<td>产品标题：</td>
								<td colspan='2'><input type="text" size="50" name="p_name" value="<?php echo ($product["p_name"]); ?>"/></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td colspan='2'>&nbsp;</td>
							</tr>
							
							<tr align="left">
								<td>产品图片：</td>
								<td>
								<?php if($product["p_picture"] != '0'): ?><img src="/Public/images/<?php echo ($product["p_picture"]); ?>" title="" alt="" width="50" height="40"/>
								<?php else: ?>
								<img src="/Public/images/wutu.png" title="" alt="" width="50" height="40"/><?php endif; ?>
								</td>
								<td>
									<input id='tupian' type="file" name="upload[]" multiple="multiple"/>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td colspan='2'>&nbsp;</td>
							</tr>
							
							<tr align="left">
								<td>一句话简介：</td>
								<td colspan='2'><input type="text" size="80" name="p_intro" value='<?php echo ($product["p_intro"]); ?>'/></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td colspan='2'>&nbsp;</td>
							</tr>
							<tr>
								<td>产品简介：</td>
								<td colspan='2'><textarea name="p_content"><?php echo ($product["p_content"]); ?></textarea></td>
							</tr>
							<tr>
								<td colspan='3'>&nbsp;</td>
							</tr>
							<tr>
								<td colspan='3'>*************English部分************</td>
							</tr>
							<tr>
								<td colspan='3'>&nbsp;</td>
							</tr>
							<tr align="left">
								<td>产品标题：</td>
								<td colspan='2'><input type="text" size="50" name="enp_name" value="<?php echo ($product["enp_name"]); ?>"/></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td colspan='2'>&nbsp;</td>
							</tr>
							<tr align="left">
								<td>产品图片：</td>
								<td>
								<?php if($product["enp_picture"] != '0'): ?><img src="/Public/images/<?php echo ($product["enp_picture"]); ?>" title="" alt="" width="50" height="40"/>
								<?php else: ?>
								<img src="/Public/images/wutu.png" title="" alt="" width="50" height="40"/><?php endif; ?>
								</td>
								<td>
									<input id='tupian' type="file" name="enupload[]" multiple="multiple"/>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td colspan='2'>&nbsp;</td>
							</tr>
							
							<tr align="left">
								<td>一句话简介：</td>
								<td colspan='2'><input type="text" size="80" name="enp_intro" value='<?php echo ($product["enp_intro"]); ?>'/></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td colspan='2'>&nbsp;</td>
							</tr>
							<tr>
								<td>产品简介：</td>
								<td colspan='2'><textarea name="enp_content"><?php echo ($product["enp_content"]); ?></textarea></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td colspan='2'><input type="submit" value="确定修改产品"/>&nbsp;&nbsp;<input onclick="tuichu()" type="button" value="退出编辑"/></td>
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