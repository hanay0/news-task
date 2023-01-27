<section class="my-4">
	<div class="container">
		<div class="row">
            <div class="col-12 w-100">
                <h4 class="text-danger mb-4 text-uppercase">Egypt News</h4>
            </div>
            <div class="egypt-news-wrapper w-100 position-relative">
                <?php
                $args = array(
	                'post_type' => 'post',
	                'posts_per_page' => -1,
	                'category_name' => 'egypt_news'
                );
                $egypt_news_query = new WP_Query( $args );
                if ( $egypt_news_query->have_posts() ) :
	                while( $egypt_news_query->have_posts() ) : $egypt_news_query->the_post();
		                $single_news_featured_img = get_the_post_thumbnail_url();
		                $single_news_title = get_the_title();
		                ?>
                        <div class="d-flex news-single">
                            <a href="<?php echo get_permalink(); ?>" class="d-flex flex-column align-items-center text-decoration-none text-primary cursor-pointer position-relative effect">
                                <img class="object-fit-cover img-fluid" src="<?php echo $single_news_featured_img ?>" alt="recipe-img">
                                <p class="text-center mb-0"><?php echo mb_strimwidth($single_news_title, 0, 30, "..."); ?></p>
                            </a>
                        </div>
	                <?php
	                endwhile;
                endif;
                ?>
            </div>
		</div>
	</div>
</section>