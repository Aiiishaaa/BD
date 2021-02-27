!(function($) {
    "use strict";

    // Preloader
    $(window).on('load', function() {
        if ($('#preloader').length) {
            $('#preloader').delay(100).fadeOut('slow', function() {
                $(this).remove();
            });
        }
    });

    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });

    $('.back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
        return false;
    });

    // Menu list isotope and filter
    $(window).on('load', function() {
        var menuIsotope = $('.menu-container').isotope({
            itemSelector: '.menu-item',
            layoutMode: 'fitRows'
        });

        $('#menu-flters li').on('click', function() {
            $("#menu-flters li").removeClass('filter-active');
            $(this).addClass('filter-active');

            menuIsotope.isotope({
                filter: $(this).data('filter')
            });
            aos_init();
        });
    });


    // Evenements carousel (uses the Owl Carousel library)
    $(".evenements-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        items: 1
    });

    // Temoignages carousel 
    $(".temoignages-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        autoplayTimeout: 6000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            900: {
                items: 3
            }
        }
    });

    // Init AOS
    function aos_init() { AOS.init({ duration: 1000, once: true }); }
    $(window).on('load', function() {
        aos_init();
    });

})(jQuery);