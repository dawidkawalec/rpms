jQuery(function($) {

    // Add custom script here. Please backup the file before editing/modifying. Thanks

    // Run the script once the document is ready
    $(document).ready(function() {

      
        
 
        if (jQuery(window).width() < 992) {
            jQuery(".specialization .nav-pills .nav-link").click(function() {
                jQuery('html, body').animate({
                    scrollTop: jQuery(".tab-content").offset().top - 100
                }, 600);
            });
        }


        jQuery('.faq .accordion .card').on('click', function() {
            jQuery('.faq .accordion .card').removeClass('show');
            jQuery(this).addClass('show');
        })


        jQuery('.teams .owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: false,
            items: 1,

        })

        var owl2 = $('.teams .owl-carousel');
        owl2.owlCarousel();
        // Go to the next item
        $('.teams .row-nav .next').click(function() {
                owl2.trigger('next.owl.carousel');
            })
            // Go to the previous item
        $('.teams .row-nav .prev').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl2.trigger('prev.owl.carousel', [300]);
        })



        jQuery('.opinion .owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: false,
            items: 1,

        })

        var owl = $('.opinion .owl-carousel');
        owl.owlCarousel();
        // Go to the next item
        $('.opinion .row-nav .next').click(function() {
                owl.trigger('next.owl.carousel');
            })
            // Go to the previous item
        $('.opinion .row-nav .prev').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel', [300]);
        })

        jQuery('.logotype .owl-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4,
                    margin: 50,
                },
                1000: {
                    items: 6
                }
            }
        })

    });

    // Run the script once the window finishes loading
    $(window).load(function() {

    });


    if (jQuery(window).width() > 769) {
        jQuery(".elementor-1319 .elementor-element.elementor-element-b961f32 > .elementor-widget-container > .jet-tabs > .jet-tabs__control-wrapper > .jet-tabs__control").click(function() {
            jQuery('html, body').animate({
                scrollTop: jQuery(".jet-tabs__content-wrapper").offset().top - 100
            }, 2000);
        });
    }
    jQuery(window).on('resize', function() {
        var win = jQuery(this); //this = window
        if (win.width() < 769) {
            jQuery(".elementor-1319 .elementor-element.elementor-element-b961f32 > .elementor-widget-container > .jet-tabs > .jet-tabs__control-wrapper > .jet-tabs__control").click(function() {
                jQuery('html, body').animate({
                    scrollTop: jQuery(".jet-tabs__content-wrapper").offset().top - 100
                }, 2000);
            });
        }
    });

});