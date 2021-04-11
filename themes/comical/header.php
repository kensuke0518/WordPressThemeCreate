<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(!is_home()){wp_title(' | ',true,'right');} ?><?php bloginfo('name'); ?></title>
    <?php if(is_single()): ?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/styles/tomorrow-night-blue.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php
    //トップ画像、サムネイル画像の設定
    if(is_home()){
        $url = get_template_directory_uri().'/images/mv.png';
    }
    elseif(is_single()){
        if(has_post_thumbnail()){
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
        }
        else{
            $url = get_template_directory_uri().'/images/thumb_general_01.png';
        }
    }
    ?>
    <style>
        .l-mv__page::before{background-image:url(<?php echo $url ?>)}
    </style>
    <?php
    wp_head();
    ?>
</head>
<body>
    <?php get_template_part('logo','main'); ?>
    <header id="l-topHeader">
        <div class="c-darkmode l-gmenuDark">
            <input type="checkbox" class="c-darkmode__checkbox" id="aaa" data-dark="dark">
            <label for="aaa" class="c-darkmode__btn"><span class="c-darkmode__feature"></span></label>
        </div>
        <div class="l-headerLogo">
            <a href="/" class="l-logo disp-sp">
                <svg class="l-logoSvg" viewBox="0 0 666 262">
                    <use xlink:href="#logoMain"></use>
                </svg>
            </a>
        </div>
        <div class="c-hamburger l-gmenuButton"><a href="javascript:void(0)" class="c-hamburger__link"><span class="c-hamburger__btn"></span></a></div>
        <div class="l-gmenu">
            <div class="l-gmenu__inner">
                <nav class="l-gnav">
                    <div class="l-gmenuLogo">
                        <a href="/" class="l-logo">
                            <svg class="l-logoSvg" width="100%" viewBox="0 0 666 262">
                                <use xlink:href="#logoMain"></use>
                            </svg>
                        </a>
                    </div>
                    <ul class="l-gnav__list">
                        <li class="l-gnav__listItem"><a href="<?php echo home_url(); ?>">ホームへ戻る</a></li>
                        <!--<li class="gnav__list-item"><a href="#">記事一覧</a></li>
                        <li class="gnav__list-item"><a href="#">問題集</a></li>
                        <li class="gnav__list-item"><a href="#">このサイトについて</a></li>
                        <li class="gnav__list-item"><a href="#">お問い合わせ</a></li>-->
                    </ul>
                </nav>
                <section class="l-artset">
                <?php get_template_part('loop','recently'); ?>
                </section>
            </div>
        </div>
    </header>
    <div class="l-mv l-mv__page">
        <div class="l-mv__inner">
            <img class="l-mv__img" src="<?php echo $url ?>" alt="">
        </div>
    </div>
