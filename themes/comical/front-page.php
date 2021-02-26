<?php get_header(); ?>
    <main class="p-main-home">
        <div class="p-lead-part">
            <p>技術の備忘録です。</p>
            <!--<p>JavaScriptの内容を漫画にして説明しています。想定読者はHTML5プロフェッショナルLV1〜2程度の難易度です。<br>できる限りJavaScriptに馴染みが薄い人にも分かりやすく、なんとなくおおまかに分かったような気持ちになれるように、体系立てて取り組めて、しっかりと定着する内容を心がけています。</p>-->
            <?php if(have_posts()): ?>
            <div class="c-scroll-text u-mt20">
                <div class="c-scroll-text__inner">
                <?php while(have_posts()): the_post(); ?>
                    <div class="c-scroll-text__row"><time class="c-scroll-text__time"><?php the_time('Y/m/d'); ?></time><span class="c-scroll-text__text">「<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>」を新規作成しました</span></div>
                <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <section class="u-mt45">
            <h1 class="c-heading-1">最新記事一覧</h1>
            <!--<h1 class="c-heading-1">JavaScript</h1>-->
            <?php if(have_posts()): ?>
            <input type="text" class="c-search u-mt30" placeholder="下の項目をリアルタイムで絞り込めます。検索したい語句を入力してください。">
            <div class="p-inclusion-rows">
            <?php while(have_posts()): the_post(); ?>
                <div class="c-card-2 u-mb20">
                    <a href="<?php the_permalink(); ?>" class="c-card__link" id="post-<?php the_ID() ?>">
                    <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('c-card-2__thumbnail'); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img_dummy_01.jpg" width="128" height="72" alt="" class="c-card__img">
                    <?php endif; ?>
                        <div class="c-card__body">
                            <div class="c-card__title"><?php the_title(); ?></div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </section>
    </main>
<?php get_footer(); ?>