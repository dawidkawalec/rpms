jQuery(function($) {

    // Add custom script here. Please backup the file before editing/modifying. Thanks

    // Run the script once the document is ready
    $(document).ready(function() {

        $('header .search .icon').on('click', function() {
            $('header .search-content').toggle();
        });




      


        $('.site-hamburger').click(function() {
            $('#nav-icon3').toggleClass('open');
            $('header .navbar').toggle();
            // $('div#main-nav').toggleClass('show');
        });



        if (jQuery(window).width() < 992) {
            jQuery(".specialization .nav-pills .nav-link").click(function() {
                jQuery('html, body').animate({
                    scrollTop: jQuery(".tab-content").offset().top - 100
                }, 600);
            });
        }
        if (jQuery(window).width() < 1199) {
            jQuery('.megamenudk > a').next().hide();
            jQuery('.megamenudk .dropdown-menu.show .nodrops a').on('click', function() {
                jQuery(this).parent().find('.dropdown-menu').toggleClass('show-mobile');
            });
            jQuery('.megamenudk > a').on('click', function() {
                jQuery(this).next().toggle();
            });
            // jQuery(".megamenudk>.dropdown-menu").addClass('show-mobile');
            // jQuery(".megamenudk>.dropdown-menu").removeClass('show');
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


        window.onscroll = function() { myFunction() };

        // Get the navbar
        var navbar = document.getElementById("fixed-nav-scrol");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }




          $(document).on('click', 'a[href^="#"]', function(e) {
            // target element id
            var id = $(this).attr('href');

            // target element
            var $id = $(id);
            if ($id.length === 0) {
                return;
            }

            // prevent standard hash navigation (avoid blinking in IE)
            e.preventDefault();

            // top position relative to the document
            var pos = $id.offset().top - 200

            // animated top scrolling
            $('body, html').animate({ scrollTop: pos });
        });
    });

});