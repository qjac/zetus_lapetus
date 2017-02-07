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
});