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
                <h1><?php the_title(); ?></h1>
                <div class="bg-white p-3 shadow-sm mb-3" id="<?php the_ID(); ?>"<?php post_class($wrapClass) ?>>
                    <section class="mb-3">
                        <?php the_content(); ?>
                    </section>
                </div><!-- /.bg-white p-3 shadow-sm -->
<?php
    endwhile;
endif;
?>
            </div><!-- /.col-md-8 -->
            <aside class="col-md-4 mb-3">
<?php get_sidebar(); ?>
            </aside><!-- /.col-mad-4 -->
        </div><!-- /.row -->
    </main>
<?php get_footer(); ?>
