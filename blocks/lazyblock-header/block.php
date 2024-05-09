<header class="header">

    <div class="header__boxes">
        <div class="header__box header__box-left">
            <div class="swiper mySwiper header__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php if ( isset( $attributes['img']['url'] ) ) : ?>
                        <img class="header__img" src="<?php echo esc_url( $attributes['img']['url'] ); ?>"
                            alt="<?php echo esc_attr( $attributes['img']['alt'] ); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="swiper-slide">
                        <?php if ( isset( $attributes['img2']['url'] ) ) : ?>
                        <img class="header__img" src="<?php echo esc_url( $attributes['img2']['url'] ); ?>"
                            alt="<?php echo esc_attr( $attributes['img2']['alt'] ); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="swiper-slide">
                        <?php if ( isset( $attributes['img3']['url'] ) ) : ?>
                        <img class="header__img" src="<?php echo esc_url( $attributes['img3']['url'] ); ?>"
                            alt="<?php echo esc_attr( $attributes['img3']['alt'] ); ?>">
                        <?php endif; ?>
                    </div>

                </div>
                <!-- <div class="swiper-button-next header__button header__next"></div>
                <div class="swiper-button-prev header__button header__prev"></div> -->
                <div class="swiper-pagination header__pagination"></div>
            </div>
        </div>
        <div class="header__box header__box-right">
            <div class="header__texts">


                <h1 class="header__title">
                    <?php echo $attributes['title']; ?>
                </h1>
                <p class="header__text">
                    <?php echo $attributes['text']; ?>
                </p>
                <a href="tel:+48501483238" class="header__btn">zadzwoń</a>
            </div>
            <div class="header__form">
                [contact-form-7 id="c6912e4" title="Header Form"]
            </div>

        </div>
    </div>

</header>