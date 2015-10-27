<?php

/*
Template Name: Contact Template
 */
get_header();
?>

<section class="container clearfix">
	<address>
	<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
				the_content();
			endwhile;
		else :
			echo '<p>No content found</p>';
		endif;
	?>
	</address>
	<div class="map">
		<h2>Find Us On Google Map</h2>
		<hr>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.4614765525826!2d174.73721120000002!3d-36.7834845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d39a5e4c5c339%3A0x79940766ffb0a038!2s126+Sunnybrae+Rd%2C+Hillcrest%2C+Auckland+0627!5e0!3m2!1sen!2snz!4v1443082275425" width="550" height="265" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>

<section class="container contact_form clearfix">
	<h2>Contact Us</h2>
	<hr>
	<?php
		if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
	?>
</section>

<?php
	get_footer();
?>