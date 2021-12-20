<?php
/**
 * Template name: Home Template
 */
get_template_part('includes/header');
get_template_part('components/main_slider');
get_template_part('loops/taxonomy', 'products');
get_template_part('components/featured_products');
echo do_shortcode('[instagram-feed num=4 cols=4 showfollow=false]');
get_template_part('includes/footer');
