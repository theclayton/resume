// Horizontal Timeline Scrolling
(function() {
    function scrollHorizontally(e) {
        e = window.event || e;
        var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
        document.getElementById('timeline').scrollLeft += (delta*40); // Multiplied by 40

        if (document.getElementById('timeline').scrollLeft > 0) {
            e.preventDefault();
        }

    }
    if (document.getElementById('timeline').addEventListener) {
        // IE9, Chrome, Safari, Opera
        document.getElementById('timeline').addEventListener("mousewheel", scrollHorizontally, false);
        // Firefox
        document.getElementById('timeline').addEventListener("DOMMouseScroll", scrollHorizontally, false);
    } else {
        // IE 6/7/8
        document.getElementById('timeline').attachEvent("onmousewheel", scrollHorizontally);
    }
})();





// jQuery
$(function(){


});
