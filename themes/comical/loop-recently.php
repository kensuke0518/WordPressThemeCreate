<?php
    $args = array(
        'post_type' => 'post',
    );
    $the_query = new WP_Query($args);
    if($the_query->have_posts()):
?>
    <div class="gnav__heading">
        <h1 class="c-heading1">最新の投稿記事</h1>
        <!--<a href="/" class="u-ml30">&gt;&gt;記事一覧へ</a>-->
    </div>
    <div class="p-inclusionRows">
        <div class="p-inclusionRows__inner">
    <?php while($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="c-card">
            <a href="<?php the_permalink();?>" class="c-card__link">
                <div class="c-card__inner">
                    <div class="c-card__img">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('c-card__thumbnail'); ?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/img_dummy_01.jpg" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="c-card__body">
                        <div class="c-card__title"><?php the_title(); ?></div>
                        <div class="c-card__times">
                            <time class="c-card__time">更新日時 : <?php the_time('Y/m/d'); ?></time>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php endwhile; ?>
        </div>
    </div>
<?php
    endif;
?>
