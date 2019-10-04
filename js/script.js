//change navbar background on scroll down and scroll up
// $(window).on("scroll", function() {
//     if ($(window).scrollTop()) {
//         $('nav').addClass("black")
//     } else {
//         $('nav').removeClass("black")
//     }
// })

//Ripple effect for buttons



$(function() {
    var ua = navigator.userAgent;
    if (ua.indexOf('iPhone') > -1 || ua.indexOf('iPad') > -1 || ua.indexOf('iPod') > -1) {
        var start = "touchstart";
        var move = "touchmove";
        var end = "touchend";
    } else {
        var start = "mousedown";
        var move = "mousemove";
        var end = "mouseup";
    }
    var ink, d, x, y;
    $(".ripplelink").on(start, function(e) {
        if ($(this).find(".inkripple").length === 0) {
            $(this).prepend("<span class='inkripple'></span>");
        }

        ink = $(this).find(".inkripple");
        ink.removeClass("animateripple");

        if (!ink.height() && !ink.width()) {
            d = Math.max($(this).outerWidth(), $(this).outerHeight());
            ink.css({ height: d, width: d });
        }

        x = e.originalEvent.pageX - $(this).offset().left - ink.width() / 2;
        y = e.originalEvent.pageY - $(this).offset().top - ink.height() / 2;

        ink.css({ top: y + 'px', left: x + 'px' }).addClass("animateripple");
    });
});








