<?php
/*

**  Template Name: Arts Events Openings
*/

get_header(); ?>


<?php
$id = get_the_ID();
$post = get_post($id);
$content = apply_filters('the_content', $post->post_content);
echo $content;
?>


<?php get_footer();

