<?php
  /**
   *
   Main Slider -> main_slider
    - Item Slider (repater) -> main_slider__item
      - Imagen de fondo -> main_slider__image
      - Imagen de fondo en mobile (opcional) -> main_slider__image_mobile
      - Texto -> main_slider__body
      - Vinculo -> main_slider__cta
   */

   $main_slider = get_field('main_slider');

  if ($main_slider) : ?>
  <section class="main-slider">
    <div class="js-slider">
      <?php
        while(have_rows('main_slider')): the_row();
        $ms_image = get_sub_field('main_slider__desktop');
        $ms_image_mobile = get_sub_field('main_slider__mobile');
        $ms_link = get_sub_field('main_slider__link');
        $ms_text = get_sub_field('main_slider__text');
      ?>
      <div class="main-slider__item">
        <?php if ($ms_link) : ?>
          <a href="<?php echo $ms_link['url']; ?>">
        <?php endif; ?>
        <picture class="main-slider__image">
          <?php if ($ms_image_mobile) : ?>
            <source media="(max-width: 799px)" srcset="<?php echo esc_url($ms_image_mobile['url']); ?>">
          <?php endif;?>
          <?php if ($ms_image) : ?>
            <img src="<?php echo esc_url($ms_image['url']); ?>" alt="<?php echo esc_attr($ms_image['alt']); ?>"/>
          <?php endif; ?>
        </picture>
        <?php if ($ms_text): ?>
          <div class="main-slider__caption">
            <h2 class="main-slider__title">
              <?php echo $ms_text; ?>
            </h2>
            <div>
              <span class="main-slider__cta">
                <?php echo $ms_link['title']; ?>
              </span>
            </div>
          </div>
        <?php endif; ?>
        <?php if ($ms_link) : ?>
          </a>
        <?php endif; ?>
      </div>
      <?php
      endwhile; ?>
    </div>
    <div class="main-slider__pagination__arrows">
      <div class="main-slider__pagination__prev js_gn_carousel__prev_arrow">
        <span class="main-slider__pagination__prev-icon">arrow_back</span>
      </div>
      <div class="main-slider__pagination__next js_gn_carousel__next_arrow">
        <span class="main-slider__pagination__next-icon">arrow_forward</span>
      </div>
    </div>
    <div class="main-slider__pagination js_gn_carousel_controls container">
      <div class="main-slider__pagination__dots js_gn_carousel__dots"></div>
    </div>
  </section>
<?php
  endif;
