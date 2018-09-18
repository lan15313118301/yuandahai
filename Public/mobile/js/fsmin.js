$(document).ready(function () {
    /*搜索框*/
    $("a.i2").click(function () {
        if ($(this).hasClass("i2")) {
            $(this).removeClass("i2").addClass("i2-1");
            $(".header-search").slideDown("100");
            //返回顶部
            document.documentElement.scrollTop = document.body.scrollTop = 0;

        } else {
            $(this).removeClass("i2-1").addClass("i2");
            $(".header-search").slideUp("100");
        }
        $("a.i5-1").removeClass("i5-1").addClass("i5");
        $(".footprint").slideUp("100");

        // setTimeout(function(){
        // 	$('section div:first').addClass('pd_top');
        // },1000);

    }
		)
	$("a.i5").click(
		function () {
			if ($(this).hasClass("i5")) {
				$(this).removeClass("i5").addClass("i5-1");
			} else {
				$(this).removeClass("i5-1").addClass("i5");
			}
			$(".footprint").toggleClass("zuji_atv")
		}
		)
    var swiper = new Swiper('.swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 5,
        paginationClickable: true,
        spaceBetween: 10,
    });



    /*大图轮播js*/
    $(".bannerControl").banner()
    /*侧边导航*/
    $("#right-nav").panelslider({
        side: "right",
        clickClose: true,
        duration: 200,
    });
    $("#close-panel-bt").click(function () {
        $.panelslider.close();
    });
    $("#right-nav").click(function () {
        $(".zhezhao").fadeIn("100");
    })
    $("#close-panel-bt").click(function () {
        $(".zhezhao").fadeOut("100");
    });
    /*侧边导航伸缩*/
    $(".right-nav-li-a").click(function () {
        var li_b = $(this).children("b:last");
        if (li_b.hasClass("right-nav-icon3")) {
            li_b.removeClass("right-nav-icon3");
            $(this).parent("li").next(".right-nav-li-content").slideUp("100");
        } else {
            $(".right-nav-icon2").removeClass("right-nav-icon3");
            $(this).parent("li").siblings(".right-nav-li-content").slideUp("100");
            $(this).children("b:last").toggleClass("right-nav-icon3");
            $(this).parent("li").next(".right-nav-li-content").slideToggle("100");
        }
    })
    $(".li_prdlist").click(function () {
        var ri = $(this).children(".right-nav-icon4");
        if (ri.hasClass("atv_r4")) {
            ri.removeClass("atv_r4");
            $(".li_prdlist2").slideUp("100");
        } else {
            $(".right-nav-icon4").removeClass("atv_r4");
            $("li.li_prdlist2").slideUp("100");
            $(this).children(".right-nav-icon4").toggleClass("atv_r4");
            $(this).next(".li_prdlist2").slideToggle("100");
        }

    })
    $('.i6').click(function (){
        $('body').css("overflow-y","hidden");
    })
    $('.zhezhao').click(function (){
        $('body').css("overflow-y","auto");
    })
    /*通栏底部*/
    var mySwiper = new Swiper('.swiper-container2', {
        pagination: '.pagination',
        paginationClickable: true,
        freeMode: true,
        freeModeFluid: true
    })
    $('.arrow-left').on('click', function (e) {
        e.preventDefault()
        mySwiper.swipePrev()
    })
    $('.arrow-right').on('click', function (e) {
        e.preventDefault()
        mySwiper.swipeNext()
    })
    /*分享微信*/
    $('.a_quanju2_div').click(function  (  ) {
            $(".zhezhao,.wx4").fadeIn("100");
    })
    $(".a_prcx2").click(function () {
        $(".zhezhao,.wx2").fadeIn("100");
    })
    $(".a_olay").click(function () {
        $(".zhezhao,.wx1").fadeIn("100");
    })
    $(".wx-c").click(function () {
        $(".wx,.zhezhao").fadeOut("100");
    })
    $(".zhezhao").click(function () {
        $(".wx,.zhezhao").fadeOut("100");
    })


    /*产品筛选*/
    var la = $(".screening").find("a");
    var ctn = $(".screening-content");
    var la0 = la.eq(0);
    var la1 = la.eq(1);
    for (var i = 0; i < la.length; i++) {
        la[i].id = i;
    }
    la.click(function () {
        if (this.id == "0") {
            la0.toggleClass("sc-a2");
            la0.find("b:last").toggleClass("screening-icon2");
            ctn.eq(1).slideUp("100");
            ctn.eq(0).slideToggle("100");
            la1.removeClass("sc-a2");
            la1.find("b:last").removeClass("screening-icon2")
        } else {
            la1.toggleClass("sc-a2");
            la1.find("b:last").toggleClass("screening-icon2");
            ctn.eq(0).slideUp("100");
            ctn.eq(1).slideToggle("100");
            la0.removeClass("sc-a2");
            la0.find("b:last").removeClass("screening-icon2")

        }
    })
    /*二级筛选*/
    $(".screening-content").find(".sc-a").click(function () {
        var li_b = $(this).children("b");
        if (li_b.hasClass("sc-icon2")) {
            $(this).children("b").removeClass("sc-icon2");
            $(this).parent("li").next(".sc-li2").slideUp("100");
        } else {
            $(this).parent("li").siblings(".sc-li2").slideUp("100");
            $(this).parent("li").siblings(".sc-li").children(".sc-a").children("b").removeClass("sc-icon2");
            $(this).children("b").toggleClass("sc-icon2");
            $(this).parent("li").next(".sc-li2").slideToggle("100");
        }

    })
    /*产品需求系列*/
    $("li.pr-li2").click(function () {
        $(this).next("ul").slideToggle("100");
    })
    /*产品详细页-产品轮播*/
    var pizhanshi = new Swiper('.sctn3', {
        pagination: '.pagination3',
        paginationClickable: true,
        moveStartThreshold: 100
    })

    /**
	 * 弹出隐藏
	 */
    $(".btn_show").click(function () {
        $(".zhezhao").fadeIn("100")
        $(".info_show").fadeIn("200")
    })

    $(".btn_close").click(function () {
        $(".zhezhao,.info_show").fadeOut("100")
    })
    /*防伪页面弹出信息*/
    // $("#check").click(function() {
    // 	$(".zhezhao").fadeIn("100")
    // 	$(".zz-info").fadeIn("200")
    // })

    // $(".zhezhao,.zz-close").click(function() {
    // 		$(".zhezhao,.zz-info").fadeOut("100")
    // 	})
    // 	/*2*/
    // $("#check2").click(function() {
    // 	$(".zhezhao").fadeIn("100")
    // 	$(".zz-info2").fadeIn("200")
    // })

    // $(".zhezhao,.zz-close2").click(function() {
    // 		$(".zhezhao,.zz-info2").fadeOut("100")
    // 	})
    // 	/*2*/
    // 	/*3*/
    // $("#check3").click(function() {
    // 	$(".zhezhao").fadeIn("100")
    // 	$(".zz-info3").fadeIn("200")
    // })

    // $(".zhezhao,.zz-close3").click(function() {
    // 		$(".zhezhao,.zz-info3").fadeOut("100")
    // 	})
    /*3*/
    /*防伪页面弹出信息-End*/




    /*试用中心关闭*/
    $(".zhezhao,.s-close").click(function () {
        $(".zhezhao,.success").fadeOut("100")
    })
    /*肌肤测试-线下遮罩*/
    $(".s-close").click(function () {
        $(".zhezhao,.success2").fadeOut("100");
    })
    /*10个产品明星*/
    $(".s-info").find(".i-liyou").click(function () {

        $(this).find(".l3").toggleClass("l-atv");
        //		$(this).next("li").slideToggle("10");
        $(this).next("li").toggleClass("l-atv2");
    })

})
/*添加边框*/
var productNum = $('.p-product li').length;
if (productNum % 2 == 0) {

} else {
    $('.p-product li').eq(-2).addClass('last');
};


/*增加圈圈*/
$(".div2,.div3,.div4,.div5,.div7").find("li").click(function () {
    $(".div2,.div3,.div4,.div5,.div7").find("li").removeClass("li-atv");
    $(this).toggleClass("li-atv");
})
/*第6题*/
$(".div6").find("li").click(function () {
    $(this).parent("li").toggleClass("li-atv");
})
/*美肌百科-切换*/
var a2 = $(".li-a2");
a2.click(function () {
    a2.each(function (i) {
        a2[i].id = i;
    })
    var va = $(this).attr("id");
    a2.removeClass("li-a22");
    $(this).addClass("li-a22");
    $(".bty-img").hide().eq(va).show();
    $(".b-main").hide().eq(va).show();
})
///*下一步*/
//var val = 11;
//var numVal = 0;
//$(".a22.a222").click(function () {
//	numVal += 1;
//	if ($("div.div6").children("ul").find("li.li-atv").length > 3) {

//		$(".a22.a222").removeClass("a222");
//		alert("最多只能选3项噢！")
//	} else {
//		val += 11;
//		$(".t3").removeClass("t" + numVal + numVal)
//		$(".t3").addClass("t" + val);//t11 t22 t33
//		$(this).parent().parent("div").hide(100);
//		$(this).parent().parent().next("div").show(100);
//	}
//})

///*上一步*/
//$(".a11.a111").click(function () {
//	$(".t3").removeClass("t" + (numVal + 1) + (numVal + 1));
//	if ($(".div6").children("ul").children(".li-atv").length > 3) {
//		$(".a22.a222").removeClass("a222");
//		alert("最多只能选3项噢！")
//	} else {
//		val -= 11;
//		//alert("t"+(numVal+1)+(numVal+1))
//		$(".t3").removeClass("t" + (numVal + 1) + (numVal + 1));
//		$(".t3").addClass("t" + val);
//		$(this).parent().parent("div").hide(100);
//		$(this).parent().parent().prev("div").show(100);
//		numVal -= 1;
//	}


//})

/*确认照片*/
//$(".a-conf").click(function () {
//	$(".tx3").addClass("tx3-atv");
//	$(".tx4").fadeIn("100", function () {
//		doProgress();
//		jdt2();
//		jdt3();
//	});
//})

/*验证码*/
var wait = 60;
function time(o) {
    if (wait == 0) {
        o.removeAttribute("disabled");
        o.value = "发送验证码";
        o.style.background = "#a59867";
        o.style.color = "#000000";
        wait = 60;
    } else {
        o.setAttribute("disabled", true);
        o.value = "重新发送(" + wait + ")";
        o.style.background = "#6a6969";
        o.style.color = "#FFFFFF";
        wait--;
        setTimeout(function () {
            time(o)
        },
            1000)
    }
}
//document.getElementById("btn_yzm").onclick = function () { time(this); }
///*肌肤测试进度条1*/
//var i = 0;
//function doProgress() {
//	if (i > 100) {
//		return;
//	}

//	if (i <= 100) {
//		setTimeout("doProgress()", 20);
//		SetProgress(i);
//		i++;
//	}
//}

//function SetProgress(progress) {
//	if (progress) {
//		$(".jd > span").css("width", String(progress) + "%");
//		$(".feng").html(String(progress) + "分");
//	}
//}
///*肌肤测试进度条2*/
//var j = 0;

//function jdt2() {
//	if (j > 100) {
//		return;
//	}

//	if (j <= 90) {
//		setTimeout("jdt2()", 30);
//		SetProgress2(j);
//		j++;
//	}
//}

//function SetProgress2(progress) {
//	if (progress) {
//		$(".jd2 > span").css("width", String(progress) + "%");
//		$(".feng2").html(String(progress) + "分");
//	}
//}
///*肌肤测试进度条3*/
//var j = 0;

//function jdt3() {
//	if (j > 100) {
//		return;
//	}

//	if (j <= 85) {
//		setTimeout("jdt3()", 50);
//		SetProgress3(j);
//		j++;
//	}
//}

//function SetProgress3(progress) {
//	if (progress) {
//		$(".jd3 > span").css("width", String(progress) + "%");
//		$(".feng3").html(String(progress) + "分");
//	}
//}