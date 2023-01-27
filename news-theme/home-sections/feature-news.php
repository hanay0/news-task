<section class="my-4">
    <div class="container">
        <div class="row justify-content-between">
			<!-- the first column will hold the features news post -->
            <div class="col-12 col-md-7 section_top_border py-4">
                <h4 class="text-uppercase text-danger mb-4">Features</h4>
                <div class="features-news-wrapper d-flex justify-content-between">
	                <?php
	                $args = array(
		                'post_type' => 'post',
		                'posts_per_page' => 2,
		                'meta_query'     => [
			                [
				                'key'     => 'feature_post',
				                'value'   => true,
				                'compare' => '='
			                ]
		                ]
	                );
	                $features_news_query = new WP_Query( $args );
	                if ( $features_news_query->have_posts() ) :
		                while( $features_news_query->have_posts() ) : $features_news_query->the_post();
			                $single_news_featured_img = get_the_post_thumbnail_url();
			                $single_news_title = get_the_title();
			                ?>
                            <div class="d-flex flex-column justify-content-center single_feature news-single">
                                <a href="<?php echo get_the_permalink(); ?>" class="d-flex flex-column align-items-center text-decoration-none text-primary cursor-pointer position-relative single_news_unit">
                                    <img class="object-fit-cover img-fluid h-100" src="<?php echo $single_news_featured_img ?>" alt="news_img">
                                    <p class="text-center mb-0"><?php echo mb_strimwidth($single_news_title, 0, 30, "..."); ?></p>
                                </a>
                            </div>
		                <?php
		                endwhile;
	                endif;
	                ?>
                </div>
            </div>
			<!-- the second column will hold the top 5 stories (news) section-->
            <div class="col-12 col-md-4 d-flex flex-column section_top_border py-4">
                <h4 class="text-uppercase text-danger mb-4">Top 5 stories</h4>
                <div class="top-stories-wrapper d-flex flex-column">
                    <?php
                        $feature_news_counter = 1; // variable for the number before each post (prefered using <ol>)
//                        $post_views_count = get_field('post_views_count');
                        $arguments = array(
                            'post_type' => 'post',
                            'posts_per_page' => 5,
                            'meta_key' => 'post_views_count',
                            'orderby' => 'meta_value_num',
                            'order' => 'DESC'
                        );
                        $top_five_news_query = new WP_Query( $arguments );
                        if ( $top_five_news_query->have_posts() ) :
                            while( $top_five_news_query->have_posts() ) : $top_five_news_query->the_post();
                                $single_news_title = get_the_title();
                                ?>
                                <div class="d-flex flex-column justify-content-center single_top_post">
                                    <a href="<?php echo get_the_permalink(); ?>" class="d-flex align-items-center text-decoration-none cursor-pointer position-relative single_news_unit">
                                        <span class="bg-danger text-white mx-1 px-2 py-1"><?php echo $feature_news_counter; ?></span>
                                        <p class="text-center mb-0"><?php echo mb_strimwidth($single_news_title, 0, 35, "..."); ?></p>
                                    </a>
                                </div>
                            <?php
	                            $feature_news_counter++; // increment the counter by 1 each loop and print that number inside the span for each single post
                            endwhile;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>