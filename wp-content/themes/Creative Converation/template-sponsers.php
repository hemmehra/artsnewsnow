<?php
/*

**  Template Name: Sponsers

*/
get_header(); ?>


<div class="header_banner_section afclr">
        <div class="home_banner_sec add_overlay_on_slider">
             <?php
                $header_background_image = get_field('header_background_image');
                if( !empty( $header_background_image ) ){ ?>
                    <img src="<?php echo esc_url($header_background_image['url']); ?>" alt="<?php echo esc_attr($header_background_image['alt']); ?>" />
                <?php }else{ ?>
                    <img src="https://dev4.projectstatus.info/artnewsnow/wp-content/uploads/2022/10/inner_page_crtedit.jpg" alt="Art News Now">
                <?php } ?>

            <div class="home_text">
                <div class="wrapper afclr">

					<h1><?php $header_title = get_field('header_title'); if(!empty($header_title)){ echo $header_title; }else{ the_title(); } ?></h1>
                        <p><?php the_field('header_subtitle'); ?></p>
                </div>
            </div>
            </div>
</div>

<?php
$id = get_the_ID();
$post = get_post($id);
$content = apply_filters('the_content', $post->post_content);
echo $content;
?>

<section>
    <div class="advertise-images sponsers_container">
        <div class="page-wrapper afclr">
    <div class="partner_section afclr">

    <?php if( have_rows('sponsors') ): ?>
    <?php while( have_rows('sponsors') ): the_row();
        $sponsor_image = get_sub_field('sponsor_image');
        $sponsor_link = get_sub_field('sponsor_link');
        ?>

        <div class="partner_section_outer afclr">
            <div class="outer_border afclr">
                <div class="slider_inner afclr">
                    <a href="<?php echo $sponsor_link; ?>" target="_blank">
                      <img alt="partner1" src="<?php echo $sponsor_image['url']; ?>">
                    </a>
                </div>
             </div>
        </div>


        <?php endwhile; ?>
<?php endif; ?>

    </div>
    </div>
    </div>

</section>




<?php get_footer(); ?>

