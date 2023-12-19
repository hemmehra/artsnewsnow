<?php
/**
* Template Name: Ad Placement Demo
*/
get_header('ads');

?>

<?php /* ?>
    <section>
        <div class="home_banner_sec afclr">
        <?php
            $banner_image = get_field('banner_image',5);
            if( !empty( $banner_image ) ): ?>
                <img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>" />
            <?php endif; ?>

            <div class="home_text ">
                <div class="wrapper afclr">
                    <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                        <h1><?php the_field('banner_title',5); ?></h1>
                    </div>
                        <p><?php the_field('banner_subtitle',5); ?></p>
                </div>
            </div>

            </div>
    </section>

    <?php */ ?>


<section>
        <div class="swiper homepage__banner__slider add_relative_class_and_overlay">
                <div class="demo_page_sec">
                    <h1>Demo Page</h1>
                </div>
                <div class="swiper-wrapper">
                <?php if( have_rows('banner_slider',5) ): ?>
                    <?php while( have_rows('banner_slider',5) ): the_row();
                        $banner_image = get_sub_field('banner_image');
                        $banner_title = get_sub_field('banner_title');
                        $banner_subtitle = get_sub_field('banner_subtitle');
                        $banner_author_name = get_sub_field('banner_author_name');
                        $banner_link = get_sub_field('banner_link');
                        ?>
                    <div class="swiper-slide">
                        <div class="home_banner_sec afclr">
                           <a href="<?php echo $banner_link; ?>">
                            <img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>" />
                                <div class="home_banner_text afclr">
                                    <div class="wrapper afclr">
                                        <div class="home__banner__content wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                                            <h1><?php echo $banner_title; ?></h1>
                                            <p><?php echo $banner_subtitle; ?></p>
                                            <p><?php echo $banner_author_name; ?></p>
                                        </div>
                                    </div>
                                </div>
                           </a>

                        </div>
                    </div>

                    <?php endwhile; ?>
                <?php endif; ?>
                </div>

                <div class="swiper-button-next homepage__banner__slider_next"></div>
                <div class="swiper-button-prev homepage__banner__slider_prev"></div>
        </div>
    </section>


<!-- Featured Arts News Section -->

<section>
    <div class="our_news_section  afclr">
        <div class="wrapper afclr">

                <div class="news_bdr_heading heading_sec">
                    <h2><?php the_field('featured_arts_news_title',5); ?></h2>
                </div>

        <div class="our_news_se_outor add_relative_class_and_overlay afclr">
        <div class="demo_page_sec">
                    <h1>Demo Page</h1>
                </div>
            <div class="our_news_se_inner  afclr">

            <?php
                $post_number = 1;

                        $args = array(
                        'post_type'   => 'arts_news',
                        'post_status' => 'publish',
                        'orderby'=> 'date',
                        'order' => 'DESC',
                        'posts_per_page' => -1,
                    );
                    $arts_news = new WP_Query( $args );
                    if ( $arts_news->have_posts() ) : ?>
                <?php while( $arts_news->have_posts() ) : $arts_news->the_post() ?>

                <?php $is_featured_arts_news_post = get_field('is_featured_arts_news_post',$post->ID);
                if(strcmp($is_featured_arts_news_post[0],'Yes')==0 && $post_number <= 3){
                    $post_number = $post_number + 1;
                ?>


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

                                <div class="news_bl_content wow fadeInUp afclr" data-wow-duration="1s" data-wow-delay="0s">
                                    <h3 class="head_color_y">
                                    <?php
                                        $term_list = wp_get_post_terms($post->ID, 'art_news_cat', array("fields" => "all"));
                                        $i=1;
                                        foreach($term_list as $term_single) {

                                            if($i == 1){
                                                echo $term_single->name;
                                            }else{
                                                echo ', ';
                                                echo $term_single->name;
                                            }
                                            $i++;
                                        }
                                        ?>
                                    </h3>
                                    <h3><?php the_title(); ?></h3>
                                    <h3><?php the_field('event_date',$post->ID); ?></h3>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                <?php }?>
                <?php endwhile;
                 wp_reset_postdata();
                ?>
               <?php else : ?>
                    <!-- Content If No Posts -->
            <?php endif ?>


            </div>
        </div>
        </div>
    </div>

</section>



<!-- Newsroom Post Section -->
<section>
    <div class="our_event_section our_newsroom_post_section afclr">
        <div class="wrapper afclr">
            <div class="event_bdr_heading heading_sec">
                <h2><?php the_field('newsroom_post_title',5); ?></h2>
            </div>
            <div class="our_event_se__outor add_relative_class_and_overlay">
            <div class="demo_page_sec">
                    <h1>Demo Page</h1>
                </div>
            <div class="our_event_se_inner afclr">


            <?php
                $post_number = 1;

                        $args = array(
                        'post_type'   => 'arts_news',
                        'post_status' => 'publish',
                        'orderby'=> 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 2,
                        'tax_query' => array(
                                'taxonomy' => 'art_news_cat',
                                'field'    => 'slug',
                                'terms'    => 'newsroom-posts',
                        ),
                    );
                    $arts_events = new WP_Query( $args );
                    if ( $arts_events->have_posts() ) : ?>
                <?php while( $arts_events->have_posts() ) : $arts_events->the_post() ?>

                <div class="event_block">
                    <div class="event_block_inner match_inner_height afclr" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="event_bl_img afclr">
                            <a href="<?php echo get_permalink($post->ID); ?>">
                            <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
                            if ( ! empty( $large_image_url[0] ) ) { ?>
                                <img src="<?php echo $large_image_url[0];?>" alt="featured">
                            <?php }else{ ?>
                                <img src="<?php bloginfo('template_directory'); ?>/images/event1.jpg" class="inner-img" alt="Event">
                                <?php }?>

                            </a>
                        </div>
                            <div class="event_bl_content afclr">
                            <h3>
                                <a href="#"><?php the_title(); ?></a>
                                <a href="#"><?php the_field('event_date',$post->ID); ?></a>
                            </h3>
                            </div>
                    </div>
                </div>



                <?php endwhile;
                    wp_reset_postdata();
                ?>

               <?php else : ?>
                    <!-- Content If No Posts -->
            <?php endif ?>



                <div class="event_block mb_event">
                    <div class="event_block_inner match_inner_height_slider afclr">
                        <div class="swiper downslider">
                            <div class="swiper-wrapper">

                           <?php
                                $post_number = 1;

                                $args = array(
                                'post_type'   => 'arts_news',
                                'post_status' => 'publish',
                                'orderby'=> 'date',
                                'order' => 'DESC',
                                'posts_per_page' => 9,
                                'tax_query' => array(
                                    'taxonomy' => 'art_news_cat',
                                    'field'    => 'slug',
                                    'terms'    => 'newsroom-posts',
                                ),
                            );
                            $arts_events = new WP_Query( $args );
                           if ( $arts_events->have_posts() ) : ?>
                            <?php while( $arts_events->have_posts() ) : $arts_events->the_post() ?>

                            <?php

                                $post_count = $post_number;
                                $post_number = $post_number + 1;
                                if($post_count != 1 && $post_count != 2){
                            ?>

                                <div class="swiper-slide">
                                    <div class="category_box_sec">
                                        <div class="category_inner_sec afclr">
                                            <div class="category_box_main afclr">
                                                <a href="<?php echo get_permalink($post->ID); ?>"><span>
                                                <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
                                                if ( ! empty( $large_image_url[0] ) ) { ?>
                                                    <img src="<?php echo $large_image_url[0];?>" alt="featured">
                                                <?php }else{ ?>
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/event3.jpg" alt="Event" class="inner-img">
                                                    <?php }?>


                                                </span></a>
                                                <div class="category_content_sec afclr">
                                                    <h3><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <?php } ?>
                            <?php endwhile;
                                wp_reset_postdata();
                            ?>

                        <?php else : ?>
                                <!-- Content If No Posts -->
                        <?php endif ?>

                            </div>
                        <!-- <div class="swiper-pagination"></div> -->
                        </div>
                        <div class="swiper-button-next down_slider_next_arrow"> <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.png" alt="down-arrow"></div>


                    </div>
                </div>

        </div>
        </div>

        </div>
    </div>
</section>



<!-- Arts Events -->
<?php /* ?>
<section>
    <div class="our_event_section afclr">
        <div class="wrapper afclr">
            <div class="event_bdr_heading heading_sec">
                <h2><?php the_field('arts_events_title',5); ?></h2>
            </div>
            <div class="our_event_se_inner afclr">


            <?php
                $post_number = 1;

                        $args = array(
                        'post_type'   => 'arts_events',
                        'post_status' => 'publish',
                        'orderby'=> 'date',
                        'order' => 'DESC',
                        'posts_per_page' => -1,
                    );
                    $arts_events = new WP_Query( $args );
                    if ( $arts_events->have_posts() ) : ?>
                <?php while( $arts_events->have_posts() ) : $arts_events->the_post() ?>

                <?php $is_featured_arts_events_post = get_field('is_featured_arts_events_post',$post->ID);

                if($post_number > 2){
                    break;
                }

                if(strcmp($is_featured_arts_events_post[0],'Yes')==0 && $post_number <= 2){
                    $post_number = $post_number + 1;
                ?>

                <div class="event_block">
                    <div class="event_block_inner match_inner_height wow fadeInLeft afclr" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="event_bl_img afclr">
                            <a href="<?php echo get_permalink($post->ID); ?>">
                            <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
                            if ( ! empty( $large_image_url[0] ) ) { ?>
                                <img src="<?php echo $large_image_url[0];?>" alt="featured">
                            <?php }else{ ?>
                                <img src="<?php bloginfo('template_directory'); ?>/images/event1.jpg" class="inner-img" alt="Event">
                                <?php }?>

                            </a>
                        </div>
                            <div class="event_bl_content afclr">
                            <h3>
                                <a href="#"><?php the_title(); ?></a>
                                <a href="#"><?php the_field('event_date',$post->ID); ?></a>
                            </h3>
                            </div>
                    </div>
                </div>



                <?php }?>
                <?php endwhile;
                    wp_reset_postdata();
                ?>

               <?php else : ?>
                    <!-- Content If No Posts -->
            <?php endif ?>



                <div class="event_block mb_event">
                    <div class="event_block_inner match_inner_height_slider afclr">
                        <div class="swiper downslider">
                            <div class="swiper-wrapper">

                           <?php
                                $post_number = 1;

                                $args = array(
                                'post_type'   => 'arts_events',
                                'post_status' => 'publish',
                                'orderby'=> 'date',
                                'order' => 'DESC',
                                'posts_per_page' => -1,
                            );
                            $arts_events = new WP_Query( $args );
                           if ( $arts_events->have_posts() ) : ?>
                            <?php while( $arts_events->have_posts() ) : $arts_events->the_post() ?>

                            <?php $is_featured_arts_events_post = get_field('is_featured_arts_events_post',$post->ID);
                            if($post_number > 7){
                                break;
                            }
                            if(strcmp($is_featured_arts_events_post[0],'Yes')==0 && $post_number <= 7){
                                $post_count = $post_number;
                                $post_number = $post_number + 1;
                                if($post_count != 1 && $post_count != 2){
                            ?>

                                <div class="swiper-slide">
                                    <div class="category_box_sec">
                                        <div class="category_inner_sec afclr">
                                            <div class="category_box_main afclr">
                                                <a href="<?php echo get_permalink($post->ID); ?>"><span>
                                                <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
                                                if ( ! empty( $large_image_url[0] ) ) { ?>
                                                    <img src="<?php echo $large_image_url[0];?>" alt="featured">
                                                <?php }else{ ?>
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/event3.jpg" alt="Event" class="inner-img">
                                                    <?php }?>


                                                </span></a>
                                                <div class="category_content_sec afclr">
                                                    <h3><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <?php } }?>
                            <?php endwhile;
                                wp_reset_postdata();
                            ?>

                        <?php else : ?>
                                <!-- Content If No Posts -->
                        <?php endif ?>

                            </div>
                        <!-- <div class="swiper-pagination"></div> -->
                        </div>
                        <div class="swiper-button-next down_slider_next_arrow"> <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.png" alt="down-arrow"></div>


                    </div>
                </div>

        </div>

        </div>
    </div>
</section>

<?php */ ?>

<!-- About Section -->
<?php /*  ?>
<section>
    <div class="about_sec afclr">

        <div class="about_left about_section_match afclr">
            <div class="ab_img about_section_match">
            <?php
            $about_section_image = get_field('about_section_image',5);
            if( !empty( $about_section_image ) ): ?>
                <img src="<?php echo esc_url($about_section_image['url']); ?>" alt="<?php echo esc_attr($about_section_image['alt']); ?>" />
            <?php endif; ?>
        </div>
        </div>

        <div class="wrapper afclr">
            <div class="about_right about_section_match afclr">
                <div class="ab_l_sec"></div>
                <div class="ab_l_sec2"></div>
                <div class="heading_sec">
                    <h2 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s"><?php the_field('about_section_title',5); ?></h2>
                </div>
                    <?php the_field('about_section_content',5); ?>

                <div class="read_btn"><a href="<?php echo get_permalink(25); ?>"><span>Read More</span></a></div>
            </div>
        </div>
    </div>
</section>
<?php */ ?>

<section>
    <div class="ann_about_sec afclr">
        <div class="ann_about_sec_inner afclr">

                <div class="ann_about_sec_left ann_about_sec_match_height afclr">
                <?php if( have_rows('about_section_img',5) ):
                        $count_class = 1;
                    ?>
                    <?php while( have_rows('about_section_img',5) ): the_row();
                        $image = get_sub_field('image');
                        ?>
                            <!-- <div class="ann_about_sec_left_img_box ann_about_sec_left_img_box_<?php //echo $count_class; ?>"> -->
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            <!-- </div> -->

                            <?php
                            $count_class++;
                            endwhile;
                         ?>
                    <?php endif; ?>

                </div>
                    <div class="ann_about_sec_right ann_about_sec_match_height afclr">
                        <div class="wrapper afclr">

                        <div class="ann_about_sec_right_inner afclr">
                            <div class="heading_sec">
                                <h2 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s"><?php the_field('about_section_title'); ?></h2>
                            </div>
								<h2 style="font-size:52px;  font-weight: 400; color: #000; line-height: 1.1; text-align: left; margin-bottom: 20px; margin-top: 10px;">
						About Art News Now
					</h2 >
                            <?php the_field('about_section_content',5); ?>
                            <div class="read_btn"><a href="<?php echo get_permalink(25); ?>"><span>Read More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>





<!-- First banner -->

<section>
    <div class="wrapper afclr">
        <div class="ad_details_container ad_details_container_1">
            <div class="ad_details afclr">
			
                <h2><?php the_field('about_section_bottom_ad_image_size_details'); ?></h2>
                <p><?php the_field('about_section_bottom_ad_price_details'); ?></p>
            </div>
            <?php /* ?>
            <div class="ad_contact_btn afclr">
                <a href="<?php echo get_permalink(27 ); ?>" class="site_btn">Contact us for this ad space</a>
            </div>
            <?php */ ?>
        </div>

        <div class="banner_first banner_first-ads">
            <div class="swiper ads_slider">
                <div class="swiper-wrapper">
					
                <?php if( have_rows('about_section_bottom_ad') ): ?>
                    <?php while( have_rows('about_section_bottom_ad') ): the_row();
                        $ad_image = get_sub_field('ad_image');
                        ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($ad_image['url']); ?>" alt="<?php echo esc_attr($ad_image['alt']); ?>" />
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                </div>
            </div>

            <div class="swiper-pagination ads_slider_pagination"></div>
            <div class="swiper-button-prev ads_slider_prev_btn"></div> 
            <div class="swiper-button-next ads_slider_next_btn"></div>


        </div>
    </div>
</section>

<!--Podcast Section-->

<section>
   <div class="podcast_main_sec afclr">
     <div class="wrapper afclr">
        <div class="podcast_banner_sec add_relative_class_and_overlay">
        <div class="demo_page_sec">
                    <h1>Demo Page</h1>
                </div>
        <?php
        $podcast_image = get_field('podcast_image',5);
        if( !empty( $podcast_image ) ): ?>
            <img src="<?php echo esc_url($podcast_image['url']); ?>" alt="<?php echo esc_attr($podcast_image['alt']); ?>" />
        <?php endif; ?>

            <div class="podcast_text">
                <p><?php the_field('podcast_title_1',5); ?></p>
                <h2><?php the_field('podcast_title_2',5); ?></h2>
                <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s"><?php the_field('podcast_title_3',5); ?></h3>
                <p class="podcast_txt_clor"><?php the_field('podcast_title_4',5); ?></p>

            </div>
        </div>

        </div>
    </div>
</section>


<!-- Advertisers -->

<section>
    <div class="advertise-images advertise-images--ads afclr">
        <div class="wrapper afclr">

                <div class="all_bdr_heading heading_sec afclr">
                    <h2><?php the_field('sponsors_title',23); ?></h2>
                </div>
    <div class="partner_section afclr">
    <div class="swiper sponsers_slider afclr">
      <div class="swiper-wrapper">
    <?php if( have_rows('sponsors',23) ): ?>
    <?php while( have_rows('sponsors',23) ): the_row();
        $sponsor_image = get_sub_field('sponsor_image');
        $sponsor_link = get_sub_field('sponsor_link');
        ?>
        <div class="swiper-slide">
            <div class="partner_section_outer afclr">
                <div class="outer_border afclr">
                    <div class="slider_inner afclr">
                        <a href="<?php echo $sponsor_link; ?>" target="_blank">
                        <img alt="partner1" src="<?php echo $sponsor_image['url']; ?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
<?php endif; ?>

    </div>
    </div>
    </div>

    <div class="sponsers_view_all_btn afclr">
        <a href="<?php echo get_permalink(23); ?>" class="site_btn">View All</a>
    </div>
    </div>
    </div>

</section>


<!--Newsletter Section-->
<?php  ?>
    <section>
        <?php $newsletter_section_background_image = get_field('newsletter_section_background_image',5); ?>
        <div class="form_section_main add_relative_class_and_overlay afclr" style="background:url('<?php echo $newsletter_section_background_image['url']; ?>');background-size:cover;background-repeat: no-repeat;">
          <div class="wrapper afclr">

            <div class="form_section afclr">

                        <div class="form_content_sec afclr">
                            <div class="heading_sec afclr">
                                <h2><?php the_field('newsletter_section_title',5); ?></h2>
                            </div>
                            <?php /* ?>
                            <form name="form1" method="post">
                                <div class="l_one">
                                  <input type="text" name="textfield" id="textfield" placeholder="Email Address" class="c_textfield">
                                </div>
                               <div class="l_two">
                                <input type="submit" name="SUBMIT" value="Subscribe" class="s_btn">
                                </div>
                                <div class="clr"></div>
                              </form> <?php */ ?>
                             <!-- Begin Constant Contact Inline Form Code -->
                            <div class="ctct-inline-form" data-form-id="875f2297-b6ce-4045-89ec-9df8ecc8f71d"></div>
                            <!-- End Constant Contact Inline Form Code -->

                    </div>
            </div>
            </div>
        </div>

    </section>
<?php  ?>
<!-- Two banner -->

<section>
    <div class="two_banner_main two_banner_main-ads afclr">
        <div class="wrapper afclr">

        <div class="ad_details_container ">
            <div class="ad_details afclr">
                <h2><?php the_field('newsletter_section_bottom_ad_image_size_details_'); ?></h2>
                <p><?php the_field('newsletter_section_bottom_ad_price_details'); ?></p>
            </div>
            <?php /* ?>
            <div class="ad_contact_btn afclr">
                <a href="<?php echo get_permalink(27 ); ?>" class="site_btn ads_site_btn">Contact us for this ad space</a>
            </div>
            <?php */ ?>
        </div>
            <div class="two_banner_outer afclr">
                <div class="banner_two_inner pr-5">
                    <?php
                    $newsletter_section_bottom_ad_1 = get_field('newsletter_section_bottom_ad_1');
                    if( !empty( $newsletter_section_bottom_ad_1 ) ): ?>
                        <img src="<?php echo esc_url($newsletter_section_bottom_ad_1['url']); ?>" alt="<?php echo esc_attr($newsletter_section_bottom_ad_1['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="banner_two_inner pl-5">
                <?php
                    $newsletter_section_bottom_ad_2 = get_field('newsletter_section_bottom_ad_2');
                    if( !empty( $newsletter_section_bottom_ad_2 ) ): ?>
                        <img src="<?php echo esc_url($newsletter_section_bottom_ad_2['url']); ?>" alt="<?php echo esc_attr($newsletter_section_bottom_ad_2['alt']); ?>" />
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->

<section>
    <div class="blog_main_sec afclr">
        <div class="wrapper afclr">
            <div class="blog_bdr_heading heading_sec">
                <h2>National Arts Newswire</h2>
            </div>
        </div>
        <div class="blog_sec__outor add_relative_class_and_overlay">
        <div class="demo_page_sec">
                    <h1>Demo Page</h1>
                </div>

            <div class="blog_sec_inner afclr">

                <div class="blog_block">
                    <div class="blog_block_inner afclr" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="blog_bl_img afclr">
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/news-image-1.jpg" alt="Blog1" class="inner-img"></a>
                        </div>
                        <div class="blog_bl_content afclr">
                            <h3 class="color_gray"><a href="#">RobbReport</a></h3>
                            <h3><a href="#">Deel Sheet: From Marni to Montblance, the Most Luxurious Discounts Online this Week</a></h3>
                        </div>
                    </div>
                </div>

                <div class="blog_block">
                    <div class="blog_block_inner afclr" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="blog_bl_img afclr">
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/news-image-2.jpg" alt="Blog2" class="inner-img"></a>
                        </div>
                        <div class="blog_bl_content afclr">
                            <h3 class="color_gray"><a href="#">WWD</a></h3>
                            <h3><a href="#">Deel Sheet: From Marni to Montblance, the Most Luxurious Discounts</a></h3>
                        </div>
                    </div>
                </div>

                <div class="blog_block">
                    <div class="blog_block_inner afclr" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="blog_bl_img afclr">
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/news-image-3.jpg" alt="Blog3" class="inner-img"></a>
                        </div>
                        <div class="blog_bl_content afclr">
                            <h3 class="color_gray"><a href="#">Rolling Stone</a></h3>
                            <h3><a href="#">Deel Sheet: From Marni to Montblance the Most</a></h3>
                        </div>
                    </div>
                </div>

                <div class="blog_block">
                    <div class="blog_block_inner afclr" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="blog_bl_img afclr">
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/news-image-4.jpg" alt="Blog4" class="inner-img"></a>
                        </div>
                        <div class="blog_bl_content afclr">
                            <h3 class="color_gray"><a href="#">Sportico</a></h3>
                            <h3><a href="#">Deel Sheet: From Marni to Montblance, the Most Luxurious Discounts Online this Week</a></h3>
                        </div>
                    </div>
                </div>

                <div class="blog_block">
                    <div class="blog_block_inner afclr" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="blog_bl_img afclr">
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/news-image-5.jpg" alt="Blog5" class="inner-img"></a>
                        </div>
                        <div class="blog_bl_content afclr">
                            <h3 class="color_gray"><a href="#">SPY</a></h3>
                            <h3><a href="#">Deel Sheet: From Marni to Montblance, the Most Luxurious Discounts</a></h3>
                        </div>
                    </div>
                </div>

            </div>
            </div>
    </div>
</section>



<?php
get_footer('ads');
?>

