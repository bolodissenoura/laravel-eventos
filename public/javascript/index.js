$(window).scroll(function() {     
    var scroll = $(window).scrollTop();
    if (scroll > 0) {
        $("#header").addClass("shadow-header");
    }
    else {
        $("#header").removeClass("shadow-header");
    }
});