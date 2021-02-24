<?php
/**
 * Template part for O kancelari
 * 
 *
 */

?> 


<section class="about mt-10">
    <div class="container">
    <div class="row row-title">
            <h3>Kancelaria Prawna <strong>RPMS</strong><br />
            Staniszewski & Wspólnicy</h3>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row-content p-4 p-lg-6">
            <?php if ( $opis_kancelaria = get_field( 'opis_kancelaria' ) ) : ?>
                <?php echo $opis_kancelaria; ?>
            <?php endif; ?>

            <div class="row-content__cta mt-5">
                <h4>Skontaktuj się i sprawdź<br>
                    w jaki sposób możemy Ci pomóc!</h4>
                    <a href="#">Napisz do nas</a>
            </div>
            </div>
        </div>
    </div>
    </div>
</section>