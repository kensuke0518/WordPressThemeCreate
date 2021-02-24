<?php get_header(); ?>
    <main class="container">
        <div class="row">
            <div class="col-md-8">
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
                <div id="<?php the_ID(); ?>" <?php post_class($wrapClass); ?>>
                    <section class="mb-3">
                        <h1><?php the_title(); ?></h1>
                        <div>
                            <time datatime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日(l)') ?></time>：
                            <span class="d-inline-block mr-2"><?php the_category(' ') ?></span>
                        </div>
                        <div>
                            <span class="d-inline-block mr-2"><a href="/">タグ1</a></span>
                            <span class="d-inline-block mr-2"><a href="/">タグ2</a></span>
                            <span class="d-inline-block mr-2"><a href="/">タグ3</a></span>
                        </div>
                        <div class="blog_text mt-3">
                            <?php the_content(); ?>
                        </div><!-- /.blog_text -->
                    </section>
                </div><!-- /.bg-white p-3 shadow-sm -->
<?php
    endwhile;
endif;
?>
                <nav class="d-flex justify-content-between mb-3">
                    <span><?php previous_post_link('&lt;&lt; %link'); ?></span>
                    <span><?php next_post_link('%link &gt;&gt;'); ?></span>
                </nav>
            </div><!-- /.col-md-8 -->
            <aside class="col-md-4 mb-3">
<?php get_sidebar('categories'); ?>
<?php get_sidebar('archives'); ?>
            </aside><!-- /.col-mad-4 -->
        </div><!-- /.row -->
    </main>
<?php get_footer() ?>