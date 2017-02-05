$(document).ready(function() {
    var hamburger = $('#hamburger');
    var menu = $('.main-menu');
    menu.hide();
    document.querySelector( "#hamburger" ).addEventListener( "click", function(e) {
        e.preventDefault();
        this.classList.toggle( "is-active" );
        if ($(window).width() < 480 || $(window).height() < 480) {
            //small screen, load other JS files
            menu.slideToggle('swing');
        }
        else {
            menu.fadeToggle('swing');
        }
    });
    if ( $( window ).width() > 480 ) {
        var movementStrength = 100;
        var height = movementStrength / $(window).height();
        var width = movementStrength / $(window).width();
        $("#Home").mousemove(function (e) {
            var pageX = e.pageX - ($(window).width() / 2);
            var pageY = e.pageY - ($(window).height() / 2);
            var newvalueX = width * pageX * -1 - 25;
            var newvalueY = height * pageY * -1 - 100;
            $('.header').css("background-position", newvalueX - 50 + "px " + newvalueY + "px");
        });
    }
});