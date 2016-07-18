$(document).ready(function () {
    var documentEl = $(window);
    var currScrollPos = documentEl.scrollTop();
    var secaoDois = "#section_dois";
        
    documentEl.on('scroll', function () {
        
        if ($(this).scrollTop() >= ($(secaoDois).offset().top - 200)) {
//            alert(secaoDois);
            $('[title=POTEFRANGO]').css({
                "transition": "transform 2s ease-in-out, opacity 2s ease-in-out",
                "-o-transition": "transform 2s ease-in-out, opacity 2s ease-in-out",
                "-webkit-transition": "transform 2s ease-in-out, opacity 2s ease-in-out",
                "-moz-transition": "transform 2s ease-in-out, opacity 2s ease-in-out",
                "transform": "translateX(-420px) translateY(-50px)", "opacity": "1"
            });
        } else {
            $('[title=POTEFRANGO]').css({"transform": "initial", "opacity": "0"});
        }

        /* =============================================================================
         * AJUSTE MENU FIXO            
         * ============================================================================= */
        if ($(window).scrollTop() > $('#section_dois').offset().top - 200) {
            $('header').addClass('header');
        } else {
            $('header').removeClass('header');
        }
    });
});