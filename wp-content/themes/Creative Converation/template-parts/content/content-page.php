<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Creative Converation 1.0
 */

?>


<div class="header_banner_section afclr">
        <div class="home_banner_sec add_overlay_on_slider">
             <?php
                $header_background_image = get_field('header_background_image');
                if( !empty( $header_background_image ) ){ ?>
                    <img src="<?php echo esc_url($header_background_image['url']); ?>" alt="<?php echo esc_attr($header_background_image['alt']); ?>" />
                <?php }else{ ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/inner_page_crtedit.jpg" alt="Art News Now">
                <?php } ?>

            <div class="home_text">
                <div class="wrapper afclr">

					<h1><?php $header_title = get_field('header_title'); if(!empty($header_title)){ echo $header_title; }else{ the_title(); } ?></h1>
                        <p><?php the_field('header_subtitle'); ?></p>
                </div>
            </div>
            </div>
</div>


<article>

<?php
$id = get_the_ID();
$post = get_post($id);
$content = apply_filters('the_content', $post->post_content);
echo $content;
?>


</article>
