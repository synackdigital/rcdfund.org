<?php
/**
 * Custom functions
 */

// [in-the-news]
function shortcode_in_the_news() {
  get_template_part('templates/category', 'in-the-news');
}
add_shortcode( 'in-the-news', 'shortcode_in_the_news' );
