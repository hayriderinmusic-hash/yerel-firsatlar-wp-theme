<?php
function yerel_firsatlar_assets() {
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','yerel_firsatlar_assets');
