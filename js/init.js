$(function() {
    $.scrollify({
        section:".scroll",
        //sectionName:false,
        scrollSpeed:1100,
        after:function(i) {}
    });
    $(".scroll-btn").click(function(e) {
        e.preventDefault();
        $.scrollify.next();
    });
    $(".scroll-to-top").click(function(e) {
        e.preventDefault();
        $.scrollify.move("#header");
    });
});
