<?php
/**
 * highlight.jsを読み込ませる
 */
//function.phpからCSSとJSを読み込ませる
function library_scripts() {
    wp_enqueue_style( 'style_highlight', get_template_directory_uri() . '/css/default.css', array(), null, 'all');
    wp_enqueue_script( 'js_highlight', get_template_directory_uri() . '/js/highlight.pack.js', array());
}
add_action( 'wp_enqueue_scripts', 'library_scripts' );
?>