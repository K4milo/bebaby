<?php
  /**
   *
  Productos Destacados -> featured_products
    - Item Producto (repater) -> featured_product
   */

$featured_posts = get_field('featured_products');

if( $featured_posts ): ?>
  <div class="featured-products">
    <div class="container featured-products__content">
      <?php the_content(); ?>
    </div>
    <div class="container">
      <div class="row featured-products__wrapper">
        <?php foreach( $featured_posts as $post ):
        $post = $post['featured_product'];
        setup_postdata($post);
        $product = wc_get_product( $post->ID );
        $sale_price =  $product->get_variation_regular_price( 'min', true );
        $regular_price =  $product->get_variation_regular_price( 'max', true );
        ?>

        <div class="col-lg-3 featured-products__item">
          <article class="card-product">
            <a href="<?php the_permalink(); ?>">
              <figure class="card-product__thumbnail">
                <?php the_post_thumbnail('large');?>
              </figure>
            </a>
            <div class="card-product__caption">
              <h3>
                <a href="<?php the_permalink(); ?>" class="card-product__title">
                  <?php the_title(); ?>
                </a>
              </h3>
              <?php echo $sale_price . $regular_price; ?>
            </div>
          </article>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <?php
  // Reset the global post object so that the rest of the page works correctly.
  wp_reset_postdata(); ?>
<?php endif;
