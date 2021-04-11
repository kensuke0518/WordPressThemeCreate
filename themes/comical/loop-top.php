        <section class="u-mt45">
            <h1 class="c-heading1">最新記事一覧</h1>
            <!--<h1 class="c-heading1">JavaScript</h1>-->
            <?php if(have_posts()): ?>
            <input type="text" class="c-search u-mt30" placeholder="下の項目を絞り込めます。検索語句を入力してください。">
            <div class="l-frontRows">
            <?php while(have_posts()): the_post(); ?>
                <div class="c-card c-card--sideway u-mb15">
                    <a href="<?php the_permalink(); ?>" class="c-card__link" id="post-<?php the_ID() ?>">
                        <div class="c-card__inner">
                            <div class="c-card__img">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('c-cardSideway__thumbnail'); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/thumb_general_01.png" alt="">
                            <?php endif; ?>
                            </div>
                            <div class="c-card__body">
                                <div class="c-card__title"><?php the_title(); ?></div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </section>
