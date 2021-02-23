<?php
    $args = array(
        'post_type' => 'post',
    );
    $the_query = new WP_Query($args);
    if($the_query->have_posts()):
?>
    <div class="gnav__heading">
        <h1 class="c-heading-1">最新の投稿記事</h1>
        <!--<a href="/" class="u-ml30">&gt;&gt;記事一覧へ</a>-->
    </div>
    <div class="inclusion-rows">
    <?php while($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="c-card-1">
            <a href="<?php the_permalink();?>" class="c-card__link">
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('c-card-1__thumbnail'); ?>
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img_dummy_01.jpg" width="320" height="180" alt="" class="c-card__img">
            <?php endif; ?>
                <div class="c-card__body">
                    <div class="c-card__title"><?php the_title(); ?></div>
                    <time class="c-card__time">更新日時 : <?php the_time('Y/m/d'); ?></time>
                </div>
            </a>
        </div>
    <?php endwhile; ?>
    </div>
<?php
    endif;
?>
