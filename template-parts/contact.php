<section class="contact mx-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 contact-data">
                <span>Kancelaria Prawna RPMS<br>
                    Staniszewski & Wspólnicy</span>
                <div class="contact-data_div">
                    <div>
                        <img src="/wp-content/uploads/2021/04/lokalizacja.png" alt="">
                        <p>ul. Polska 114<br>
                            Poznań 60-401</p>
                    </div>
                    <div>
                        <img src="/wp-content/uploads/2021/04/telefon.png" alt="">
                        <p><a href="tel:+48613070991">+48 61 307 09 91</a></p>
                    </div>
                    <div>
                        <img src="/wp-content/uploads/2021/04/mail.png" alt="">
                        <p><a href="mailto:kancelaria@rpms.pl">kancelaria@rpms.pl</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 maps">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>



<style type="text/css">
/* Set a size for our map container, the Google Map will take up 100% of this container */
#map {
    position: absolute;
    left: 20px;
    right: 170px;
    /* top: 70px; */
    height: 540px;
    width: 100% !important;
    border-radius: 20px;
}

@media(max-width: 992px) {
    #map {
        position: relative;
        left: 0;
        right: 0;
        top: 0;
        height: 350px;
        width: 100% !important;
        border-radius: 20px;
        margin-top: 20px;
    }
}
</style>



<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn10ljCCiNC5wwfZCunru90Miw0nzmOAY"></script>



<script type="text/javascript">
// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 17,
        disableDefaultUI: true, // a way to quickly hide all controls
        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(52.42230187979576, 16.874971827248473),

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
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

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);


    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(52.42230187979576, 16.874971827248473),
        map: map,
    });


}
</script>