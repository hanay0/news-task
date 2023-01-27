<section class="my-4">
    <div class="container d-flex py-4 main-news-container">
        <div class="row justify-content-between">
            <div class="col-12 col-md-4 d-flex justify-content-start align-items-start">
	            <?php
	            $args = array(
		            'post_type' => 'post',
		            'posts_per_page' => 1,
                    'meta_query'     => [
		            [
			            'key'     => 'main_post',
			            'value'   => true,
			            'compare' => '='
		            ]
	            ]
	            );
	            $main_news_query = new WP_Query( $args );
	            if ( $main_news_query->have_posts() ) :
		            while( $main_news_query->have_posts() ) : $main_news_query->the_post();
			            $single_news_featured_img = get_the_post_thumbnail_url();
			            $single_news_title = get_the_title();
			            ?>
			            <div class="d-flex flex-column justify-content-center news-single">
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
            <div class="col-12 col-md-4 d-flex flex-column justify-content-between middle-column">
	            <?php
	            $args = array(
		            'post_type' => 'post',
		            'posts_per_page' => 2,
		            'offset' => 1,
		            'meta_query'     => [
			            [
				            'key'     => 'main_post',
				            'value'   => true,
				            'compare' => '='
			            ]
		            ]
	            );
	            $main_news_query = new WP_Query( $args );
	            if ( $main_news_query->have_posts() ) :
		            while( $main_news_query->have_posts() ) : $main_news_query->the_post();
			            $news_image = get_the_post_thumbnail_url();
			            $news_title = get_the_title();
			            ?>
                        <div class="d-flex flex-column justify-content-center news-single">
                            <a href="<?php echo get_the_permalink(); ?>" class="d-flex flex-column align-items-center text-decoration-none text-primary cursor-pointer position-relative">
                                <img class="object-fit-cover img-fluid" src="<?php echo $news_image ?>" alt="recipe-img">
                                <p class="text-center mb-0"><?php echo mb_strimwidth($news_title, 0, 100, "..."); ?></p>
                            </a>
                        </div>
		            <?php
		            endwhile;
	            endif;
	            ?>
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-start align-items-start">
		        <?php
		        $args = array(
			        'post_type' => 'post',
			        'posts_per_page' => 1,
                    'offset' => 3,
			        'meta_query'     => [
				        [
					        'key'     => 'main_post',
					        'value'   => true,
					        'compare' => '='
				        ]
			        ]
		        );
		        $recipes_query = new WP_Query( $args );
		        if ( $recipes_query->have_posts() ) :
			        while( $recipes_query->have_posts() ) : $recipes_query->the_post();
				        $recipe_image = get_the_post_thumbnail_url();
				        $recipe_title = get_the_title();
				        ?>
                        <div class="d-flex flex-column justify-content-center news-single">
                            <a href="<?php echo get_the_permalink(); ?>" class="d-flex flex-column align-items-center text-decoration-none text-primary cursor-pointer position-relative single_news_unit">
                                <img class="object-fit-cover img-fluid h-100 " src="<?php echo $recipe_image ?>" alt="news_img">
                                <p class="text-center mb-0"><?php echo mb_strimwidth($recipe_title, 0, 30, "...");  ?></p>
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