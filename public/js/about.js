/**
 * Created by Xiaoyu on 3/10/2015.
 */
$(function(){
    var currPage = 0;
    var top = 0;
    var scrolling = false, skills = false;
    if ($(".content")[0].addEventListener) {
        // IE9, Chrome, Safari, Opera
        $(".content")[0].addEventListener("mousewheel", MouseWheelHandler, false);
        // Firefox
        $(".content")[0].addEventListener("DOMMouseScroll", MouseWheelHandler, false);
    }
    // IE 6/7/8
    else $(".content").attachEvent("onmousewheel", MouseWheelHandler);

    function MouseWheelHandler(e) {

        // cross-browser wheel delta
        var e = window.event || e; // old IE support
        var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
        console.log(delta + " " + currPage);
        if(!scrolling){
            currPage = Math.min($(".content").length, Math.max(currPage + (delta > 0? -1 : 1), 0));
            scrolling = true;
            $(".content").animate({
                scrollTop:$(".content").height() * currPage, easing: "easeout"
            }, 750, 0, function(){scrolling = false});
        }

        if(!skills){
            $(".bargraph li ul li").each(function(index, element){
                switch(index % 2){
                    case 0:
                        $(this).css("background-color", "rgba(200,200,255, 0.5)");
                        break;
                    case 1:
                        $(this).css("background-color", "rgba(150,150,200, 0.5)");
                        break;
                }
                var val = $(this).attr("data-value") * 50;
                $(this).animate({
                    width: val,
                    opacity: 0.75
                }, 1000);
                $(this).mouseover(function(){
                    $(this).animate({
                        width: val + 25,
                        opacity: 1
                    }, 100);
                });
                $(this).mouseout(function(){
                    $(this).animate({
                        width: val,
                        opacity: 0.75
                    }, 100);
                });
                skills = true;
            });
        }
    }

})