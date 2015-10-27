<?php
	get_header();
?>

	<!-- slider start -->
	<section class="slider">
		<?php masterslider(1); ?>
	</section><!-- slider end -->

	<!-- home items start -->
	<section class="container clearfix">
	<?php
		$products = new WP_Query('cat=1');

		if ($products->have_posts()) :
			while ($products->have_posts()) : $products->the_post();
	?>
		<div class="homeitem">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('product-thumbnail'); ?></a>
			<div class="cover"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		</div>
	<?php
			endwhile;
		else :
			echo '<p>No content found</p>';
		endif;
			wp_reset_postdata();
	?>
	</section>
	<!-- home ites end -->
	<section class="container" style="margin-top:20px;">
		<h2>Partnering With</h2>
		<hr>
		<a href="http://www.mitre10.co.nz/"><img src="<?php echo get_template_directory_uri() ?>/imgs/p1.png" alt=""></a>
		<a href="#"><img src="<?php echo get_template_directory_uri() ?>/imgs/p2.png" alt=""></a>
		<a href="http://chancecon.co.nz"><img src="<?php echo get_template_directory_uri() ?>/imgs/p.png" alt="chancecon.co.nz"></a>
	</section>
<?php
	get_footer();
?>