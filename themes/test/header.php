<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(!is_home()){wp_title(' | ',true,'right');} ?><?php bloginfo('name'); ?></title>
    <?php if(is_single()): ?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/styles/tomorrow-night-blue.min.css">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php
    wp_head();
    ?>
</head>
<body>
<?php if(is_home()): ?>
    <header id="top-header">
        <div class="mv"><img src="/" alt=""></div>
    </header>
<?php endif; ?>
<?php if(is_single()): ?>
    <header id="page-header">
        <div class="mv">
        <?php if(has_post_thumbnail()): ?>
            <?php
            $attr = array(
                'class' => 'mv__img',
            );
            the_post_thumbnail(array( 1120, 630 ),$attr);
            ?>
        <?php else: ?>
            <img class="mv__img" src="<?php echo get_template_directory_uri(); ?>/images/img_dummy_01.jpg" width="1120" height="630" alt="">
        <?php endif; ?>
        </div>
    </header>
<?php endif; ?>
    <div class="c-hamburger gmenu-open"><a href="javascript:void(0)" class="c-hamburger__link"><span class="c-hamburger__btn"></span></a></div>
    <div class="gmenu">
        <nav class="gnav">
            <a href="/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/img_dummy_01.jpg" width="76" height="76" alt=""></a>
            <ul class="gnav__list">
                <li class="gnav__list-item"><a href="<?php echo home_url(); ?>">ホームへ戻る</a></li>
                <!--<li class="gnav__list-item"><a href="#">記事一覧</a></li>
                <li class="gnav__list-item"><a href="#">問題集</a></li>
                <li class="gnav__list-item"><a href="#">このサイトについて</a></li>
                <li class="gnav__list-item"><a href="#">お問い合わせ</a></li>-->
            </ul>
            <div class="gnav__other-item">
                <div class="c-darkmode">
                    <input type="checkbox" class="c-darkmode__checkbox" id="aaa" data-dark="dark">
                    <label for="aaa" class="c-darkmode__btn"><span class="c-darkmode__feature"></span></label>
                </div>
            </div>
        </nav>
        <section>
        <?php get_template_part('loop','recently'); ?>
        </section>
    </div>
