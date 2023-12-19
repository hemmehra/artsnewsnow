<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Creative Converation 1.0
 */

get_header();
?>
<?php
$id = get_the_ID();
$post = get_post($id);
$content = apply_filters('the_content', $post->post_content);
echo $content;
?>


<div class="single_art_news_sec afclr">
	<div class="single-page-wrapper afclr">
		<div class="single_art_news_sec_inner afclr">
		<?php echo do_shortcode('[next_pre_post_for_art_news_shortcode]'); ?>
		</div>
	</div>
</div>




<section>
    <div class="single_post_ads_section afclr">
		<div class="single-page-wrapper afclr">
			<div class="banner_first">
				<div class="swiper ads_slider">
					<div class="swiper-wrapper">
					<?php if( have_rows('about_section_bottom_ad',5) ): ?>
						<?php while( have_rows('about_section_bottom_ad',5) ): the_row();
							$ad_image = get_sub_field('ad_image');
							$ad_link = get_sub_field('ad_link');
							?>
							<div class="swiper-slide">
								<a href="<?php echo $ad_link; ?>" target="_blank"><img src="<?php echo esc_url($ad_image['url']); ?>" alt="<?php echo esc_attr($ad_image['alt']); ?>" /></a>
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
	</div>
</section>


<?php
get_footer();
?>