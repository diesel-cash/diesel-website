<?php
/**
 * Template Name: Custom Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<section id="home" class="background-fixed">
		<div class="intro background-fixed">
			<div class="container">
			  	<?php // get_template_part('templates/page', 'header'); ?>
			  	<?php get_template_part('templates/content', 'page'); ?>
		  	</div>
	  	</div>
  	</section>
<?php endwhile; ?>
