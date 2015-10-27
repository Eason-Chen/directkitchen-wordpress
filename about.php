<?php

/*
Template Name: About Template
 */
get_header();
?>

<section class="container min_height clearfix">
	<h2>About Us</h2>
	<hr>
	<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
	?>
		<article>
		<?php the_content(); ?>
		</article>
	<div class="about_thum">
		<?php the_post_thumbnail('about-thumbnail'); ?>
	</div>
	<?php
			endwhile;
		else :
			echo '<p>No content found</p>';
		endif;
	?>
</section>

<?php
	get_footer();
?>