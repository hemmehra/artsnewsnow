<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
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
$header_ad = get_field('header_ads_image',773);

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" type="image/gif" sizes="16x16">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/swiper.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<?php if( !empty( $header_ad['url'] ) ): ?>
<div class="header_ad_banner afclr">
    <div class="wrapper afclr">
        <div class="header_ad_banner_inner afclr">
            <div class="ad_details_container">
                <div class="ad_details ad_details_header afclr">
                    <h2><?php the_field('header_ads_image_size_details'); ?></h2>
                    <p><?php the_field('header_ads_price_details'); ?></p>
                </div>
                <?php /*?>
                <div class="ad_contact_btn afclr">
                    <a href="<?php echo get_permalink(27 ); ?>" class="site_btn">Contact us for this ad space</a>
                </div>
                <?php */ ?>
            </div>
            <div class="header_ad_sec header_ad_sec-ads afclr">
                <a href="<?php echo $header_ad_link; ?>"><img src="<?php echo esc_url($header_ad['url']); ?>" alt="<?php echo esc_attr($header_ad['alt']); ?>" /></a>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

<div class="sticky_header afclr">
	<div class="top_header_s afclr">
	   <div class="wrapper afclr">
	      <div class="sticky_info afclr">
	         <div class="sticky_info_in">
                    <div class="top_center_menu">
                        <div class="site-menu afclr">

                        <a href="javascript:void(1)" class="menu_expand afclr">

                        <i></i>

                        <i></i>

                        <i></i>

                        </a>

                        <?php wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_class' => 'nav-menu afclr'
                            ) ) ?>
                        </div>
                    </div>

					<div class="header_login_section afclr">

                        <div class="Get_quote_btn afclr">
							<a href="<?php echo get_permalink(705); ?>" class="site_btn">Support Arts News</a>
						</div>

					</div>
			    </div>

				</div>
	         </div>
	      </div>
</div>

	<header class="main_header_section afclr">

		<div class="main-top-section afclr">
			<div class="wrapper afclr">
				<div class="main-top-inner">
                    <div class="h_social_header_section afclr">
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

                    <div class="logo_bdr">

                           <div class="logo_img">
                               <a href="<?php echo home_url( ); ?>">
							   <?php
									if( !empty( $logo ) ){ ?>
										<img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
									<?php }else{ ?>
										<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="creative-conversations-logo">
									<?php } ?>
									<?php echo $logo_subtitle; ?>
								</a>
                           </div>

                     </div>

					<div class="header_donate_section afclr">

                        <div class="Get_quote_btn afclr">
							<a href="<?php echo get_permalink(705); ?>" class="site_btn">Support Arts News</a>
						</div>

					</div>

				</div>
			</div>

		</div>

        <section>
            <div class="main-menus-section afclr">
                <div class="wrapper afclr">
                    <div class="main-menu-inner">
                        <div class="main-left-menu">

                            <div class="site-menu afclr">

                                <a href="javascript:void(1)" class="menu_expand afclr">

                                <i></i>

                                <i></i>

                                <i></i>

                                </a>

                                <?php wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_class' => 'nav-menu afclr'
                            ) ) ?>

                        </div>
                    </div>
                <div class="h_shop_header_section afclr">
                    <ul>
                        <li><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448 449L301.2 300.2c20-27.9 31.9-62.2 31.9-99.2 0-93.1-74.7-168.9-166.5-168.9C74.7 32 0 107.8 0 200.9s74.7 168.9 166.5 168.9c39.8 0 76.3-14.2 105-37.9l146 148.1 30.5-31zM166.5 330.8c-70.6 0-128.1-58.3-128.1-129.9S95.9 71 166.5 71s128.1 58.3 128.1 129.9-57.4 129.9-128.1 129.9z"/></svg></a></li>

                        <!-- <li><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M352 160v-32C352 57.42 294.579 0 224 0 153.42 0 96 57.42 96 128v32H0v272c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V160h-96zm-192-32c0-35.29 28.71-64 64-64s64 28.71 64 64v32H160v-32zm160 120c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zm-192 0c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24z"/></svg></a></li> -->
                    </ul>

                </div>
            </div>
            </div>
            </div>


        </section>

	</header>


<div id="page" class="site">

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">


