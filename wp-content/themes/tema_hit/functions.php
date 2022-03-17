<?php
    if ( !function_exists( 'tema_hit' ) ) {
        function tema_hit() {
            /*
            * Let WordPress manage the document title.
            * By adding theme support, we declare that this theme does not use a
            * hard-coded <title> tag in the document head, and expect WordPress to
            * provide it for us.
            */
            add_theme_support( 'tema_hit' );
            add_theme_support( 'post-thumbnails' );
		    set_post_thumbnail_size( 1568, 9999 );
            register_nav_menus(
                array(
                    'wp_nav_menu' => __( 'Primary', 'tema_hit' ),
                )
            );
            // $args = array(
            //     'flex-width'    => true,
            //     'width'         => '100%',
            //     'flex-height'    => true,
            //     'height'        => 1179,
            //     'default-image' => get_template_directory_uri() . '/images/header.jpg',
            // );
            // add_theme_support( 'custom-header', $args );
        }

        add_action( 'after_setup_theme', 'tema_hit' );

        // if( function_exists('acf_add_options_page') ) {

        //     // Register options page.
        //     $option_page = acf_add_options_page(array(
        //         'page_title'    => __('Opções do Site'),
        //         'menu_title'    => __('Opções do Site'),
        //         'menu_slug'     => 'opcoes-site',
        //         'capability'    => 'manage_options',
        //         'redirect'      => false
        //     ));
        // }

    }
