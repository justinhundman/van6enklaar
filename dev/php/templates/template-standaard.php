<?php
/*
Template Name: Standaard
*/
?>

<?php get_header(); ?>
	<div class="background">  
		<div class="u-gridContainer ">
			<div class="u-gridRow">
				<div class="u-gridCol4">
					<div class="raamkozijn">
							<div class="Slider"> <!-- Dit is de slider in de onderkant header -->
							                   <?php

															$args = array(
																'post_type' => 'slides',
																'posts_per_page'=>999
															);
															$slides = new WP_Query( $args );
															$num = count($slides);
															$counter = 0;
															if( $slides->have_posts() ) {
																while( $slides->have_posts() ) {
																	$slides->the_post();
																	$counter++;
																	?>
																	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
																		  $image_url = $image[0];
																	?>
																	<div class="slide">
																		<img src="<?php echo $image_url; ?>" >
																	</div>
																	<?php
																}
															}
														?>
							</div> 
						</div>
					</div>
						<div class="u-gridCol7 margincontent whiteback">
							<div> 
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<article class="Content Content--twosidebar" id="post-<?php the_ID(); ?>">
										<h2><?php the_title(); ?></h2>
										<div>
											<?php the_content(); ?>
										</div>
									</article>
								<?php endwhile; endif; ?>
							</div>
						</div> 
				</div>
		</div>
	</div>

<?php get_footer(); ?>
