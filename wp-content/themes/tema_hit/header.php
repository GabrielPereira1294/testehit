<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Theme Wordpress</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body class="py-5">

    <main>
        <div class="container text-center">
            <div class="d-flex justify-content-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-hit-branco.svg" width="160" class="py-5">

            </div>
            
                <?php
                wp_nav_menu([
                    'menu'            => 'Primary',
                    'theme_location'  => '',
                    'container'       => 'li',
                    'depth'           => 0,
                    // 'fallback_cb'     => 'bs4navwalker::fallback',
                    // 'walker'          => new bs4navwalker()
                ]);
                ?>
            <div style="display: inline-block;">
                <h4><?php the_title() ?></h4>
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-line divider-custom-line-icon"></div>
                    <div class="divider-custom-line"></div>
                </div>
            </div>