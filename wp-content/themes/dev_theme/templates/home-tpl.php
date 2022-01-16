<?php
/**
 * Template name: Home Template
 */
get_template_part('includes/header');
get_template_part('components/main_slider');
get_template_part('loops/taxonomy', 'products');
get_template_part('components/featured_products');
get_template_part('components/follow_us');
get_template_part('includes/footer');
