<?php
    get_header();
    $current_post_id = get_the_ID(); // current single post id
    increment_views_number($current_post_id); // call the method from 'functions.php' to increase the number of views
?>
    <section class="py-4 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex flex-column py-4 my-2">
                    <h3 class="mb-4"><?php echo get_the_title(); ?></h3>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                    <p><?php echo get_the_content(); ?></p>
                </div>
            </div>
        </div>
    </section>
<?php
    get_footer();
?>