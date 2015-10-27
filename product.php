<?php

/*
Template Name: Product Template
 */

get_header();
?>

<section class="container">
	<h2>Our Products</h2>
	<hr>
	<?php
		$products = new WP_Query('cat=1');

		if ($products->have_posts()) :
			while ($products->have_posts()) : $products->the_post();
	?>
	<div class="product clearfix">
		<div class="product_img">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('product-thumbnail'); ?></a>
			<div class="cover"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		</div>
		<article>
			<?php echo get_the_excerpt(); ?>
		</article>
	</div>
	<?php
			endwhile;

		else :
			echo '<p>No content found</p>';
		endif;
		wp_reset_postdata();
	?>
</section>

<?php
	get_footer();
?>