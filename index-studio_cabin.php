<?php 
/*
Template Name: Studio Cabin
*/
?>

<section class="cabinphoto">
	<img><?php the_field('cabin_photo'); ?></img>
</section>

<section class="cabinpage">

	</h1><?php get_title(); ?>

	<p><?php the_field('cabin_description'); ?></p>
	
	<h2>Art making features:</h2>
	<p><?php the_field('features_art'); ?></p>
	
	<h2>Standard cabin features include:</h2>
	<p><?php the_field('features_cabin'); ?></p>
	
	<h3>Once accepted <a>(application process)</a>:</h3>
	<p><?php the_field('cost_mealplan'); ?> per night without <a>meal plan</a></p>
	<p><?php the_field('cost_nomeal'); ?> per night with meal plan</p>
	
	<a class="button_green">check availability</a>
	
</section>






