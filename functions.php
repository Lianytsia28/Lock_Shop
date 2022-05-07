<?php

    define('PIROLL_DIR_CSS', get_template_directory_uri() . '/assets/css/');
    define('PIROLL_DIR_CSS_SLICK', get_template_directory_uri() . '/assets/slick/');
    define('PIROLL_DIR_JS', get_template_directory_uri() . '/assets/js/');
    define('PIROLL_DIR_IMG', get_template_directory_uri() . '/assets/img/');
    define('ASSETS_DIR', get_template_directory_uri() . '/assets');
    

    add_action('wp_enqueue_scripts', function(){
        wp_enqueue_style('main', PIROLL_DIR_CSS . 'main.css');
        wp_enqueue_style('slick', PIROLL_DIR_CSS_SLICK . 'slick.css');
        wp_enqueue_style('slick-theme', PIROLL_DIR_CSS_SLICK . 'slick-theme.css');
        wp_enqueue_style('style', PIROLL_DIR_CSS . 'style.css');
        wp_enqueue_script('js-jquery',  '//code.jquery.com/jquery-1.11.0.min.js');
        wp_enqueue_script('js-slick',  'https://kenwheeler.github.io/slick/slick/slick.js', ['js-jquery'],true);
        wp_enqueue_script('main-js', PIROLL_DIR_JS . 'main.js');
        wp_enqueue_script('js', PIROLL_DIR_JS . 'js.js',  ['js-jquery', 'js-slick'], true);
        wp_enqueue_script('jssor', PIROLL_DIR_JS . 'jssor.slider-22.2.6.min.js');
    });

    add_action('after_setup_theme', function(){
        add_theme_support('post-thumbnails');

        register_nav_menu('header', 'Меню в шапці');
    });


    add_action( 'widgets_init', function(){
        register_sidebar([
            'name'          => 'Side column',
            'id'            => "sidebar-post-single",
            'description'   => 'Виводиться тільки на сторінці одного поста',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => "</div>\n",
            'before_title'  => '<div class="h3">',
            'after_title'   => "</div>\n", 
        ]);
    });

    add_theme_support( 'custom-logo' );

    add_theme_support('post-thumbnails');
    add_theme_support('post-thumbnails', array('services_content'));

    function create_posttype() {
        register_post_type( 'footer',
        // CPT Options
          array(
            'labels' => array(
              'name' => __( 'footer' ),
              'singular_name' => __( 'footer' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'footer'),
            'show_in_rest' => true,
          )
        );

        register_post_type( 'work_post',
        // CPT Options
          array(
            'labels' => array(
              'name' => __( 'work_post' ),
              'singular_name' => __( 'work_post' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'work_post'),
            'show_in_rest' => true,
          )
        );

      }
      add_action( 'init', 'create_posttype' );

      function my_myme_types($mime_types){
        $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
        return $mime_types;
    }
    add_filter('upload_mimes', 'my_myme_types', 1, 1);


  
    