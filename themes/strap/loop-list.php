<?php
if(have_posts()):
    $wrapClass = array(
        'bg-white',
        'p-3',
        'shadow-sm',
        'mb-3',
    );
    while(have_posts()):
        the_post();
?>
                <div id="post_<?php the_ID(); ?>"<?php post_class($wrapClass) ?>>
                    <section class="mb-3">
                        <h1><?php the_title(); ?></h1>
                        <div>
                            <time datatime="<?php the_time('Y-m-d') ?>"><?php the_time('Y年m月d日(l)') ?></time>：
                            <span class="d-inline-block mr-2"><?php the_category(' ') ?></span>
                        </div>
                        <div>
                            <span class="d-inline-block mr-2"><a href="/">タグ1</a></span>
                            <span class="d-inline-block mr-2"><a href="/">タグ2</a></span>
                            <span class="d-inline-block mr-2"><a href="/">タグ3</a></span>
                        </div>
                        <div class="blog_text mt-3">
                            <?php if(has_post_thumbnail()): ?>
                            <p class="text-center"><?php the_post_thumbnail('medium'); ?></p>
                            <?php else: ?>
                            <p class="text-center">サムネないです。</p>
                            <?php endif; ?>
                            <p><?php the_excerpt(); ?></p>
                            <p class="text-left mb-0"><a href="<?php the_permalink(); ?>">&gt;&gt; 続きを読む</a></p>
                        </div><!-- /.blog_text -->
                    </section>
                </div>
<?php
    endwhile;
else:  // 記事がなかった場合
?>
    <?php if(is_search()): ?>
    <p>検索結果がありませんでした。</p>
    <?php else: ?>
    <p>該当する記事がありませんでした。</p>
    <?php endif; ?>
<?php endif; ?>