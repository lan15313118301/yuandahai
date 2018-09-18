<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>显示所有新闻</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
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
<script type="text/javascript">
	function del($p_id){
		if(confirm("确定要删除此产品吗？")){
			window.location="/index.php/Admin/Modpro/del/pid/"+$p_id;
		}
	}
	function getNum(){
		var news=document.getElementsByName('news[]');
		count=0;
		for(i=0;i<news.length;i++){
			if(news[i].checked){
				count++;
			}
		}
		return count;
	}
	function status(){
		var geshu=getNum();
		if(geshu){
			document.getElementById("shanchu").disabled=false;
		}else{
			document.getElementById("shanchu").disabled=true;
		}
	}
	function delzong(){
		var zong=document.getElementById('zong');
		var news=document.getElementsByName('news[]');
		for(i=0;i<news.length;i++){
			news[i].checked=zong.checked;
		}
		status()
	}
	function newsdel(){
		var zong=document.getElementById('zong');
		var news=document.getElementsByName('news[]');
		if(getNum()==news.length){
			zong.checked=true;
		}else{
			zong.checked=false;
		}
		status()
	}
	function alldel(){
		//document.getElementById("frm").action="/index.php/Admin/Modnews/delAll.html";
		if(confirm("确定要删除选中的产品？")){
			window.frm.action="/index.php/Admin/Modpro/delall";
			document.frm.submit();
		}
	}
	function showpai(){
		document.getElementById("paixu").disabled=false;
	}
	function allpai(){
		window.frm.action="/index.php/Admin/Modpro/allpai";
		document.frm.submit();
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
							<h3 class="content-title">显示所有新闻</h3>
						</div>
						<div class="description" ><?php echo ($msg["role"]); ?></div>
						<div class="col-sm-12">
                                <a href="/index.php/Admin/Addpro/index.html"  class="btn btn-secondary btn-lo pull-right">发布产品</a>
                            </div>
						<div class="clearfix" style="margin-bottom:8px;"></div> 
					</div>
						<!-- 网站内容 -->
					   <div class="xs">
							<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
									<div class="panel-heading">
										<h2>新闻展示</h2>
										<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
									</div>
									<div class="panel-body no-padding" style="display: block;">
									<form name="frm" id='frm' action='' method="post">
										<table class="table table-striped">
											<thead>
												<tr class="warning">
													<th><input type="checkbox" id="zong" onclick="delzong()" name="zong"/></th>
													<th>序号</th>
													<th>排序</th>
													<th>所属分类</th>
													<th>中文版名称</th>
													<th>中文图片</th>
													<th>English名称</th>
													<th>English图片</th>
													<th>时间</th>
													<th>点击数</th>
													<th>操作</th>
												</tr>
											</thead>
											<tbody>
											<?php if(is_array($product)): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
													<td><input type="checkbox" name="news[]" onclick='newsdel()' value="<?php echo ($v["p_id"]); ?>"/></td>
													<td><?php echo ($i); ?></td>
													<td><input type="text" size="3"  onchange='showpai()' name="paixu[<?php echo ($v["p_id"]); ?>]" value="<?php echo ($v["p_pai"]); ?>"/></td>
													<td><?php echo ($v["c_name"]); ?></td>
													<td><?php echo (cutstr($v["p_name"],27)); ?></td>
													<td>
													<?php if($v["p_picture"] != '0'): ?><img src='/public/images/<?php echo ($v["p_picture"]); ?>' alt='' title='' width="40" height="20"/><?php endif; ?>	
													</td>
													<td><?php echo (cutstr($v["enp_name"],27)); ?></td>
													<td>
													<?php if($v["enp_picture"] != '0'): ?><img src='/public/images/<?php echo ($v["enp_picture"]); ?>' alt='' title='' width="40" height="20"/><?php endif; ?>	
													</td>
													<td><?php echo (date('Y-m-d H:m',$v["p_time"])); ?></td>
													<td><?php echo ($v["p_click"]); ?></td>
													<td>
														<a href="/index.php/Admin/Modpro/upt/proId/<?php echo ($v["p_id"]); ?>.html" class="btn btn-default btn-sm btn-lo">修改</a>
                                          				  <a href="#" onclick="del(<?php echo ($v["p_id"]); ?>)" class="btn btn-default btn-sm btn-lo">删除</a>
													</td>
												</tr><?php endforeach; endif; else: echo "" ;endif; ?>	
											</tbody>
											
										</table>
										<input type="button" id="shanchu" onclick="alldel()" disabled='disabled' value="删除选中项"/>
										<input type="button" id="paixu" onclick="allpai()" disabled='disabled' value="确认排序"/>
										 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo ($showMsg); ?>
										</form>
									</div>
							</div>
						</div>
						<!-- 网站内容结束 -->	
						
						
						<div>
						
							<ul class="pagination">
								  <?php echo ($fangkuai); ?>
							</ul>	
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