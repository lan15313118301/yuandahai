<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>xitongtishixinxi</title>
<link href="/Public/qiancss/common.css" type="text/css" rel="stylesheet"/>
<link href="/Public/qiancss/lainxi.css" type="text/css" rel="stylesheet"/>
<script src="/Public/qianjs/jquery-1.7.2.min.js"></script>
<script src="/Public/qianjs/common.js"></script>
<script type="text/javascript">
	var i=3;
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

<!--——————标题栏 开始——————-->
<div class="lang clearfix">
	<div class="langIn01 clearfix">
	<div class="langIn clearfix">
    	<!-- <a href="/index.php/Home/index/index/lang/zh-cn" class="zhongwen">中文</a> -->
    	<!-- <a href="/index.php/Home/index/index/lang/en-us" class="yingwen">ENGLISH</a> -->
    </div>
    </div>
</div>

<!--——————标题栏 结束——————-->

<!--——————内容 开始——————-->
<div class="content">
	<!--——————banner 开始——————-->
    <div class="banner">
    	<img src="/Public/img/<?php echo (L("lianxibanner")); ?>"/>
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
                	<li><a href="javascript:"><?php echo (L("lianxifangshi")); ?></a></li>
                	<li class="current"><a href="javascript:"><?php echo (L("kehuliuyan")); ?></a></li>
                </ul>
            </div>
            
            
        </div>
        
        
      <div class="ciRight gongsijianjie" >
       		<div class="cirHead clearfix">
            	<h3>联系方式</h3>
                <p>当前位置：<a href="/index.php/Home/Index/index.html">首页</a>><a href="/index.php/Home/Contact/index.html">联系我们</a>><a href="javascript:;">联系方式</a></p>
          	</div>
            <div class="text clearfix">
            	<img class="lianxiimg01" src="/Public/img/lianxiimg01.png" width="236" height="255">
            	<div class="center">
                	<p class="titleBig"><?php echo ($contact["l_name"]); ?></p>
                    <p>全国统一热线：<?php echo ($contact["l_hotline"]); ?> </p>
                    <p>电话：<?php echo ($contact["l_tel1"]); ?></p>
                    <p>传真：<?php echo ($contact["l_fax"]); ?> </p>
                    <p>公司地址：<?php echo ($contact["l_addr"]); ?></p>
                    <p>公司网址：<?php echo ($contact["l_web"]); ?></p>
                    <p>邮箱：<?php echo ($contact["l_email"]); ?></p>
                </div>
                <div class="right">
                	<img src="/Public/images/<?php echo ($contact["l_erweima"]); ?>" width='119' height='119'/>
                    <p>扫一扫 获取更多资讯</p>
                </div>
        </div>
          	<img src="/Public/img/lianxiimg03.png"/>
        </div>
        <!--ciRight-->
        
        <div class="ciRight qiyeweenhua current">
       		<div class="cirHead clearfix">
            	<h3><?php echo (L("tishi")); ?>：</h3>
               
          	</div>
            <div class="text">
            	<table width='100%'>
                        	<tr>
                        		<td height="50">&nbsp;</td>
                        	</tr>
                        	<tr>
                        		<td style="text-align:center;font-size:17px;">
                        			<?php echo ($message); ?>,时间过<span id="spantime">3</span>秒 自动跳转。<br/><br/>
                        			如果没有跳转，<a href="<?php echo ($jumpUrl); ?>">请点击这里</a>！<br/><br/>
                        		</td>
                        	</tr>
                        </table>
                        	<br/><br/><br/>
                <div class="tupian clearfix">
                	<img src="/Public/img/contactImg01.jpg" width="326" height="309">
                </div>
            </div> 
        </div>
        <!--ciRight-->

    </div>
    
</div>
<!--——————内容 结束——————-->

<!--——————footer2 结束——————-->

</body>
</html>