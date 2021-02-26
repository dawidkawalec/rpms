<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
 
?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

<?php get_template_part( 'footer-widget' ); ?>
<footer id="colophon" class="mx-3 mt-4 mb-3 site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>"
    role="contentinfo">
    <div class="container pt-3 pb-3">
        <div class="row">
            <div class="col-lg-3 info mb-3 mb-lg-0">
                <img src="/wp-content/themes/rpms/inc/assets/img/logo_rpms.png" alt="" class="logo">
                <p>Zapewniamy pełne wsparcie prawne w przygotowaniu formalnego zaplecza funkcjonowania podmiotów
                    gospodarczych świadczących usługi poprzez sieć internetową, w tym regulaminów, polityk
                    bezpieczeństwa, ogólnych warunków, formularzy i innych, a także w procesach windykacyjnych i
                    podatkowych.</p>
                <ul class="social m-0 mb-3 mb-lg-0 p-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 links pl-lg-5 mb-3 mb-lg-0">
                <span>Usługi prawne</span>
                <ul class="m-0 p-0">
                    <li><a href="#">Prawo</a></li>
                    <li><a href="#">Finanse i bankowość</a></li>
                    <li><a href="#">Własnośc intelektualna</a></li>
                    <li><a href="#">IT / E-commerce</a></li>
                </ul>
            </div>
            <div class="col-lg-3 links mb-3 mb-lg-0">
                <span>RPMS</span>
                <ul class="m-0 p-0">
                    <li><a href="#">Usługi prawne</a></li>
                    <li><a href="#">Zespół</a></li>
                    <li><a href="#">Aktualności</a></li>
                    <li><a href="#">Media o nas</a></li>
                    <li><a href="#">Zaufali nam</a></li>
                    <li><a href="#">Kontakt</a></li>
                </ul>
            </div>
            <div class="col-lg-3 links mb-3 mb-lg-0">
                <span>Przydatne linki</span>
                <ul class="m-0 p-0">
                    <li><a href="#">Dane osobowe (RODO)</a></li>
                    <li><a href="#">Regulamin strony</a></li>
                    <li><a href="#">Pliki cookie</a></li>

                </ul>
            </div>
        </div>

    </div>

    <div class="copy text-center">
        © Copyright 2020 - wszelkie prawa zastrzeżone RPMS
    </div>

</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
<style type="text/css">
.acf-map {
    width: 100%;
    height: 505px;
    border-radius: 10px;
    border: solid 10px #ffffff;
}

.acf-map img {
    max-width: inherit !important;
}
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn10ljCCiNC5wwfZCunru90Miw0nzmOAY" defer></script>
<script type="text/javascript">
(function($) {

    /**
     * initMap
     *
     * Renders a Google Map onto the selected jQuery element
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   jQuery $el The jQuery element.
     * @return  object The map instance.
     */
    function initMap($el) {

        // Find marker elements within map.
        var $markers = $el.find('.marker');

        // Create gerenic map.
        var mapArgs = {
            zoom: $el.data('zoom') || 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#e9e9e9"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 29
                }, {
                    "weight": 0.2
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 18
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 16
                }]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 21
                }]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#dedede"
                }, {
                    "lightness": 21
                }]
            }, {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#ffffff"
                }, {
                    "lightness": 16
                }]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "saturation": 36
                }, {
                    "color": "#333333"
                }, {
                    "lightness": 40
                }]
            }, {
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f2f2f2"
                }, {
                    "lightness": 19
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 17
                }, {
                    "weight": 1.2
                }]
            }]
        };
        var map = new google.maps.Map($el[0], mapArgs);

        // Add markers.
        map.markers = [];
        $markers.each(function() {
            initMarker($(this), map);
        });

        // Center map based on markers.
        centerMap(map);

        // Return map instance.
        return map;
    }

    /**
     * initMarker
     *
     * Creates a marker for the given jQuery element and map.
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   jQuery $el The jQuery element.
     * @param   object The map instance.
     * @return  object The marker instance.
     */
    function initMarker($marker, map) {

        // Get position from marker.
        var lat = $marker.data('lat');
        var lng = $marker.data('lng');
        var latLng = {
            lat: parseFloat(lat),
            lng: parseFloat(lng)
        };

        // Create marker instance.
        var marker = new google.maps.Marker({
            position: latLng,
            map: map
        });

        // Append to reference for later use.
        map.markers.push(marker);

        // If marker contains HTML, add it to an infoWindow.
        if ($marker.html()) {

            // Create info window.
            var infowindow = new google.maps.InfoWindow({
                content: $marker.html()
            });

            // Show info window when marker is clicked.
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });
        }
    }

    /**
     * centerMap
     *
     * Centers the map showing all markers in view.
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   object The map instance.
     * @return  void
     */
    function centerMap(map) {

        // Create map boundaries from all map markers.
        var bounds = new google.maps.LatLngBounds();
        map.markers.forEach(function(marker) {
            bounds.extend({
                lat: marker.position.lat(),
                lng: marker.position.lng()
            });
        });

        // Case: Single marker.
        if (map.markers.length == 1) {
            map.setCenter(bounds.getCenter());

            // Case: Multiple markers.
        } else {
            map.fitBounds(bounds);
        }
    }

    // Render maps on page load.
    $(document).ready(function() {
        $('.acf-map').each(function() {
            var map = initMap($(this));
        });
    });

})(jQuery);
</script>
</body>

</html>