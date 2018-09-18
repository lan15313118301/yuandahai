// JavaScript Document
$(function(){
	
	$('.nav ul li').mouseenter(function(e) {
		   $('.differ').removeClass('current');
		   $(this).siblings().css('background','');
		   $(this).css('background','url(/public/img/navBar.png) no-repeat 0 30px');
    }).mouseleave(function(e) {
        $('.differ').addClass('current');
		$(this).css('background','');
    });;
	
	
	//qiehuan tab栏切换
	$('.qiehuan ul li').click(function(e) {
        $(this).siblings().removeClass('current');
		$(this).addClass('current');
    });
	
	$('.imgShow .muxiang').css('display','block').siblings().css('display','none');
	
	$('.tabChange li').each(function(index, element) {
        $(this).click(function(e) {
            $('.imgShow ul').eq(index).css('display','block').siblings().css('display','none');
        });
    });
	
	//产品分类特效
	$(function(){
		$('..fenlei ul li').each(function(index, element) {
            $(this).click(function(e) {
                $(this).siblings().removeClass('current');
				$(this).addClass('current');
				$('.ciRight').eq(index).siblings().removeClass('current');
				$('.ciRight').eq(index).addClass('current');
            });
			
        });
		/*$('.fenlei ul li').click(function(e) {
            $(this).siblings().removeClass('current');
			$(this).addClass('current');
        });	*/
	})
	
	//招聘信息展开
	/*$('.text ul li .arrow').on("click",function(){
		if(!$(this).parent().find('.zhankai').is(":hidden")){
			$(this).parent().find('.zhankai').removeClass('current');

		}else{
			$(this).parent().find('.zhankai').addClass('current');	
		}	
	})*/
	
	
})