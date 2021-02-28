<?php
/**
 * コードをハイライトする
 */
function shortcode_codeHighlight($atts,$content=null){
    return '<pre class="u-mt30 u-mb30"><code>'.$content.'</code></pre>';
}
add_shortcode('highlight','shortcode_codeHighlight');


/**
 * 見出し一覧
 */
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


/**
 * 用語集解説
 */
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
    $func = shortcode_atts(array(
        'term' => '',
        'define' => '',
    ),$atts);
    extract($func);
    return '<div class="c-desc2cell__box">
                <dt class="c-desc2cell__term">'.$term.'</dt>
                <dd class="c-desc2cell__define">'.$define.'</dd>
                '.$content.'
            </div>';
}
add_shortcode('desc2CellBox','shortcode_desc2CellBox');

function shortcode_desc2CellDetail($atts,$content = null){
    $content = do_shortcode( shortcode_unautop( $content ) );
    return '<dd class="c-desc2cell__detail">'.$content.'</dd>';
}
add_shortcode('desc2CellDetail','shortcode_desc2CellDetail');


/**
 * ショートコードに勝手に改行が入ってしまう問題の対処策一覧
 * 暫定的な解決方法は下記の1+3の対応方法
 */
//1  https://bambooworks.co/shortcode-p-br/
function shortcode_p_fix($content) {
$content = str_replace( PHP_EOL, '', $content ); //これが足りなかったので3から拝借して対応
$array = array (
	']<br />' => ']',
	'<br />[' => '[',
);
$content = strtr($content, $array);
return $content;
}
add_filter('the_content', 'shortcode_p_fix');


//2  https://kinocolog.com/wpautop_escape/
/*
function exec_shortcode_escape_wpautop($content){
    global $post;
    if(!$post -> post_content){
        return $content;
    }
    $before_content = $post -> post_content;
    
    preg_match_all('/\[escp\](.*?)\[\/escp\]/s', $before_content, $aryMatchBefore);
    
    if(isset($aryMatchBefore[0]) && $aryMatchBefore[0]){
        preg_match_all('/\[escp\](.*?)\[\/escp\]/s', $content, $aryMatchAfter);
        foreach($aryMatchBefore[1] as $key => $value){
            $content = str_replace($aryMatchAfter[0][$key], $value, $content);
        }
    }

    return $content;
}
add_filter('the_content', 'exec_shortcode_escape_wpautop');
*/


//3  https://monoxa.net/2018/10/wordpress%E3%81%AE%E5%9B%B2%E3%81%BF%E5%9E%8B%E3%82%B7%E3%83%A7%E3%83%BC%E3%83%88%E3%82%B3%E3%83%BC%E3%83%89%E3%81%A7p%E3%82%84br%E3%81%8C%E4%BB%98%E3%81%8F%E3%81%AE%E3%82%92%E9%98%B2%E3%81%90/
// $contentから改行コードを削除する。
/*
$content = str_replace( PHP_EOL, '', $content );
// 置換する文字列を配列で定義する。
$autop_array = array(
	'<p>['    => '[',
	']</p>'   => ']',
	']<br />' => ']',
	'<br />[' => '[',
);
// $content内の<p>や<br>を置換する。
$content  = strtr( $content, $autop_array );
// $content内のショートコードを処理する。
$content  = '<div class="carousel-inner">' . do_shortcode( $content ) . '</div>';
*/

//4  https://wk-partners.co.jp/homepage/blog/hpseisaku/wordpress/wordpress-automatic-forming-control/
/*
add_action('init', function() {
  remove_filter('the_title', 'wptexturize');
  remove_filter('the_content', 'wptexturize');
  remove_filter('the_excerpt', 'wptexturize');
  remove_filter('the_title', 'wpautop');
  remove_filter('the_content', 'wpautop');
  remove_filter('the_excerpt', 'wpautop');
  remove_filter('the_editor_content', 'wp_richedit_pre');
});
add_filter('tiny_mce_before_init', function($init) {
  $init['wpautop'] = false;
  $init['apply_source_formatting'] = ture;
  return $init;
});
 */

/**
 * 基礎編
 */
 /**
 * ショートコードを作成する
 * https://www.webdesignleaves.com/pr/wp/wp_shortcode.html
 */
/*
function shortcode_test(){
    return '「ショートコードのテストです」';
}
add_shortcode('test','shortcode_test');
*/

/*
function shortcode_apple($aaa){ //投稿画面のショートコードとして指定した属性が連想配列として、この引数に代入される
    $bbb = shortcode_atts(array(//以下の配列では投稿画面のショートコードの属性が何も指定されなかった場合のデフォルトの表示を示している
        'fruits' => 'リンゴ',
        'num' => 5,
    ),$aaa);
    extract($bbb);
    return $fruits.'が'.$num.'個ありました';
}
add_shortcode('apple','shortcode_apple');//第一引数はショートコード名（HTMLでいうところのタグ名）、第二引数は上で指定したコールバック関数
*/

/**
 * ショートコードを入れ子にする
 * https://designsupply-web.com/media/knowledgeside/4037/
 * 問題があって、ショートコード中に改行を行うとソースコードの方に<br/>が追加されてしまう。
 */
/*
function shortcodeParent( $atts, $content = null ) {
    $content = do_shortcode( shortcode_unautop( $content ) );//この一文を入れる。
    return '<div class="parent">' . $content . '</div>';
}
add_shortcode('parent', 'shortcodeParent');
*/
?>
