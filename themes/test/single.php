<?php get_header(); ?>
    <main class="l-main-page">
        <?php
        if(have_posts()):
         ?>
        <section>
        <?php while(have_posts()): the_post(); ?>
            <div class="l-lead-part">
                <h1 class="c-heading-2"><?php the_title(); ?></h1>
                <div class="u-pb30">
                    <div class="u-mt35"><time class="u-bold">更新日時：<?php the_time('Y/m/d'); ?></time></div>
                    <?php if(has_tag()==true): ?>
                    <div class="u-mt10"><?php the_tags( '<ul class="l-tags"><li class="u-mr20">', '</li><li class="u-mr20">', '</li></ul>' ); ?></div>
                    <?php endif; ?>
                </div>
                <?php
                $meta = post_custom('今回のポイント');
                if($meta):
                ?>
                <div class="u-mt30">
                    <h2 class="c-heading-1">今回のポイント</h2>
                    <ul class="u-mt30 c-list-line">
                    <?php
                    /**
                     * カスタムフィールドについて
                     * https://www.webdesignleaves.com/pr/wp/wp_custom_fields.html
                     */
                    function echoPoint($pointVal){
                        echo '<li class="c-list-line__item">'.esc_html($pointVal).'</li>';
                    };
                    if(is_array($meta)){
                        foreach($meta as $value) {
                            echoPoint($value);
                        }
                    }else{
                        echoPoint($meta);
                    }
                    ?>
                    </ul>
                </div>
                <?php endif; ?>
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