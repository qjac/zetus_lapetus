$(document).ready(function() {
    var hamburger = $('#hamburger');
    var menu = $('.main-menu');
    menu.hide();
    document.querySelector( "#hamburger" ).addEventListener( "click", function(e) {
        e.preventDefault();
        this.classList.toggle( "is-active" );
        menu.fadeToggle('swing');
    });
    $.scrollify({
        section:".scroll",
        //sectionName:false,
        scrollSpeed:500,
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
    $(".scroll-to-footer").click(function(e) {
        e.preventDefault();
        $.scrollify.move("#footer");
    });
    var movementStrength = 5;
    var height = movementStrength / $(window).height();
    var width = movementStrength / $(window).width();
    $(".header").mousemove(function(e){
        var pageX = e.pageX - ($(window).width() / 2);
        var pageY = e.pageY - ($(window).height() / 2);
        var newvalueX = width * pageX * -1 - 25;
        var newvalueY = height * pageY * -1 - 50;
        $('.header').css("background-position", newvalueX+"px     "+newvalueY+"px");
    });
});