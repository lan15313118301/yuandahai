<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo (L("title")); ?>-<?php echo (L("lianxi")); ?></title>
<meta http-equiv="description" content="<?php echo ($contact["l_name"]); ?>,<?php echo (L("dizhi")); ?>:<?php echo ($contact["l_addr"]); ?>,<?php echo (L("dianhua")); ?>:<?php echo ($contact["l_tel1"]); ?>,<?php echo (L("wangzhi")); ?>:<?php echo ($contact["l_web"]); ?>,QQ:<?php echo ($contact["l_qq"]); ?>,EML:<?php echo ($contact["l_email"]); ?>" />
<meta name="keywords" content="<?php echo ($contact["l_name"]); ?>" />
<link href="/public/qiancss/common.css" type="text/css" rel="stylesheet"/>
<link href="/public/qiancss/lainxi.css" type="text/css" rel="stylesheet"/>
<script src="/public/qianjs/jquery-1.7.2.min.js"></script>
<script src="/public/qianjs/common.js"></script>
<script type="text/javascript">
		//自动获取左边的高度
		$().ready(function(){
			var h=$(".ciLeft").height();
			//将高度的值赋给右边的高度
			$(".ciRight").css('min-height',h);
		});
		function check(){
			if(document.frm.dianhua.value==''){
				alert('电话号码不能为空');
				document.frm.dianhua.focus();
				return false;
			}
		} 
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
                    <li><a href="/index.php/Home/Company/index.html"><?php echo (L("guanyu")); ?></a></li>
                    <li><a href="/index.php/Home/News/index.html"><?php echo (L("xinwen")); ?></a></li>
                    <li><a href="/index.php/Home/Product/index/cid/8.html"><?php echo (L("chanpin")); ?></a></li>
                    <li><a href="/index.php/Home/Sale/index.html"><?php echo (L("xiaoshou")); ?></a></li>
                    <li><a href="/index.php/Home/Emyployee/index.html"><?php echo (L("renli")); ?></a></li>
                    <li class="current differ"><a href="/index.php/Home/Contact/index.html"><?php echo (L("lianxi")); ?></a></li>
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
    	<img src="/public/img/<?php echo (L("lianxibanner")); ?>"/>
    </div>
    <!--——————banner 结束——————-->
    
    <!--——————标题 开始——————-->
    <!--<div class="cHead"></div>-->
    <!--——————标题 结束——————-->
    
    <div class="cIn clearfix">
   	  <div class="ciLeft">
        	<div class="cilTop">
            	<h3><?php echo (L("lianxiwomen")); ?></h3>
            </div>
            <div class="fenlei">
           	  <ul>
                	<li class="current"><a href="javascript:"><?php echo (L("lianxifangshi")); ?></a></li>
                	<li><a href="javascript:"><?php echo (L("kehuliuyan")); ?></a></li>
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
        
        
      <div class="ciRight gongsijianjie current" >
       		<div class="cirHead clearfix">
            	<h3><?php echo (L("lianxifangshi")); ?></h3>
                <p><?php echo (L("current")); ?>：<a href="/index.php/Home/Index/index.html"><?php echo (L("home")); ?></a>><a href="/index.php/Home/Contact/index.html"><?php echo (L("lianxiwomen")); ?></a>><a href="javascript:;"><?php echo (L("lianxifangshi")); ?></a></p>
          	</div>
            <div class="text clearfix">
            	
            	<div class="center" style="width:730px;position: relative;margin-bottom: 40px;">
                	<p class="titleBig"><?php echo ($contact["l_name"]); ?></p>
                    <p class="titleBig" style="position: absolute;left: 300px;top:0px">Beijing Yuandahai Technology Co., Ltd. </p>
                    <p>电话:010-67569632 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel:010-67569632</p>
                    <p>传真:010-60227072 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax:010-60227072</p>
                    <p>地址:北京市大兴区金星西路5号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add: Room 1911 ,Bild. B ,Greenland Central<br>绿地中央广场B座1911&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Plaza,
                      No.5 Jinxing West Road, Daxing &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;District , Beijing , China  P . C . 102600</p>
                    
                    <p>http://www.bjydwy.net &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;http://www.bjydwy.net                               </p>
                    <p>邮箱: bjydwy@hotmail.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail: bjydwy@hotmail.com</p>
                </div>
                <div class="right" style="width:200px;">
                	<img src="/public/images/<?php echo ($contact["l_erweima"]); ?>" width='119' height='119'/>
                    <p style="text-align:center;"><?php echo (L("saomiao")); ?></p>
                </div>
                <br>
                <br>
        </div>
        	<!-- 此处添加公司具体地址 -->
        	<div style="width:936px;height:480px">
        		
 
 <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=8GIjqZxf3FUuOtlWCkd8xqOr"></script>
    <div style="width:936px;height:480px;border:#ccc solid 1px;font-size:12px" id="map"></div>


                <script type="text/javascript">
                    //创建和初始化地图函数：
                    function initMap(){
                        createMap();//创建地图
                        setMapEvent();//设置地图事件
                        addMapControl();//向地图添加控件
                        addMapOverlay();//向地图添加覆盖物
                    }
                    function createMap(){
                        map = new BMap.Map("map");
                        map.centerAndZoom(new BMap.Point(116.339439,39.77041),18);
                    }
                    function setMapEvent(){
                        map.enableScrollWheelZoom();
                        map.enableKeyboard();
                        map.enableDragging();
                        map.enableDoubleClickZoom()
                    }
                    function addClickHandler(target,window){
                        target.addEventListener("click",function(){
                            target.openInfoWindow(window);
                        });
                    }
                    function addMapOverlay(){
                        var markers = [
                            {content:"地址:北京市大兴区金星西路5号绿地中央广场B座1911    <br/>    电话:010-67569632",title:"北京远达海科技有限公司",imageOffset: {width:-46,height:-21},position:{lat:39.77041,lng:116.339439}},
                        ];
                        for(var index = 0; index < markers.length; index++ ){
                            var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
                            var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
                                    imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
                                })});
                            var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
                            var opts = {
                                width: 200,
                                title: markers[index].title,
                                content:markers[index].content,
                                enableMessage: false
                            };
                            var infoWindow = new BMap.InfoWindow(markers[index].content,opts);  // 创建信息窗口对象
                            marker.setLabel(label);
                            map.openInfoWindow(infoWindow, map.getCenter());      // 打开信息窗口
                            // var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
                            // marker.setLabel(label);
                            // addClickHandler(marker,infoWindow);
                            map.addOverlay(marker);
                        };
                        var labels = [
                        ];
                        for(var index = 0; index < labels.length; index++){
                            var opt = { position: new BMap.Point(labels[index].position.lng,labels[index].position.lat )};
                            var label = new BMap.Label(labels[index].content,opt);
                            map.addOverlay(label);
                        };
                    }
                    //向地图添加控件
                    function addMapControl(){
                        var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
                        scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
                        map.addControl(scaleControl);
                        var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
                        map.addControl(navControl);
                        var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
                        map.addControl(overviewControl);
                    }
                    var map;
                    initMap();
                </script>

				
        	</div>
        </div>
        <!--ciRight-->
        
        <div class="ciRight qiyeweenhua">
       		<div class="cirHead clearfix">
            	<h3><?php echo (L("kehuliuyan")); ?></h3>
                <p><?php echo (L("current")); ?>：<a href="/index.php/Home/Index/index.html"><?php echo (L("home")); ?></a>><a href="/index.php/Home/Contact/index.html"><?php echo (L("lianxiwomen")); ?></a>><a href="javascript:;"><?php echo (L("kehuliuyan")); ?></a></p>
          	</div>
            <div class="text">
            <form name='frm' action="/index.php/Home/Contact/add.html" method='post' onsubmit="return check()">
            	<label for="Name"><?php echo (L("xingming")); ?>：<input id="Name" name="name" type="text" /></label>
               
                <label for="dianhua"> <?php echo (L("dianhua")); ?>：<input id="dianhua" name="dianhua" type="text" /></label><br>
                <div class="liuyan clearfix">
                <span><?php echo (L("liuyan")); ?>：</span><textarea name='content'></textarea>
                </div>
                <div style="margin-right:300px;"><input class="tijiao" type="submit" value="<?php echo (L("tijiao")); ?>"/></div>
            </form>
			
			
			
			
	<div class="tupian clearfix">		
		
                <div class="tupian clearfix">
                	<img src="/public/img/<?php echo (L("lianxiimg")); ?>" width="326" height="309">
                </div>
		
            </div> 
        </div>
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