<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Direct Kitchen</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=News+Cycle">

	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- header start -->
	<header>
		<div class="container clearfix">
			<a href="<?php echo home_url(); ?>" class="logo"></a>
			<nav>
				<?php
					$args = array(
						'theme_location' => 'primary'
					);
				?>
				<?php wp_nav_menu( $args ); ?>
			</nav>
			<div class="open">
				<?php
					$show = new WP_Query('cat=3');

					if ($show->have_posts()) :
						while ($show->have_posts()) : $show->the_post();
				?>
					<div class="phone"><?php the_title(); ?></div>
					<?php the_content(); ?>
				<?php
						endwhile;
					else :
						echo '<p>No content found</p>';
					endif;
						wp_reset_postdata();
				?>
			</div>
		</div>
	</header><!-- header end -->