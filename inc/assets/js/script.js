jQuery(function($) {

    // Add custom script here. Please backup the file before editing/modifying. Thanks

    // Run the script once the document is ready
    $(document).ready(function() {



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

});