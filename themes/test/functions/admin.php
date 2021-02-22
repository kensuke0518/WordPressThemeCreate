<?php
/**
 * wp_head()を追加したことで表示される上部の余白を削除する。
 */
add_filter( 'show_admin_bar', '__return_false' );
?>