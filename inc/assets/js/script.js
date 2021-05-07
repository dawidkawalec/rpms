jQuery(function($) {

    // Add custom script here. Please backup the file before editing/modifying. Thanks

    // Run the script once the document is ready
    $(document).ready(function() {





        $('header .search .icon').on('click', function() {
            $('header .search-content').toggle();
        });


        $('#prawo-pracy #alllogos').on('click', function() {
            $('#prawo-pracy .logotype').toggleClass('viewall');
        });




        $('.site-hamburger').click(function() {
            $('#nav-icon3').toggleClass('open');
            $('header .navbar').toggleClass('show');
            // $('div#main-nav').toggleClass('show');
        });



        if (jQuery(window).width() < 992) {
            jQuery(".specialization .nav-pills .nav-link").click(function() {
                jQuery('html, body').animate({
                    scrollTop: jQuery(".tab-content").offset().top - 100
                }, 600);
            });
        }
        if (jQuery(window).width() > 1199) {
            jQuery('.megamenudk .dropdown-menu').addClass('show');
        }
        if (jQuery(window).width() < 1199) {
            jQuery('.megamenudk > a').next().hide();

            // jQuery('.megamenudk .dropdown-menu').addClass('jebacbiede');
            jQuery('.megamenudk .dropdown-menu .nodrops').on('click', function() {
                $(this).parent().toggleClass('open');
                // $(this).parent().addClass('jebackaczynskiegoijegokotatez');
                // $(this).parent().addClass('show');
            })

            jQuery('.megamenudk a').on('click', function() {
                $(this).toggleClass('rotate');
                $(this).parent().parent().addClass('show');
            });

            jQuery('.dropdown.menu-item-has-children .dropdown.menu-item-has-children').on('click', function() {
                $(this).find('.dropdown-menu').toggle();

                // jQuery('.dropdown-menu.show').removeClass('open');
                // jQuery(this).parent().find('.dropdown-menu').toggle().toggleClass('open');
                // jQuery(this).parent().find('.dropdown-menu').toggleClass('open');

                // if (jQuery(this).parent().find('.dropdown-menu').toggle().addClass('open')) {

                // }
            });

            jQuery('.megamenudk > a').on('click', function() {
                jQuery(this).next().toggle();
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
            autoHeight: true
        })

        jQuery('.articles-single-post .owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            autoplay: false,
            items: 1,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                // breakpoint from 768 up
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
            },

        })

        // var setMinHeight = function(minheight = 0) {
        //     jQuery('.articles-single-post .owl-carousel').each(function(i, e) {
        //         var oldminheight = minheight;
        //         jQuery(e).find('.owl-item').each(function(i, e) {
        //             minheight = jQuery(e).height() > minheight ? jQuery(e).height() : minheight;
        //         });
        //         jQuery(e).find('.owl-item').css("min-height", minheight + "px");
        //         minheight = oldminheight;
        //     });
        // };

        // setMinHeight();

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


        if ($('#fixed-nav-scrol').hasClass('fixed-nav-scroll')) {
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
        }
        $('.fixed-nav-scroll span').on('click', function() {
            $('.fixed-nav-scroll').toggleClass('show');
        });

        if ($(window).width() < 993) {
            $('.fixed-nav-scroll ul li a').on('click', function() {
                $('.fixed-nav-scroll').removeClass('show');
            });
        }




        $(document).on('click', '.fixed-nav-scroll ul li a[href^="#"]', function(e) {
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

        $(document).on('click', '.single-post .content-list .table-of-content a[href^="#"]', function(e) {
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
            var pos = $id.offset().top - 100

            // animated top scrolling
            $('body, html').animate({ scrollTop: pos });
        });


        var minimized_elements = $('.opinion .item .item-content .subhead');

        minimized_elements.each(function() {
            var t = $(this).text();
            if (t.length < 250) return;

            $(this).html(
                t.slice(0, 250) + '<span>... </span>' + '<span style="display:none;" class="noshow-text">' + t.slice(100, t.length)
            );

        });

        $('.opinion .item .item-content .readmore').on('click', function() {
            $(this).parent().find('.subhead span.noshow-text').toggle();
            $(this).html(($(this).html() == 'Zwiń <img class="ml-2" src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt="">') ? 'Rozwiń <img class="ml-2" src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt="">' : 'Zwiń <img class="ml-2" src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt="">').fadeIn();
        })


        /*
                var eqh = $('.owl-stage' ).height();
                $('.articles-single-post .row-articles .single').css('min-height',eqh);
                
                $( window ).resize(function() {
                var eqh2 = $('.owl-stage' ).height();
                $('.articles-single-post .row-articles .single').css('min-height',eqh2);
                });
               */
    });



});