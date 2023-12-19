<?php
/*

**  Template Name: Arts News

*/

get_header();

$current_slug = '';

$term = get_queried_object();
$current_slug = $term->slug;



?>



<section>
    <div class="our_news_section our_news_section_page afclr">
        <div class="wrapper afclr">

            <div class="our_news_se_inner afclr">


            <form action="#" method="get">
				<div class="filter_section afclr">
					<span class="filter_section__title">Filter by Category</span>
					<select name="filters" id="filters" onchange="document.location.href=this.options[this.selectedIndex].value;">
						<option value="<?php echo get_permalink(19);?>">AII Arts News</option>
						<?php



                        $args = array(
                            'taxonomy' => 'art_news_cat',
                            'orderby' => 'name',
                            'order'   => 'ASC'
                        );
						$categories = get_categories($args);
						foreach($categories as $category) {
                            $current_cat_staus = '';
                            if(strcmp($current_slug,$category->slug) == 0){ $current_cat_staus = 'selected';  }
						    echo '<option value="'.get_category_link($category->term_id).'" '.$current_cat_staus.'>'.$category->name.'</option>';
						}

						?>
					</select>
				</div>
			</form>


            <div class="news__block_sec afclr">
            <?php
                $post_number = 1;

                        $args = array(
                        'post_type'   => 'arts_news',
                        'post_status' => 'publish',
                        'orderby'=> 'date',
                        'order' => 'DESC',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'art_news_cat',
                                'field'    => 'slug',
                                'terms'    => $current_slug,
                            ),
                        ),
                    );
                    $arts_news = new WP_Query( $args );
                    if ( $arts_news->have_posts() ) : ?>
                    <div class="news__block_sec_inner afclr">
                <?php while( $arts_news->have_posts() ) : $arts_news->the_post() ?>


                <div class="news_block news_match_height">
                    <div class="news_block_inner afclr">
                        <div class="news_bl_img afclr">
                            <a href="<?php echo get_permalink($post->ID); ?>">

                            <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
                            if ( ! empty( $large_image_url[0] ) ) { ?>
                                <img src="<?php echo $large_image_url[0];?>" alt="featured">
                            <?php }else{ ?>
                                <img src="<?php bloginfo('template_directory'); ?>/images/art_news_thumbnail.jpg" alt="featured">
                                <?php }?>


                            </a>
                        </div>
						<div class="news_bl_contents  wow fadeInUp afclr">
                            <a href="<?php echo get_permalink($post->ID); ?>"><h3 class="head_color_y"><?php echo $cat_name = $term->name; ?></h3></a>
                            <a href="<?php echo get_permalink($post->ID); ?>"><h3><?php the_title(); ?></h3></a>
                            <a href="<?php echo get_permalink($post->ID); ?>"><h3><?php the_field('event_date',$post->ID); ?></h3></a>
                        </div>
                    </div>
                </div>

                <?php endwhile;?>
                </div>

                <?php
                 wp_reset_postdata();
                ?>
               <?php else : ?>
                    <div class="no_news_posts afclr">
                        <h2>No Arts News Posts</h2>
                    </div>
            <?php endif ?>


            </div>
            </div>

        </div>


        </div>
    </div>
</section>



<?php get_footer();

