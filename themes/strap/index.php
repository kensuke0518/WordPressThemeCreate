<?php get_header(); ?>
    <main class="container">
        <?php if(is_month()): ?>
        <h1><?php the_time('Y年m月'); ?></h1>
        <?php else: ?>
        <h1><?php wp_title('記事一覧',true,'right'); ?></h1>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-8">
<?php get_template_part('loop','list') ?>
                <nav>
                    <ul class="pagination pagination-md">
                        <li class="page-item disabled">
                            <a class="page-link" href="#!" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#!">Next</a>
                        </li>
                    </ul>
                </nav>
            </div><!-- /.col-md-8 -->
            <aside class="col-md-4 mb-3">
<?php get_sidebar('categories'); ?>
<?php get_sidebar('archives'); ?>
            </aside><!-- /.col-mad-4 -->
        </div><!-- /.row -->
    </main>
<?php get_footer(); ?>
