<section class="pricing section" id="cennik">
    <div class="container">
        <div class="section-titles section-titles-left">
            <h2 class="section-title">Cennik</h2>
            <p class="section-decoration">Poznaj nasze ceny</p>
        </div>

        <div class="pricing__boxes">
            <div class="pricing__box">
            <?php if ( isset( $attributes['img1']['url'] ) ) : ?>
  <img class="pricing__img" src="<?php echo esc_url( $attributes['img1']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['img1']['alt'] ); ?>">
<?php endif; ?>
                <p class="pricing__term">
                <?php echo $attributes['term1']; ?></span>
                </p>
                <p class="pricing__price"> <?php echo $attributes['price1']; ?></p>
                <a href="tel:+48501483238" class="pricing__btn">wybieram</a>
            </div>
            
            <div class="pricing__box active">
                <?php if ( isset( $attributes['img2']['url'] ) ) : ?>
  <img class="pricing__img" src="<?php echo esc_url( $attributes['img2']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['img2']['alt'] ); ?>">
<?php endif; ?>
                <p class="pricing__term">
                <?php echo $attributes['term2']; ?>
                </p>
                <p class="pricing__price"><?php echo $attributes['price2']; ?></p>
               
                <a href="tel:+48501483238" class="pricing__btn">wybieram</a>
                <span class="pricing__span">polecany pakiet</span>
            </div>
            <div class="pricing__box">
            <?php if ( isset( $attributes['img3']['url'] ) ) : ?>
  <img class="pricing__img" src="<?php echo esc_url( $attributes['img3']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['img3']['alt'] ); ?>">
<?php endif; ?>
                <p class="pricing__term">
                <?php echo $attributes['term3']; ?>
                </p>
                <p class="pricing__price"><?php echo $attributes['price3']; ?></p>
                <a href="tel:+48501483238" class="pricing__btn">wybieram</a>
            </div>
        </div>
    </div>
</section>