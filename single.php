<?php
	get_header();
?>

<section class="container min_height single clearfix">
	<h2><?php the_title(); ?></h2>
	<hr>
	<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
	?>

			<article>
				<?php the_content(); ?>
			</article>

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