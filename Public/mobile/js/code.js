/*===========================================================================华丽丽的分割线====================================================================================*/


/**
 * name   :   首页焦点图滚动效果
 * method :   $.banner();   
 */
(function ($) {
    $.fn.banner = function () {
        this.each(function () {
            var $flipsnap = $(this),
            $viewport = $flipsnap.parents(".viewport"),
            $items = $flipsnap.find(".item"),
            $pointer = $(".pointer");

            $viewport.css("width", $items.width());
            $flipsnap.css("width", $items.width() * $items.length);
            $items.each(function () {
                $pointer.append("<span></span>");
                if(typeof $(this).find("img").attr("txtDes")!="undefined"){
                    $(this).find("img").after('<div class="txt">' + $(this).find("img").attr("txtDes") + '</div>');
                }
            });

            var $pointerSpan = $('.pointer span');



            var flipsnap = Flipsnap($(this)[0], {
                distance: parseInt($viewport.css("width").replace("px", ""))
            });

            var mark = 0;

            var _timeMark = window.setInterval(function () {
                animate();
            }, 5000);

            $pointerSpan.eq(flipsnap.currentPoint).addClass("current");

            flipsnap.element.addEventListener('fstouchstart', function (ev) {
                window.clearInterval(_timeMark);
            }, false);

            flipsnap.element.addEventListener('fstouchend', function (ev) {
                _timeMark = window.setInterval(function () {
                    animate();
                }, 5000);
            }, false);

            flipsnap.element.addEventListener('fspointmove', function () {
                $pointerSpan.filter('.current').removeClass('current');
                $pointerSpan.eq(flipsnap.currentPoint).addClass('current');
            }, false);



            //来回滚动
            //function animate() {
            //    if (flipsnap.hasNext() && !flipsnap.hasPrev()) {
            //        // do something  
            //        flipsnap.toNext();
            //        mark = 0;
            //    }
            //    else if (flipsnap.hasNext() && flipsnap.hasPrev() && mark == 0) {
            //        flipsnap.toNext();
            //    }
            //    else if (flipsnap.hasNext() && flipsnap.hasPrev() && mark == -1) {
            //        flipsnap.toPrev();
            //    }
            //    else if (flipsnap.hasPrev() && !flipsnap.hasNext()) {
            //        flipsnap.toPrev();
            //        mark = -1;
            //    }
            //}

            //重复滚动
            function animate() {
                if (flipsnap.hasNext() && !flipsnap.hasPrev()) {
                    // do something  
                    flipsnap.toNext();
                }
                else if (flipsnap.hasNext() && flipsnap.hasPrev()) {
                    flipsnap.toNext();
                }
                else if (flipsnap.hasPrev() && !flipsnap.hasNext()) {
                    flipsnap.moveToPoint(0);
                }
            }

        });
        
    }
})(jQuery);
