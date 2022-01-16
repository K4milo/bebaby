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
        $ms_text = get_sub_field('main_slider__text');
        $link = get_sub_field('main_slider__link');
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
      <div class="main-slider__item">
        <picture class="main-slider__image">
          <?php if ($ms_image_mobile) : ?>
            <source media="(max-width: 799px)" srcset="<?php echo esc_url($ms_image_mobile['url']); ?>">
          <?php endif;?>
          <?php if ($ms_image) : ?>
            <?php if ($link) : ?>
              <a href="<?php echo $link_url; ?>">
            <?php endif; ?>
            <img src="<?php echo esc_url($ms_image['url']); ?>" alt="<?php echo esc_attr($ms_image['alt']); ?>"/>
            <?php if ($link) : ?>
              </a>
            <?php endif; ?>
          <?php endif; ?>
        </picture>
        <?php if ($ms_text): ?>
          <div class="main-slider__caption">
            <?php echo $ms_text; ?>
            <?php if ($link) : ?>
              <a href="<?php echo $link_url; ?>" class="button button--outlined">
            <?php endif; ?>
              <span class="button__content" tabindex="-1">
                <?php echo $link_title; ?>
              </span>
            <?php if ($link) : ?>
              </a>
            <?php endif; ?>
          </div>
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
