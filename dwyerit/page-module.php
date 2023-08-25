<?php
/**
 * Template Name: Modules template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dwyerit
 */

get_header();
?>

<div class="page-wrapper">

  <?php
  if(is_page('about-us')) {
    get_template_part('template-parts/about-us');
  }

  if(is_page('blog')) {
    get_template_part('template-parts/blog-posts');
  }

  if(is_page('pricing')) {
    get_template_part('template-parts/pricing');
  }

  if(is_page('contact-us')) {
    get_template_part('template-parts/contact-us');
  }

  if(is_page('privacy-policy')) {
    get_template_part('template-parts/privacy-policy');
  }

  if (have_rows('modules')):
    while (have_rows('modules')):
      the_row();

      if (get_row_layout() == 'right_image_&_left_text_with_button') {
        get_template_part('flex-content/right_image_&_left_text_with_button');
      } elseif (get_row_layout() == 'rating') {
        get_template_part('flex-content/rating');
      } elseif (get_row_layout() == 'home_perks') {
        get_template_part('flex-content/home_perks');
      } elseif (get_row_layout() == 'features') {
        get_template_part('flex-content/features');
      } elseif (get_row_layout() == 'testimonials') {
        get_template_part('flex-content/testimonials');
      } elseif (get_row_layout() == 'big_blog_grid_style') {
        get_template_part('flex-content/big_blog_grid_style');
      } elseif (get_row_layout() == 'contact_banner') {
        get_template_part('flex-content/contact_banner');
      } elseif (get_row_layout() == 'header_style_with_outline_buttons') {
        get_template_part('flex-content/header_style_with_outline_buttons');
      } elseif (get_row_layout() == 'image_with_content') {
        get_template_part('flex-content/image_with_content');
      } elseif (get_row_layout() == 'wysiwyg_editor') {
        get_template_part('flex-content/wysiwyg_editor');
      }

    endwhile;
  endif;

  ?>

</div>

<?php

get_footer();