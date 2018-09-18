// JavaScript Document
$(function(){
		
		
		//banner图切换
		$('.bannerImg').append($( '.bannerImg li:eq(0)').clone(true));
		var num01=0;
		var length01;
		var timer01;
		function change(){
			if(num01==0){
				$('.bannerImg').css('left','0');
			}
			num01++;
			length01=-num01*100;
			if(num01>4){
				num01=0;
				length01=-5*100;
			}
			$('.bannerImg').stop().animate({'left':''+length01+'%'},500);
			$('.bar li').eq(num01).siblings().removeClass('current');
			$('.bar li').eq(num01).addClass('current');
		}
		timer01 = setInterval(function(){
			change();		
		},3000)
		
		$('.bannerImg li').hover(function(e) {
            clearInterval(timer01);
        },function(){
			clearInterval(timer01);
			timer01 = setInterval(function(){
				change();	
			},3000)
		});
		
		//小图标事件
		$('.bar li').each(function(index, element) {
			$(this).click(function(e) {
                clearInterval(timer01);
			   $(this).siblings().removeClass('current');
			   $(this).addClass('current');
			   $('.bannerImg').stop().animate({'left':-index*100+'%'},500);
			   num01=index;
			   timer01 = setInterval(function(){
					change();	
			  },3000)
            });
        });
		
		
		//合作企业gundong
		$('.parterImg').append($( '.parterImg img:eq(0),.parterImg img:eq(1),.parterImg img:eq(2),.parterImg img:eq(3),.parterImg img:eq(4),.parterImg img:eq(5)').clone(true));
		var num02=0;
		var length02;
		var timer02;
		function change02(){
			if(num02==0){
				$('.parterImg').css('left','0');
			}
			num02++;
			length02=num02*-200;
			if(num02>11){
				num02=0;
				length02=-2392;
			}
			$('.parterImg').stop().animate({'left':length02+'px'},500);
		}
		timer02 = setInterval(function(){
			change02();		
		},3000)
		
		$('.parterImg img').hover(function(e) {
            clearInterval(timer02);
        },function(){
			clearInterval(timer02);
			timer02 = setInterval(function(){
				change02();	
			},3000)
		});
		
		//图片详情画上去效果
		$('.imgShow ul li').hover(function(e) {
            $(this).find('.muText').css('display','none');
			$(this).find('.hoverDetail').css('display','block');
        },function(){
            $(this).find('.muText').css('display','block');
			$(this).find('.hoverDetail').css('display','none');
		});

		
	})
