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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php
    wp_head();
    ?>
</head>
<body>
<?php if(is_home()): ?>
    <header id="l-topHeader">
<?php elseif(is_single()): ?>
    <header id="l-pageHeader">
<?php endif; ?>
        <div class="l-gmenu">
            <div class="l-gmenu__inner">
                <nav class="l-gnav">
                    <a href="/" class="l-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/img_dummy_01.jpg" width="76" height="76" alt=""></a>
                    <ul class="l-gnav__list">
                        <li class="l-gnav__listItem"><a href="<?php echo home_url(); ?>">ホームへ戻る</a></li>
                        <!--<li class="gnav__list-item"><a href="#">記事一覧</a></li>
                        <li class="gnav__list-item"><a href="#">問題集</a></li>
                        <li class="gnav__list-item"><a href="#">このサイトについて</a></li>
                        <li class="gnav__list-item"><a href="#">お問い合わせ</a></li>-->
                    </ul>
                    <div class="l-gnav__otherItem">
                        <div class="c-darkmode u-mt10">
                            <input type="checkbox" class="c-darkmode__checkbox" id="aaa" data-dark="dark">
                            <label for="aaa" class="c-darkmode__btn"><span class="c-darkmode__feature"></span></label>
                        </div>
                    </div>
                </nav>
                <section class="l-artset">
                <?php get_template_part('loop','recently'); ?>
                </section>
            </div>
        </div>
    </header>
    <div class="l-mvOuter">
        <div class="c-hamburger c-gmenuOpen l-gmenu-button"><a href="javascript:void(0)" class="c-hamburger__link"><span class="c-hamburger__btn"></span></a></div>
<?php if(is_home()): ?>
        <div class="l-mv"><img src="<?php echo get_template_directory_uri(); ?>/images/mv.png" alt=""></div>
<?php elseif(is_single()): ?>
        <div class="l-mv">
        <?php if(has_post_thumbnail()): ?>
            <?php
            $attr = array(
                'class' => 'l-mv__img',
            );
            the_post_thumbnail(array( 1024, 576 ),$attr);
            ?>
        <?php else: ?>
            <img class="l-mv__img" src="<?php echo get_template_directory_uri(); ?>/images/mv.png" alt="">
        <?php endif; ?>
        </div>
<?php endif; ?>
    </div>
