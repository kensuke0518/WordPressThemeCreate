<?php
/**
 * アイキャッチ画像を使用可能にする。
 * アイキャッチ画像に新たなサイズ区分を追加する
 */
add_theme_support('post-thumbnails');
add_image_size( 'c-card__thumbnail', 288, 162 ,true);
add_image_size( 'c-cardSideway__thumbnail', 128, 72 ,true);
?>