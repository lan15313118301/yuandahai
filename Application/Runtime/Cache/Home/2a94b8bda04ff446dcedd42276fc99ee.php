<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo (L("title")); ?></title>
<meta http-equiv="description" content="<?php echo ($contact["l_name"]); ?>,<?php echo (L("dizhi")); ?>:<?php echo ($contact["l_addr"]); ?>,<?php echo (L("dianhua")); ?>:<?php echo ($contact["l_tel1"]); ?>,<?php echo (L("wangzhi")); ?>:<?php echo ($contact["l_web"]); ?>,QQ:<?php echo ($contact["l_qq"]); ?>,EML:<?php echo ($contact["l_email"]); ?>" />
<meta name="keywords" content="<?php echo ($contact["l_name"]); ?>" />
<link href="/Public/qiancss/index.css" type="text/css" rel="stylesheet"/>
<script src="/Public/qianjs/jquery-1.7.2.min.js"></script>
<script src="/Public/qianjs/index.js"></script>
<script src="/Public/qianjs/common.js"></script>
<script>
	
		function h(){
			var height = $('.bannerImg li img').height();
			//alert(height);
			$('.banner').css('height',height);	
		}
	
</script>
</head>

<body onLoad="h()">

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
                    <li class="current differ"><a href="/index.php/Home/Index/index.html"><?php echo (L("shouye")); ?></a></li>
                    <li><a href="/index.php/Home/Company/index.html"><?php echo (L("guanyu")); ?></a></li>
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



<!--——————banner 开始——————-->
<div class="banner clearfix">
		<ul class="bannerImg clearfix">
		<?php if(is_array($banner)): foreach($banner as $key=>$v): ?><li><img src="/Public/images/<?php echo ($v["b_picture"]); ?>" alt="图片加载失败"/></li><?php endforeach; endif; ?>	
        </ul>
        <ol class="bar clearfix">
        	<li class="current"></li>
        	<li></li>
        	<li></li>
        	<li></li>
        	<li></li>
        </ol>
    	
</div>
<!--——————banner 结束——————-->

<!---------------产品概述  开始------------->
<div class="summarize">
        <div class="sumHead">
        	<h3><?php echo (L("chanpingaishu")); ?></h3>
        </div>
        <div class="sumContent">
        	<ul class="clearfix">
            	<li class="clearfix">
                	<img src="/Public/images/<?php echo ($gaishu[0]["g_picture"]); ?>" width="297" height="253">
                    <div class="liBox">
                    	<p align="center" ><?php echo ($gaishu[0]["g_name"]); ?></p>
                        <span><?php echo ($gaishu[0]["g_content"]); ?></span>
                    </div>
                </li>
            	<li>
                	<img src="/Public/images/<?php echo ($gaishu[1]["g_picture"]); ?>" width="297" height="253">
                    <div class="liBox">
                    	<p align="center"><?php echo ($gaishu[1]["g_name"]); ?> </p>
                        <span><?php echo ($gaishu[1]["g_content"]); ?></span>
                    </div>
                </li>
            	<li>                	
                    <div class="liBox">
                    	<p align="center"><?php echo ($gaishu[2]["g_name"]); ?>  </p>
                        <span><?php echo ($gaishu[2]["g_content"]); ?></span>
                    </div>
                    <img src="/Public/images/<?php echo ($gaishu[2]["g_picture"]); ?>" width="297" height="253">
                </li>
            	<li>                	
                    <div class="liBox">
                    	<p align="center"><?php echo ($gaishu[3]["g_name"]); ?> </p>
                        <span><?php echo ($gaishu[3]["g_content"]); ?></span>
                    </div>
                    <img src="/Public/images/<?php echo ($gaishu[3]["g_picture"]); ?>" width="297" height="253">
                </li>
            </ul>
    </div>
    </div>

<!---------------产品概述  结束------------->

<!--——————公司简介 开始——————-->
<div class="detail clearfix">
    <div class="deIn clearfix">
    	<!-- <div class="deinLeft" style="margin-top:40px;background:gray;height:265px"> -->
    	<!--  
        	<video autoplay  width="414px" height="314px" controls>
            	<source src="/Public/img/video1.mp4" type="video/mp4" />
            	<source src="/Public/img/video1.avi" type="video/mp4" />
            </video>
        -->
        <!--<embed src="<?php echo ($video["outurl"]); ?>" quality="high" width="350" height="250" align="middle" allowscriptaccess="always" type="application/x-shockwave-flash" />-->
      	<!-- <object class id="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="413" height="250">
				  <param name="movie" value="/Public/video/flvplayer.swf">
				  <param name="quality" value="high">
				  <param name="allowFullScreen" value="true">
				  <param name="FlashVars" value="vcastr_file=/Public/video/<?php echo (L("shipin")); ?>&LogoText=&BufferTime=3&IsAutoPlay=0">
				  <embed src="/Public/video/flvplayer.swf" allowfullscreen="true" flashvars="vcastr_file=/Public/video/<?php echo (L("shipin")); ?>&LogoText=www.erwai.com&IsAutoPlay=0" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="413" height="250"></embed>
		</object>   --> 
        <!-- </div> -->
        <div class="deinRight">
        	<h4><?php echo (L("gongsijianjie")); ?><span>/PROFILE</span></h4>
            <?php echo (cutstr($contact["l_content"],300)); ?>
            <br/><br/>
			<a href="/index.php/Home/Company/index.html" class="reMore">READ  MORE>></a>
        </div>
    </div>	
        
</div>
<!--——————公司简介 结束——————-->

<!--——————产品详情 开始——————-->
<div class="showAll">
<div class="show">
	<div class="productShow">
    	<h2><?php echo (L("gongsishili")); ?></h2>
    </div>
</div>
<div class="qiehuan">
	<ul class="tabChange clearfix">
        	<li class="current" style="cursor:pointer;"><?php echo (L("shengchanyanfa")); ?></li>
            <li style="cursor:pointer;"><?php echo (L("jianceshebei")); ?></li>
    </ul>
</div>
<div class="imgShow">
<!--ul01  start-->
	<ul class="muxiang clearfix">
	<?php if(is_array($jixie)): foreach($jixie as $key=>$v): ?><li>
            <a href="/index.php/Home/Product/prodisplay/pid/<?php echo ($v["p_id"]); ?>.html">
                <img src="/Public/images/<?php echo ($v["p_picture"]); ?>" width="286" height="209"/>
            
            <div class="muText"><?php echo ($v["p_name"]); ?></div>
            <div class="hoverDetail">
            	<i class="eyes"></i>
            	<?php echo ($v["p_intro"]); ?>
            </div>
			</a>
        </li><?php endforeach; endif; ?> 
    </ul>
<!--ul01  end-->  

<!--ul02  start--> 
	<ul class="chukoubaozhuang clearfix">
	<?php if(is_array($dianqi)): foreach($dianqi as $key=>$v): ?><li>
            <a href="/index.php/Home/Product/prodisplay/pid/<?php echo ($v["p_id"]); ?>.html">
                <img src="/Public/images/<?php echo ($v["p_picture"]); ?>" width="286" height="209"/>
            
            <div class="muText"><?php echo ($v["p_name"]); ?></div>
            <div class="hoverDetail">
            	<i class="eyes"></i>
            	<?php echo ($v["p_intro"]); ?>
            </div>
			</a>
        </li><?php endforeach; endif; ?>  
    </ul>
<!--ul02  end-->
</div>
</div>
<!--——————产品展示 结束——————-->

<!--——————新闻中心 开始——————-->
	<div class="newsCenter">
    	<div class="ncHead">
        	<h3><?php echo (L("xinwenzhongxin")); ?></h3>
        </div> 
        <div class="ncIn clearfix">
        	<div class="ncinLeft">
            	<div class="ncinlTop clearfix">
                	<img src="/Public/images/<?php echo ($gongsi[0]["n_picture"]); ?>" width="171" height="135">
                    <div>
                    	<h4><?php echo (cutstr($gongsi[0]["n_title"],20)); ?></h4>
                        <p><?php echo (cutstr($gongsi[0]["n_info"],55)); ?></p>
                        <a href="/index.php/Home/News/detail/nid/<?php echo ($gongsi[0]["n_id"]); ?>.html">MORE+</a>
                    </div>
                </div>
                <div class="newsList">
                	<ul>
                	<?php $__FOR_START_11468__=1;$__FOR_END_11468__=$gongcount;for($i=$__FOR_START_11468__;$i < $__FOR_END_11468__;$i+=1){ ?><li>
                        	<a href="/index.php/Home/News/detail/nid/<?php echo ($gongsi[$i]["n_id"]); ?>.html" class="clearfix newsText">
                            	<span class="spanleft">·<?php echo (cutstr($gongsi[$i]["n_title"],20)); ?></span>
                                <span class="spanright"><?php echo (date('Y—m-d',$gongsi[$i]["n_time"])); ?></span>
                            </a>
                        </li><?php } ?>  
                    </ul>
                </div>
          </div>
            <div class="ncinRight">
            	<div class="ncinlTop clearfix">
                	<img src="/Public/images/<?php echo ($hangye[0]["n_picture"]); ?>" width="171" height="135">
                    <div>
                    	<h4><?php echo (cutstr($hangye[0]["n_title"],20)); ?></h4>
                        <p><?php echo (cutstr($hangye[0]["n_info"],55)); ?></p>
                        <a href="/index.php/Home/News/detail/nid/<?php echo ($hangye[0]["n_id"]); ?>.html">MORE+</a>
                    </div>
                </div>
                <div class="newsList">
                	<ul>
                	<?php $__FOR_START_19693__=1;$__FOR_END_19693__=$hangcount;for($i=$__FOR_START_19693__;$i < $__FOR_END_19693__;$i+=1){ ?><li>
                        	<a href="/index.php/Home/News/detail/nid/<?php echo ($hangye[$i]["n_id"]); ?>.html" class="clearfix newsText">
                            	<span class="spanleft">·<?php echo ($hangye[$i]["n_title"]); ?></span>
                                <span class="spanright"><?php echo (date('Y-m-d',$hangye[$i]["n_time"])); ?></span>
                            </a>
                        </li><?php } ?>  
                    </ul>
                </div>
          </div>
        </div>
    </div>
<!--——————新闻中心 结束——————-->

<!--——————合作伙伴 开始——————-->
<div class="partner">
        <div class="phead">
            <h2><?php echo (L("hezuohuoban")); ?></h2>
        </div>
        <div class="sanjiao"></div>
    
  <div class="parterImgAll">
        <div class="clearfix">
        <?php if(is_array($hezuo)): foreach($hezuo as $key=>$v): ?><img src="/Public/images/<?php echo ($v["co_picture"]); ?>" width="199" height="150"><?php endforeach; endif; ?>  
      </div>
    </div>
</div>
<!--——————合作伙伴 结束——————-->

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