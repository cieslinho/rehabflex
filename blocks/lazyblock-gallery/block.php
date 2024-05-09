<section class="gallery section" id="galeria">
    <div class="container">
        <div class="section-titles section-titles-left">
            <h2 class="section-title">Galeria</h2>
            <p class="section-decoration">Sprawdź naszą galerię zdjęć</p>
        </div>
        <div class="swiper gallery__swiper">
    <div class="swiper-wrapper gallery__boxes">
    
    <?php foreach( $attributes['box'] as $box ): ?>
      <div class="swiper-slide gallery__box">
      <?php if ( isset( $box['img']['url'] ) ) : ?>
  <img class="gallery__img" src="<?php echo esc_url( $box['img']['url'] ); ?>" alt="<?php echo esc_attr( $box['img']['alt'] ); ?>">
<?php endif; ?>
      </div>
      <?php endforeach; ?>
     
     
    </div>
    <div class="swiper-button-next gallery__next"></div>
    <div class="swiper-button-prev gallery__prev"></div>
    <div class="swiper-pagination gallery__pagination"></div>
  </div>
    </div>
</section>