<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0021)http://m.olay.com.cn/ -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo (L("title")); ?></title>
<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=yes">
<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">
<meta name="renderer" content="webkit">
<link rel="stylesheet" type="text/css" href="/Public/mobile/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="/Public/mobile/css/index.css">
<script async src="/Public/mobile/js/analytics.js"></script>
<script src="/Public/mobile/js/gw.js" async></script>
<script src="/Public/mobile/js/jquery.min.js"></script>
<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi,minimal-ui">
</head>
<body style="margin-left: 0px; overflow-y: auto;">
<header style="float:left; width:640px; height:87px;">
  <div class="header-ctn"> <a href="/index.php/" class="header-logo" onclick="_gaq.push(['_trackEvent', 'Header','Homepage_TopBar', 'Homepage_TopBar']);"></a> 
    <!--导航条-->
    <ul class="header-nav">
      <li class="i6-left"> <a id="right-nav" href="#right-nav-content" class="header-nav-icon i6 "></a> </li>
    </ul>
    <!--导航条-End--> 
  </div>
  
  
  <!--历史足迹-->
  <div class="swiper-container footprint swiper-container-horizontal">
    <div class="swiper-wrapper">
      <p class="p_zuji2">您还没有浏览过产品，立即搜索，开启美肌之旅</p>
    </div>
    <!--<div class="pagination"></div>--> 
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-disabled"></div>
    <div class="swiper-button-prev swiper-button-disabled"></div>
  </div>
  <script type="text/javascript">
    function Search() {
        var keyword = $("#txtSearchKey").val();
        if (keyword == "") {
            alert("请输入关键字");
        }
        else {
            _gaq.push(['_trackEvent', 'Header', 'Search', 'Searchresult_' + keyword]);
            window.location = "/ProductSearch.aspx?searchkey=" + $("#txtSearchKey").val();

        }
    }

    $(document).ready(function () {
        $("#txtSearchKey").keydown(function (e) {
            var curKey = e.which;
            if (curKey == 13) {
                Search();
            }
        });

        $("#btnSearchPro").click(function () {
            Search();
        });
    });
</script> 
  <!--历史足迹-End--> 
  <!--页头—End--> 
</header>
<!--页头-End--> 
<!--侧边导航-->
<aside>
  <div id="right-nav-content" class="right-nav" style="position: fixed; top: 0px; height: 100%; z-index: 999999; left: auto; right: -521px; display: none;">
    <ul>
      <li class="right-nav-li1"> </li>
      
      
      <li><a href="/index.php/Home/Index/index.html"><b class="right-nav-b"><?php echo (L("shouye")); ?></b></a></li>
      <li><a href="/index.php/Home/Company/index.html"><b class="right-nav-b"><?php echo (L("guanyu")); ?></b></a></li>
      <li><a href="/index.php/Home/News/index.html"><b class="right-nav-b"><?php echo (L("xinwen")); ?></b></a></li>
      <li><a href="/index.php/Home/Product/index.html"><b class="right-nav-b"><?php echo (L("chanpin")); ?></b></a></li>
      <li><a href="/index.php/Home/Sale/index.html"><b class="right-nav-b"><?php echo (L("xiaoshou")); ?></b></a></li>
      <li><a href="/index.php/Home/Emyployee/index.html"><b class="right-nav-b"><?php echo (L("renli")); ?></b></a></li>
      <li><a href="/index.php/Home/Contact/index.html"><b class="right-nav-b"><?php echo (L("lianxi")); ?></b></a></li>
      
    </ul>
  </div>
  <script type="text/javascript">
    (function () {

        $("#btn_login").click(function () {
            popWindow("sus-vip2");
            $("#right-nav").trigger("click");

        })
        $("#btn_reg").click(function () {
            popWindow("sus-vip2");
            $("#right-nav").trigger("click");

        })
        $(".s-close").click(function () {
            $(".sus-vip,.zhezhao").fadeOut("100");
            
        })


    })();
    function popWindow(windowName) {
        $(".zhezhao, ." + windowName).fadeIn("100");

    }


</script> 
</aside>
<h1 style="display: none;" id="Slidedown_SlideBanner"></h1>
<script src="/Public/qianjs/index.js"></script>
<script src="/Public/qianjs/common.js"></script>
<script>
	
		function h(){
			var height = $('.bannerImg li img').height();
			//alert(height);
			$('.banner').css('height',height);	
		}
	
</script>

<!--搜索search-End-->
<div class="viewport" style="width: 640px; height: 420px; overflow: hidden;">
  <div class="flipsnap bannerControl" >
  	
    <div class="item"><a href="<?php echo ($v["href"]); ?>" data-transition="flip"><img data-original="" src="/Public/mobile/img/banner1.jpg" alt="" title="" class="lazy" ></a></div>
  	
    <div class="item"><a href="<?php echo ($v["href"]); ?>" data-transition="flip"><img data-original="" src="/Public/mobile/img/banner2.jpg" alt="" title="" class="lazy" ></a></div>
    
  </div>
</div>

<div class="pointer"></div>
<!--大图轮播-End--> 
<!--产品导航-->
<section>
  <div class="summarize">
        <div class="sumHead">
        	<h3><?php echo (L("chanpingaishu")); ?></h3>
        </div>
        <div class="sumContent">
        	<ul class="clearfix">
            	<li>
                	<img src="/Public/images/<?php echo ($gaishu[0]["g_picture"]); ?>" width="297" height="253">
                    <div class="liBox">
                    	<p align="center" ><?php echo ($gaishu[0]["g_name"]); ?></p>
                        <span><?php echo ($gaishu[0]["g_content"]); ?></span>
                    </div>
                </li>
            	<li>
                	
                    <div class="liBox">
                    	<p align="center"><?php echo ($gaishu[1]["g_name"]); ?> </p>
                        <span><?php echo ($gaishu[1]["g_content"]); ?></span>
                    </div>
                    <img src="/Public/images/<?php echo ($gaishu[1]["g_picture"]); ?>" width="297" height="253">
                </li>
            	<li>    
                <img src="/Public/images/<?php echo ($gaishu[2]["g_picture"]); ?>" width="297" height="253">            	
                    <div class="liBox">
                    	<p align="center"><?php echo ($gaishu[2]["g_name"]); ?>  </p>
                        <span><?php echo ($gaishu[2]["g_content"]); ?></span>
                    </div>
                    
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
  <b class="main-product-b2"> </b></section>
  <div style="clear:both"></div>
  
  <div class="detail clearfix">
    <div class="deIn clearfix">
    	<div class="deinRight">
        	<h4><?php echo (L("gongsijianjie")); ?><span>/PROFILE</span></h4>
            <?php echo (cutstr($contact["l_content"],300)); ?>
            <br/><br/>
			<a href="/index.php/Home/Company/index.html" class="reMore">READ  MORE>></a>
        </div>
    </div>	
     <div style="clear:both"></div>   
</div>
  
  
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
<div style="clear:both"></div>
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
                		<?php $__FOR_START_15101__=1;$__FOR_END_15101__=$gongcount;for($i=$__FOR_START_15101__;$i < $__FOR_END_15101__;$i+=1){ ?><li>
                        	<a href="/index.php/Home/News/detail/nid/<?php echo ($gongsi[$i]["n_id"]); ?>.html" class="clearfix newsText">
                            	<span class="spanleft">·<?php echo (cutstr($gongsi[$i]["n_title"],20)); ?></span>
                                <span class="spanright"><?php echo (date('Y—m-d',$gongsi[$i]["n_time"])); ?></span>
                            </a>
                        </li><?php } ?>  
                    </ul>
                </div>
          </div>
            
        </div>
    </div>
<!--——————新闻中心 结束——————-->
<div style="clear:both"></div>
<!--——————合作伙伴 开始——————-->
<div class="partner">
        <div class="phead">
            <h2><?php echo (L("hezuohuoban")); ?></h2>
        </div>
        <div class="sanjiao"></div>
    
  <div class="parterImgAll">
        <div class="clearfix">
        <?php if(is_array($hezuo)): foreach($hezuo as $key=>$v): ?><img src="/Public/images/<?php echo ($v["co_picture"]); ?>" width="200" height="150"><?php endforeach; endif; ?>  
      </div>
    </div>
</div>
<!--——————合作伙伴 结束——————-->  
  
  
  


<script src="/Public/mobile/js/flipsnap.min.js" type="text/javascript"></script> 
<script src="/Public/mobile/js/code.js" type="text/javascript"></script> 
<script src="/Public/mobile/js/jquery.panelslider.js" type="text/javascript"></script> 
<script src="/Public/mobile/js/swiper.min.js" type="text/javascript" charset="utf-8"></script> 
<script src="/Public/mobile/js/fsmin.js" type="text/javascript"></script> 
<script src="/Public/mobile/js/tag.js">{ site: "AK7okjI" }</script>
<div class="zhezhao" style="display: none;"> </div>
<footer>
  <div class="footer-ctn w_ctn"> 
    <!--电话-->
    <div class="footer-tell">
      <h2>产品热线： <a class="tell" href="tel:4006700067" >0459-5057767</a> </h2>
      <p class="tell_date">dqdannuo@163.com</p>
    </div>
    <!--电话—End--> 
    <!--版权-->
    <div class="footer-info">
      <div class="footer-info2"> <a>版权所有：北京远达海科技有限公司<br>
公司地址：北京市大兴区金星西路5号绿地中央广场B座1911<br>
Tel : 010-67569632 公司网址: www.bjydwy.net<br> E-mail:bjydwy@hotmail.com</a> </div>
      <div class="footer-info3 footer-info3-1"> © 2016 Procter &amp; Gamble </div>
      <a class="footer-info3 footer-info3-2" style="color:#000" href="http://www.beianbeian.com/beianxinxi/0ba4901c-f5ff-4381-bc22-cb5c579f9fc0.html" target="_blank" rel="nofollow">晋ICP备17009802号-1 </a> </div>
    <!--版权-End--> 
  </div>
</footer>
<div id="Slidedown_End"></div>
</body></html>