<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Creative Converation 1.0
 */

get_header();
?>


<div class="header_banner_section page_not_found afclr">
        <div class="home_banner_sec">
            <img src="<?php bloginfo('template_directory'); ?>/images/home-banner.jpg" alt="CREATIVE-CONVERSATIONS">

            <div class="home_text">
                <div class="wrapper afclr">

					<h1>404</h1>
					<p>Page Not Found</p>
                </div>
            </div>
            </div>
</div>

<?php
get_footer();
