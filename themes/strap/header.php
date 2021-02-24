<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if(is_month()){
            $time = the_time('Y年m月');
            echo $time.' | ';
        }
        elseif(!is_home()){
            wp_title('|',true,'right');
        }
        bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">K WordPress</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                $args = array(
                    'menu'=>'global-navigation',
                    'menu_class'=>'navbar-nav mr-auto',
                    'container'=>false,
                );
                wp_nav_menu($args);
                ?>
                <?php get_search_form(); ?>
            </div>
        </nav>
    </header>
    <?php if(is_home()): ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <div class="container">
        <div class="bg-white p-3 shadow-sm mb-3">
            <h5 class="border-bottom border-gray mb-0 pb-3">更新情報</h5>
            <?php
                query_posts('posts_per_page=3');
                if(have_posts()):
            ?>
            <ul class="list-unstyled small">
                <?php
                    while(have_posts()):
                        the_post();
                ?>
                <li id="<?php the_ID(); ?>" class="media border-bottom border-gray">
                    <div class="media-body pt-3 pb-3">
                        <p class="mb-0"><time datatime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time></p>
                        <a href="<?php the_permalink(); ?>">
                            <p class="mb-0"><?php the_title(); ?></p>
                        </a>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
    <div class="container">
        <?php if(!is_404()): ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>
        <?php endif; ?>
    </div><!-- /.container -->
