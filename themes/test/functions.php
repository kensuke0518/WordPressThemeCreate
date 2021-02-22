<?php
/**
 * wp_head()を追加したことで表示される上部の余白を削除する。
 */
add_filter( 'show_admin_bar', '__return_false' );

/**
 * アイキャッチ画像を使用可能にする。
 * アイキャッチ画像に新たなサイズ区分を追加する
 */
add_theme_support('post-thumbnails');
add_image_size( 'c-card-1__thumbnail', 320, 180 ,true);
add_image_size( 'c-card-2__thumbnail', 128, 72 ,true);

/**
 * highlight.jsを読み込ませる
 */
//function.phpからCSSとJSを読み込ませる
function library_scripts() {
    wp_enqueue_style( 'style_highlight', get_template_directory_uri() . '/css/default.css', array(), null, 'all');
    wp_enqueue_script( 'js_highlight', get_template_directory_uri() . '/js/highlight.pack.js', array());
}
add_action( 'wp_enqueue_scripts', 'library_scripts' );

/**
 * ショートコードを作成する
 * https://www.webdesignleaves.com/pr/wp/wp_shortcode.html
 */
function shortcode_test(){
    return '「ショートコードのテストです」';
}
add_shortcode('test','shortcode_test');

function shortcode_apple($aaa){ //投稿画面のショートコードとして指定した属性が連想配列として、この引数に代入される
    $bbb = shortcode_atts(array(//以下の配列では投稿画面のショートコードの属性が何も指定されなかった場合のデフォルトの表示を示している
        'fruits' => 'リンゴ',
        'num' => 5,
    ),$aaa);
    extract($bbb);
    return $fruits.'が'.$num.'個ありました';
}
add_shortcode('apple','shortcode_apple');//第一引数はショートコード名（HTMLでいうところのタグ名）、第二引数は上で指定したコールバック関数

//コードをハイライトする
function shortcode_codeHighlight($atts,$content=null){
    return '<pre class="u-mt30 u-mb30"><code>'.$content.'</code></pre>';
}
add_shortcode('highlight','shortcode_codeHighlight');

//見出し一覧
function shortcode_heading($atts,$content = null){
    $func = shortcode_atts(array(
        'hnum' => 1,
        'num' => 1,
        'mt' => 30,
    ),$atts);
    extract($func);
    $content = do_shortcode( shortcode_unautop( $content ) );
    return '<h'.$hnum.' class="c-heading-'.$num.' u-mt'.$mt.'">'.$content.'</h'.$hnum.'>';
}
add_shortcode('heading','shortcode_heading');

//用語解説
function shortcode_desc2Cell($atts,$content = null){
    $content = do_shortcode( shortcode_unautop( $content ) );
    return '<div class="c-desc2cell">
                    <dl class="c-desc2cell__list">
                        <div class="c-desc2cell__box">
                            <dt class="c-desc2cell__term">用語</dt>
                            <dd class="c-desc2cell__define">説明</dd>
                        </div>
                        <div class="c-desc2cell__body">
                            '.$content.'
                        </div>
                    </dl>
                    <div class="c-desc2cell__boxout">
                        <p>説明を終わる</p>
                    </div>
                </div>';
}
add_shortcode('desc2Cell','shortcode_desc2Cell');

function shortcode_desc2CellBox($atts,$content = null){
    $content = do_shortcode( shortcode_unautop( $content ) );
    return '<div class="c-desc2cell__box">'.$content.'</div>';
}
add_shortcode('desc2CellBox','shortcode_desc2CellBox');

function shortcode_desc2CellTerm($atts,$content = null){
    return '<dt class="c-desc2cell__term">'.$content.'</dt>';
}
add_shortcode('desc2CellTerm','shortcode_desc2CellTerm');

function shortcode_desc2CellDefine($atts,$content = null){
    $content = do_shortcode( shortcode_unautop( $content ) );
    return '<dd class="c-desc2cell__define">'.$content.'</dd>';
}
add_shortcode('desc2CellDefine','shortcode_desc2CellDefine');

function shortcode_desc2CellDetail($atts,$content = null){
    $content = do_shortcode( shortcode_unautop( $content ) );
    return '<dd class="c-desc2cell__detail">'.$content.'</dd>';
}
add_shortcode('desc2CellDetail','shortcode_desc2CellDetail');


/**
 * ショートコードを入れ子にする
 * https://designsupply-web.com/media/knowledgeside/4037/
 * 問題があって、ショートコード中に改行を行うとソースコードの方に<br/>が追加されてしまう。
 * https://coffee-break-designs.com/1308/
 */
function shortcodeParent( $atts, $content = null ) {
    $content = do_shortcode( shortcode_unautop( $content ) );//この一文を入れる。
    return '<div class="parent">' . $content . '</div>';
}
add_shortcode('parent', 'shortcodeParent');

?>