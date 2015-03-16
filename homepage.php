<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?> 

<div class="home">

	<?php if (function_exists('slideshow')) { slideshow($output = true, $post_id = false, $gallery_id = false, $params = array()); } ?>

</div>

<?php get_footer(); ?>
