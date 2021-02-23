


<section class="contact mx-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 contact-data">
                <h4>Kancelaria Prawna RPMS<br>
                    Staniszewski & Wspólnicy</h4>
                <div class="contact-data_div">
                    <div>
                        ul. Polska 114<br>
                        Poznań 60-401
                    </div>
                    <div>
                        +48 61 307 09 91
                    </div>
                    <div>
                        kancelaria@rpms.pl
                    </div>
                </div>
            </div>
            <div class="col-lg-8 maps">
            <?php $location = get_field('mapa'); 
                if( !empty($location) ): ?>
                    <div class="acf-map">
                        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>