//----------------------------------------Scroll products div with mouse scroll------------------------------------------
jQuery(function($) {
    $.fn.hScroll = function(amount) {
        amount = amount || 120;
        $(this).bind("DOMMouseScroll mousewheel", function(event) {
            var oEvent = event.originalEvent,
                direction = oEvent.detail ? oEvent.detail * -amount : oEvent.wheelDelta,
                position = $(this).scrollLeft();
            position += direction > 0 ? -amount : amount;
            $(this).scrollLeft(position);
            event.preventDefault();
        })
    };
});

// Change/Swap images
function change_img(image) {
    var container = document.getElementById($(image).attr("img"));
    container.src = image.src;
}
