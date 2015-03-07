<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?> 

<div class="home">

	<section id="home1">
		<h2><?php the_field('taglineA1'); ?></h2>
		<h3><?php the_field('taglineB1'); ?></h3>
		<img src="<?php the_field('home_background1'); ?>" alt="cabin in the woods" />
	</section>

	<section id="home2">
		<h2><?php the_field('taglineA2'); ?></h2>
		<h3><?php the_field('taglineB2'); ?></h3>
		<img src="<?php the_field('home_background2'); ?>" alt="cabin in the woods" />
	</section>


	<section id="home3">
		<h2><?php the_field('taglineA3'); ?></h2>
		<h3><?php the_field('taglineB3'); ?></h3>
		<img src="<?php the_field('home_background3'); ?>" alt="cabin in the woods" />
	</section>


	<section id="home4">
		<h2><?php the_field('taglineA4'); ?></h2>
		<h3><?php the_field('taglineB4'); ?></h3>
		<img src="<?php the_field('home_background4'); ?>" alt="cabin in the woods" />
	</section>

</div>

<?php get_footer(); ?>
