<?php
  /**
   *
  Productos Destacados -> featured_products
    - Item Producto (repater) -> featured_product
   */

$featured_posts = get_field('featured_products');
global $woocommerce;

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
        $product = new WC_Product( $post->ID );
        ?>

        <div class="col-lg-3 featured-products__item">
          <article class="card-product card-product--home">
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
              <div class="card-product__price">
                <span class="card-product__price-ammount">
                  <?php echo $product->get_price_html(); ?>
                </span>
              </div>
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
