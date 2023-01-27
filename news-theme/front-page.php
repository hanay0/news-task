<?php get_header(); ?>
<?php
/**
 * frontpage : refers to the page called 'home.php'
 * split each section in home page into a separate file for readability and ease of use
 * require files for each section into the frontpage
 */
    require_once(get_template_directory() . '/home-sections/main-news.php');
    require_once(get_template_directory() . '/home-sections/egypt-news.php');
    require_once (get_template_directory() . '/home-sections/feature-news.php');

?>
<?php get_footer(); ?>