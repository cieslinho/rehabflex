<section class="banner section">
    <?php if ( isset( $attributes['img']['url'] ) ) : ?>
    <img class="banner__img" src="<?php echo esc_url( $attributes['img']['url'] ); ?>"
        alt="<?php echo esc_attr( $attributes['img']['alt'] ); ?>">
    <?php endif; ?>
    <div class="container">
        <div class="banner__content">

            <h3 class="banner__title">
                <?php echo $attributes['title']; ?>
            </h3>
            <p class="banner__description">
                <?php echo $attributes['description']; ?>
            </p>
            <a href="#kontakt" class="banner__btn">Wypożycz</a>
        </div>
    </div>
</section>