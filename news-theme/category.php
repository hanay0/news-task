<?php get_header(); ?>
<section>
    <div class="container">
        <div class="row py-4 my-4">
            <?php
                 if ( have_posts() ) { ?>
                    <div class="row">
                        <?php
                        while ( have_posts() ) {
                        the_post(); ?>
                            <div class="col-12 col-sm-6 col-lg-3 mb-3 d-flex">
                                <a class="d-flex flex-column align-items-center text-decoration-none text-primary w-100 cursor-pointer position-relative single_recipe_type" href="<?php echo (is_user_logged_in() ? get_the_permalink() : "javascript:void(0)"); ?>">
                                    <img class="w-100 object-fit-cover" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                    <p class="text-center w-100 fw-bold mb-0 text-dark"><?php echo mb_strimwidth(get_the_title(), 0, 25, '...') ?></p>
                                </a>
                            </div>
                        <?php } ?>
                    </div>

                   <?php } else { ?>
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-center">There's no content to be viewed</h4>
                        </div>
                    </div>
                <?php } ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
