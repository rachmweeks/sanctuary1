<?php 
/*
Template Name: Studio Cabin
*/
?>


<?php get_header(); ?> 

<main id="cabinpage">

	<section class="cabinphoto">
		<?php if (function_exists('slideshow')) { slideshow($output = true, $post_id = false, $gallery_id="2", $params = array()); } ?>
	</section>

	<section class="cabinpage">

		</h1><?php echo get_the_title(); ?></h1>

		<p><?php the_field('cabin_description'); ?></p>
	
		<h2>Art making features:</h2>
		<p><?php the_field('features_art'); ?></p>
	
		<h2>Standard cabin features include:</h2>
		<p><?php the_field('features_cabin'); ?></p>
	
		<h3>Once accepted <a>(application process)</a>:</h3>
		<p>$<?php the_field('cost_mealplan'); ?> per night without <a>meal plan</a></p>
		<p>$<?php the_field('cost_nomeal'); ?> per night with meal plan</p>
	
		<a class="button_green">check availability</a>
	
	</section>

</main>

<?php get_footer(); ?>



