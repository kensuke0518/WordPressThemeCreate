<?php
/**
 * サムネイルを追加する
 */
add_theme_support('post-thumbnails');

/**
 * サムネイルを追加する
 */
add_theme_support('menus');

/**
 * メニューの<li>に任意のクラスを付与する
 */
function addMenuClass( $classes ) {
    $classes = array(
        'nav-item',
    );
    return $classes;
} 
add_filter( 'nav_menu_css_class', 'addMenuClass', 10, 2 );

/**
 * メニューの<a>に任意のクラスを付与する
 */
function add_class_on_link($item_output, $item){
 return preg_replace('/(<a.*?)/', '$1' . " class='nav-link'", $item_output);
}
add_filter('walker_nav_menu_start_el', 'add_class_on_link', 10, 4);

?>