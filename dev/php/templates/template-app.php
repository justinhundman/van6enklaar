<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="background">
		<div class="Content Content--app" id="post-<?php the_ID(); ?>">
			<div class="u-gridContainer whiteback">
				<h2><?php the_title(); ?></h2>
				<aside class="u-gridCol4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iphone5s.png" class="App-iphone" />
				</aside>
				<article class="Content-article u-gridCol8" id="post-<?php the_ID(); ?>">
					<?php // the_content(); ?>
					<p>Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.

					Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website.</p>
					<br>
					<p>Download de app hier:</p>



					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplay.jpg" />
					<br>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Unitag_QRCode_6.png" />

					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</article>
			</div> 
		</div> 
	<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer(); ?>


