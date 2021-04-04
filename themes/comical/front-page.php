<?php get_header(); ?>
    <main class="p-main-home">
        <div class="p-lead-part">
            <p>技術の備忘録です。</p>
            <!--<p>JavaScriptの内容を漫画にして説明しています。想定読者はHTML5プロフェッショナルLV1〜2程度の難易度です。<br>できる限りJavaScriptに馴染みが薄い人にも分かりやすく、なんとなくおおまかに分かったような気持ちになれるように、体系立てて取り組めて、しっかりと定着する内容を心がけています。</p>-->
            <?php if(have_posts()): ?>
            <div class="c-scrollText u-mt20">
                <div class="c-scrollText__inner">
                <?php while(have_posts()): the_post(); ?>
                    <div class="c-scrollText__row"><time class="c-scrollText__time"><?php the_time('Y/m/d'); ?></time><span class="c-scrollText__text">「<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>」を新規作成しました</span></div>
                <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php get_template_part('loop','top'); ?>
    </main>
<?php get_footer(); ?>