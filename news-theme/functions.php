<?php
// theme supporting functions
function vl_news_theme_support() {
    // add dynamic title tag support
    add_theme_support('title-tag');

    // add custom logo
    add_theme_support('custom-logo');

    // post thumbnails
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','vl_news_theme_support');


/**
 * @return void
 * description: method to enqueue stylesheets for theme
 */
function news_register_style():void {
    $version = wp_get_theme()->get('Version');    //make custom theme version dynamic
    wp_enqueue_style('news-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '5.1.3', 'all');
    wp_enqueue_style('news-fontawesome', get_template_directory_uri() . "/assets/css/font-awesome.min.css", array(), '5.13.0', 'all');
    wp_enqueue_style('slick-stylesheet', get_template_directory_uri() . "/assets/css/slick.css", array(), '5.13.0', 'all');
    wp_enqueue_style('slick-theme-stylesheet', get_template_directory_uri() . "/assets/css/slick-theme.css", array(), '5.13.0', 'all');
    wp_enqueue_style('news-main-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'news_register_style');

// calling scripts function
function news_register_scripts():void {
    wp_enqueue_script('news-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.4.1', true);
//    wp_enqueue_script('news-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.16.0', true);
    
    wp_enqueue_script('news-bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), '5.1.3', 'all');

    wp_enqueue_script('slick-script', get_template_directory_uri() . "/assets/js/slick.js", array(), '1.0.0', 'true');

    wp_enqueue_script('news-main-js', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', 'true');
}
add_action('wp_enqueue_scripts', 'news_register_scripts');

// menus 
function news_menus(): void {
    $locations = array(
        'primary' => "Desktop Primary Menu",
    );
    register_nav_menus($locations);
}
add_action('init', 'news_menus');

/**
 * @param $postID
 *
 * @return void
 *
 * @description method to get the value of the custom field which holds the count of post's views ,
 * ,increment it and update the value after being changing and update the value of the field
 */
function increment_views_number($postID): void {
    $post_views_count = get_field('post_views_count', $postID);
    // var_dump($counter);
    if($post_views_count) {
        $post_views_count ++;
    } else {
        $post_views_count = 1;
    }
    update_field('post_views_count', $post_views_count, $postID);
}
?>