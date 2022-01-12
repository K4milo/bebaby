<?php
$args = array(
  'taxonomy' => 'product_cat',
  'hide_empty' => false,
  'exclude' => array(15),
);

$categories = get_terms($args);

if ($categories): ?>
<section class="category-cards">
  <div class="container">
    <header class="category-cards__heading">
      <h2 class="category-cards__title">Lineas de Producto</h2>
    </header>
    <div class="row">
    <?php
      foreach($categories as $category):
        $cat_id = $category->term_id;
        $cat_name = $category->name;
        $cat_slug = $category->slug;
        $cat_description = $category->description;
        $thumbnail_id = get_woocommerce_term_meta($cat_id, 'thumbnail_id', true);
        $cat_image = wp_get_attachment_url($thumbnail_id); ?>
      <div class="col-lg-4 col-md-6">
        <article class="card-category">
          <a href="/categoria-producto/<?php echo $cat_slug; ?>">
            <figure class="card-category__image">
              <img src="<?php echo $cat_image; ?>" class="img-fluid" />
            </figure>
          </a>
          <div class="card-category__caption">
            <h3 class="card-category__title"><?php echo $cat_name; ?></h3>
            <div class="card-category__body">
              <?php echo $cat_description; ?>
            </div>
          </div>
        </article>
      </div>
      <?php
      endforeach;
    ?>
    </div>
  </div>
</section>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pattern-banner.jpg"
    aria-role="presentation" class="img-fluid"/>
<?php
endif;
