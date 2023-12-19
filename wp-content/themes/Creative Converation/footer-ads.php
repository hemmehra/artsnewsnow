<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Creative Converation 1.0
 */



$facebook_link = get_field('facebook_link','option');
$instagram_link = get_field('instagram_link','option');
$linked_in = get_field('linked_in','option');
$youtube_link = get_field('youtube_link','option');
$logo = get_field('logo','option');
$logo_subtitle = get_field('logo_subtitle','option');
$follow_us_title = get_field('follow_us_title','option');


?>


			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->


</div><!-- #page -->



<section>
    <div class="follow_social_outer">
        <div class="wrapper afclr">

            <div class="social_bdr_heading heading_sec">
                <h2><?php echo $follow_us_title; ?></h2>
            </div>

            <div class="f_footer_social afclr">

			<ul>
							<?php
								if(!empty($facebook_link)){
							?>
                            <li><a href="<?php echo $facebook_link; ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" fill="#000"/></svg></a></li>

							<?php } if(!empty($instagram_link)){ ?>

                            <li><a href="<?php echo $instagram_link; ?>" target="_blank">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" fill="#000"/></svg></a></li>

								 <?php } if(!empty($linked_in)){ ?>

                            <li><a href="<?php echo $linked_in; ?>" target="_blank">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" fill="#000"/></svg>
                                </a></li>

								<?php } if(!empty($youtube_link)){ ?>

                            <li><a href="<?php echo $youtube_link; ?>" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" fill="#000"/></svg></a></li>

								<?php } ?>
                        </ul>
            </div>

        </div>
    </div>

    <div class="group_images">
        <div class="group_image_collection">

		<?php if( have_rows('follow_us_on_social_images','option') ): ?>
			<?php while( have_rows('follow_us_on_social_images','option') ): the_row();
				$image = get_sub_field('image');
				$link = get_sub_field('link');
				?>

            <div class="group_image_block">
                <a href="<?php echo $link; ?>" target="_blank">
                    <div class="group_image1">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                            <div class="group_buttn1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" fill="#edbe42"/>
                                </svg>
                            </div>
                    </div>
                </a>
            </div>

			<?php endwhile; ?>
		<?php endif; ?>

        </div>


    </div>

</section>



<!--   Footer -->

	<footer>
        <div class="f_footer afclr">
            <div class="wrapper">
                <div class="f_footer_inner afclr">
                    <div class="f_logo afclr">
								<a href="<?php echo home_url( ); ?>">
							   <?php
									if( !empty( $logo ) ){ ?>
										<img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
									<?php }else{ ?>
										<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="creative-conversations-logo">
									<?php } ?>
									<span><?php echo $logo_subtitle; ?></span>
								</a>
					</div>
                </div>
                    <div class="f_menu afclr">
					<?php wp_nav_menu( array(
                            'theme_location' => 'footer'
                        ) ) ?>
                    </div>


                </div>
            </div>
        </div>


        <div class="copy_center_section afclr">
            <div class="wrapper afclr">
                <div id="copy">Copyright &copy; <?php echo date('Y'); ?> Creative Converstations | All Rights Reserved | <a href="#">Privacy Policy</a> | <a href="#">Terms and Conditions</a>
                </div>
            </div>
        </div>


	</footer>



<a href="javascript:void(0)" class="scroll_main_btn afclr">
		<span class="scroll-top">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="-10 0 164 144" style="&#10;   &#10;">
   			<path fill="currentColor" d="M6 88l65 -62l1 -1l66 63h2.5t2.5 -1t1 -2.5t-1 -1.5l-66 -62q-2 -2 -5 -2t-5 2l-66 62q-1 1 -1 2t1 2t2.5 1.5t2.5 -0.5zM77 58q-2 -2 -5 -2t-6 2l-65 61q-1 1 -1 2.5t1 2.5t2.5 1t2.5 -1l66 -62l66 62q1 1 2.5 1t2.5 -1t1 -2.5t-1 -2.5z" style="&#10; fill: #000;&#10;"/>
			</svg>
		</span>
	</a>


      <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.1.min.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/js/swiper.min.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/js/jquery.matchHeight-min.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/js/site_functions.js"></script>




<?php wp_footer(); ?>

<!-- Match Height-->

<script>
    $(document).ready(function () {

    $('.about_section_match').matchHeight();
      $('.event_bl_content').matchHeight();
      $('.news_match_height').matchHeight();
      $('.news_bl_content').matchHeight();
      //$('.category_box_main').matchHeight();
      $('.blog_block').matchHeight();
      $('.next_pre_post_sec a h4').matchHeight();
      $('.ann_about_sec_match_height').matchHeight();

    });
 </script>

<script>
    $(document).ready(function () {
        var height_box = $('.match_inner_height').height();
        $('.match_inner_height_slider').css('height',height_box);
    });
    $( window ).load(function() {
        var height_box = $('.match_inner_height').height();
        $('.match_inner_height_slider').css('height',height_box);
    });
</script>


<!-- Vertical Scroll on click -->
    <script>
        $(document).ready(function () {
            var swiper = new Swiper(".downslider", {
        slidesPerView: 3,
        spaceBetween: 20,
        slidesPerGroup: 1,
        loop: true,
        direction: "vertical",
        navigation: {
          nextEl: ".down_slider_next_arrow",
        },
        breakpoints: {
        1250: {
            slidesPerView: 3,
            spaceBetween: 20,
            slidesPerGroup: 3,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 20,
            slidesPerGroup: 3,
        },
        767: {
            slidesPerView: 3,
            spaceBetween: 20,
            slidesPerGroup: 1,
        },
        479: {
            slidesPerView: 1,
            spaceBetween: 20,
            slidesPerGroup: 1,

        },

        },
      });
        });
    </script>


<!--Sticky Header    -->

<script>

	 $(window).scroll(function() {

	if($(window).scrollTop() > 300) {
	$('.sticky_header').addClass('header_is_sticky');
	}
	else
	{
	$('.sticky_header').removeClass('header_is_sticky');
	}

	});


</script>


<!--Scroll top    -->
 	<script>

		//bottom to top

	    $(window).scroll(function() {
	    if ($(this).scrollTop() > 300) {
	        $('.scroll-top').fadeIn();
	    } else {
	        $('.scroll-top').fadeOut();
	    }
	  });

	  $(".scroll-top").click(function() {
	      $("html, body").animate({scrollTop: 0}, 900);
	   });

	</script>



<!-- Mobile Navigation-->

<script>

    $=jQuery;



    $(document).ready(function() {



    $(".nav-menu").append("<div class='cross_button afclr'><a><i class='m_close_icon' aria-hidden='true'></i></a></div>");



    $(".cross_button").click(function() {



    $(".nav-menu").removeClass("state-active");



    $(".overlay").removeClass("active");



    $("body").removeClass('no_overflow');



    $(".cross_button").closest(".body_shift").parent().removeClass("no_overflow");



});


});


</script>

<script>
    $(document).ready(function () {
        new WOW().init();
    });
    $(window).resize(function () {
        new WOW().init();
    });
</script>





<script>
        var swiper = new Swiper(".homepage__banner__slider", {
        slidesPerView: 1,
        spaceBetween: 20,
        speed:1000,
        loop: true,
        navigation: {
          nextEl: ".homepage__banner__slider_next",
          prevEl: ".homepage__banner__slider_prev",
        },
        autoplay:
        {
        enabled: true,
        delay: 3000,
        },
      });
</script>

<script>
        var swiper = new Swiper(".ads_slider", {
        slidesPerView: 1,
        spaceBetween: 20,
        speed:1000,
        loop: true,
        navigation: {
          nextEl: ".ads_slider_next_btn",
          prevEl: ".ads_slider_prev_btn",
        },
        pagination: {
          el: ".ads_slider_pagination",
        },
        autoplay:
        {
        enabled: true,
        delay: 4000,
        },
      });

</script>




<script>
       $(window).load(function () {
        var swiper = new Swiper('.sponsers_slider', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        speed: 5000,
        autoplay: {
            enabled: true,
            delay: 1000,
        },
        breakpoints: {
		  479: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      }
    });
       });
</script>



<!-- Begin Constant Contact Active Forms -->
<script> var _ctct_m = "3ba23778383207f0a3cbb0e2bd570e6d"; </script>
<script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
<!-- End Constant Contact Active Forms -->


</body>
</html>
