<?php get_header(); ?>
    <main class="l-main-page">
        <?php
        if(have_posts()):
         ?>
        <section>
        <?php while(have_posts()): the_post(); ?>
            <div class="l-lead-part">
                <h1 class="c-heading-2"><?php the_title(); ?></h1>
                <div class="u-mt35"><time class="u-bold">更新日時：<?php the_time('Y/m/d'); ?></time></div>
                <div class="u-mt10"><a href="#" class="u-mr20">#タグ1</a><a href="#">#タグ2</a></div>
                <div class="u-mt60">
                    <h2 class="c-heading-1">今回のポイント</h2>
                    <ul class="u-mt30 c-list-line">
                        <li class="c-list-line__item">ポイントポイントポイントポイントポイントポイントポイントポイントポイントポイントポイント</li>
                        <li class="c-list-line__item">ポイントポイントポイントポイントポイントポイントポイントポイントポイントポイントポイント</li>
                        <li class="c-list-line__item">ポイントポイントポイントポイントポイントポイントポイントポイントポイントポイントポイント</li>
                        <li class="c-list-line__item">ポイントポイントポイントポイントポイントポイントポイントポイントポイントポイントポイント</li>
                    </ul>
                </div>
            </div>
            <section class="u-mt45">
                <div class="u-mt60">
                <?php the_content(); ?><!-- ここに以下のテンプレートを追加できるようにしたい。あとショートコードを使いやすいようにもうちょっと拡張したい。 https://netaone.com/wp/shortcodes-ultimate/ -->
                </div>
            </section>
        <?php endwhile; ?>
        </section>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>