<?php
  /**
   *
  Productos Destacados -> featured_products
    - Item Producto (repater) -> featured_product
   */

$featured_posts = get_field('featured_products');

if( $featured_posts ): ?>
  <div class="featured-products__content">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </div>
  <div class="container">
    <div class="row">
    <?php foreach( $featured_posts as $post ):
      // Setup this post for WP functions (variable must be named $post).
      $post = $post['featured_product'];
      setup_postdata($post); ?>
      <div class="col-lg-3">
        <article class="card-product">
          <a href="<?php the_permalink(); ?>">
            <figure class="card-product__thumbnail">
              <?php the_post_thumbnail('large');?>
            </figure>
          </a>
          <div class="card-product__caption">
            <h3 class="card-product__title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
          </div>
        </article>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <?php
  // Reset the global post object so that the rest of the page works correctly.
  wp_reset_postdata(); ?>
<?php endif;
