<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo (L("title")); ?>-<?php echo (L("guanyu")); ?></title>
<meta http-equiv="description" content="<?php echo ($jianjie["cm_keys"]); ?>">
<meta name="keywords" content="<?php echo ($jianjie["cm_keys"]); ?>" />
<link href="/Public/qiancss/common.css" type="text/css" rel="stylesheet"/>
<link href="/Public/qiancss/about.css" type="text/css" rel="stylesheet"/>
<script src="/Public/qianjs/jquery-1.7.2.min.js"></script>
<script src="/Public/qianjs/common.js"></script>
<script type="text/javascript">
	//自动获取左边的高度
	$().ready(function(){
		var h=$(".ciLeft").height();
		//将高度的值赋给右边的高度
		$(".ciRight").height(h);
	});
</script>
</head>

<body>

<!--——————标题栏 开始——————-->

	<div class="lang clearfix">
	<div class="langIn01 clearfix">
	<div class="langIn clearfix">
    	<!-- <a href="/index.php/Home/index/index/lang/zh-cn" class="zhongwen">中文</a> -->
    	<!-- <a href="/index.php/Home/index/index/lang/en-us" class="yingwen">ENGLISH</a> -->
    </div>
    </div>
</div>

	<div class="titleAll">
	<div class="title clearfix">
    	
		<div style="width: 10%; margin-top:20px;height: 10%;display: inline-block;" class="tLeft">
        	<a href="/index.php/Home/Index/index.html" title="远达伟业">
           		<img src="/Public/img/<?php echo (L("logo")); ?>" alt="图片加载失败"/> 
            </a>
        </div>

        
        <div class="tRight">
        	<!--——————导航栏 开始——————-->
            <div class="nav">
                <ul class="clearfix">
                    <li><a href="/index.php/Home/Index/index.html"><?php echo (L("shouye")); ?></a></li>
                    <li class="current differ"><a href="/index.php/Home/Company/index.html"><?php echo (L("guanyu")); ?></a></li>
                    <li><a href="/index.php/Home/News/index.html"><?php echo (L("xinwen")); ?></a></li>
                    <li><a href="/index.php/Home/Product/index/cid/8.html"><?php echo (L("chanpin")); ?></a></li>
                    <li><a href="/index.php/Home/Sale/index.html"><?php echo (L("xiaoshou")); ?></a></li>
                    <li><a href="/index.php/Home/Emyployee/index.html"><?php echo (L("renli")); ?></a></li>
                    <li><a href="/index.php/Home/Contact/index.html"><?php echo (L("lianxi")); ?></a></li>
                </ul>
            </div>
<!--——————导航栏 结束——————-->
        </div>
    </div>
</div>
<!--——————标题栏 结束——————-->

<!--——————内容 开始——————-->
<div class="content">
	<!--——————banner 开始——————-->
    <div class="banner">
    	<img src="/Public/img/guanyuBanner.png"/>
    </div>
    <!--——————banner 结束——————-->
    
    <!--——————标题 开始——————-->
    <!--<div class="cHead"></div>-->
    <!--——————标题 结束——————-->
    
    <div class="cIn clearfix">
   	  
   	  <!-- 加载左侧页面 -->
   	  <div class="ciLeft">
        	<div class="cilTop">
            	<h3><?php echo (L("guanyu")); ?></h3>
            </div>
            <div class="fenlei">
           	  <ul>
           	  <?php if(is_array($company)): foreach($company as $key=>$v): ?><li><a href="/index.php/Home/Company/detail/cmid/<?php echo ($v["cm_id"]); ?>.html"><?php echo ($v["cm_name"]); ?></a></li><?php endforeach; endif; ?> 	
                	
                </ul>
            </div>
            
       		<!-- 加载左侧页面 -->
       		<div class="contact">
            	<h4><?php echo (L("lianxi")); ?></h4>
              	<img src="/Public/img/jianjieIMG01.png"/>
                <p class="p1"><?php echo ($contact["l_name"]); ?></p>
                <p><?php echo (L("dianhua")); ?>：<?php echo ($contact["l_tel1"]); ?></p>
                <p><?php echo (L("chuanzhen")); ?>：<?php echo ($contact["l_fax"]); ?></p>
                <p><?php echo (L("dizhi")); ?>：<?php echo ($contact["l_addr"]); ?></p>
                <p><?php echo (L("youxiang")); ?>：<?php echo ($contact["l_email"]); ?></p>
            </div>
          	
            <div class="newsCenter">
            	<h4><?php echo (L("xinwencenter")); ?></h4>
                <ul>
                <?php if(is_array($hotnews)): foreach($hotnews as $key=>$v): ?><li><a href="/index.php/Home/News/detail/nid/<?php echo ($v["n_id"]); ?>.html"><?php echo (cutstr($v["n_title"],13)); ?></a></li><?php endforeach; endif; ?> 	
                </ul>
            </div>
       		
        </div>
        
        
      <div class="ciRight gongsijianjie current">
       		<div class="cirHead clearfix">
            	<h3><?php echo ($jianjie["cm_name"]); ?></h3>
                <p><?php echo (L("current")); ?>：<a href="/index.php/Home/Index/index.html"><?php echo (L("home")); ?></a>><a href="/index.php/Home/Company/index.html"><?php echo (L("guanyu")); ?></a>><a href="javascript:;"><?php echo ($jianjie["cm_name"]); ?></a></p>
          	</div>
            <div class="text">
			<?php echo ($jianjie["cm_content"]); ?>
            </div>
        </div>
        <!--ciRight-->
        
        
        
        <!--ciRight-->
    </div>
    
</div>
<!--——————内容 结束——————-->

<div class="tel ">
<div class="telIn clearfix">
	<div class="telLeft clearfix">
    	<i class="telBg"></i>
        <span><?php echo ($contact["l_tel2"]); ?></span>
    </div>
	<div class="telRight clearfix">
    	<i class="youxiangBg"></i>
        <span><?php echo ($contact["l_email"]); ?></span>
    </div>
</div>
</div>

<!--——————footer 开始——————-->
	<div class="footer">
    	<div class="footerIn clearfix">
        	<div class="fiLeft">
            	<img src="/Public/img/logoFooter.png">
            </div>
            <div class="fiCenter" style="text-align:left;">
            	<p><?php echo (L("banquan")); ?>：<?php echo ($contact["l_name"]); ?>    </p>
				<p><?php echo (L("dizhi")); ?>：<?php echo ($contact["l_addr"]); ?> </p>
                <p>Tel :  <?php echo ($contact["l_tel2"]); ?>      &nbsp;&nbsp;&nbsp;<?php echo (L("wangzhi")); ?>: <?php echo ($contact["l_web"]); ?> <!-- Q Q:  <?php echo ($contact["l_qq"]); ?> -->&nbsp;&nbsp;&nbsp;       E-mail:<?php echo ($contact["l_email"]); ?></p>
                <p><?php echo (L("beian")); ?>：<?php echo (L("beianneirong")); ?> <?php echo (L("jishu")); ?>：<?php echo (L("hongyang")); ?></p>
            </div>
            <div class="fiRight">
            	<img src="/Public/images/<?php echo ($contact["l_erweima"]); ?>" width="118" height="118">
                <span style="width:300px;text-align:center;"><?php echo (L("saomiao")); ?></span>
            </div>
        </div>
    </div>

<div style='display:none'>
<a href='http://www.liustudy.com' target='_blank' title='轻质隔墙板厂家'>轻质隔墙板厂家</a>
<a href='http://www.bjtu-edu.com' target='_blank' title='北京交通大学hnd留学'>北京交通大学hnd留学</a>
</div>
<!--——————footer2 结束——————-->

</body>
</html>