<?php
/*
Template Name: Ramen
*/
?>
 
<?php get_header(); ?> 
	<div class="background">
		<div class="u-gridContainer whiteback">
			<div class="u-gridRow whiteback paddingsite marginsite">
					<div class="u-gridCol4 marginleftleft">
						<div style="position:relative; margin-top: 54px;">
							<div class="raamkozijn">
							</div>
							<div class="Slider"> <!-- Dit is de slider in de onderkant header -->
							                   <?php

															$args = array(
																'post_type' => 'slideramen',
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
						<div class="u-gridCol6 marginleft contentpagina">
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
						<div class="u-gridCol2" style="margin-top: 8px;">
								<button class="onlineafspraak" type="button">MAAK ONLINE EEN AFSPRAAK</button>
								<a href="/ramen">
									<div class="buttonraam marginbutton">
										<div class="redbutton">
											RAMEN
										</div>
										<div class="whitebutton">
											Meer informatie
										</div>
									</div>
								</a>
								<a href="/vloeren">
									<div class="buttonvloer marginbutton">
										<div class="redbutton">
											VLOEREN
										</div>
										<div class="whitebutton">
											Meer informatie
										</div>
									</div>
								</a>
								<a href="/showroom">
									<div class="buttonshowroom marginbutton">
										<div class="redbutton">
											SHOWROOM
										</div>
										<div class="whitebutton">
											Meer informatie
										</div>
									</div>
								</a>
						</div> 
				</div>
				<div class="u-gridRow spacepicture">
				<!-- Lightbox usage markup -->
					<!-- thumbnail image wrapped in a link -->
					<div class="u-gridCol2"> 
						<a href="#img1">
						  	<div class="borderpic marginbutton">
						  		<img src="http://van6enklaar.lijktmeduidelijk.nl/files/2015/06/buttonramen1.jpg" />  
							</div>
						</a>
						<!-- lightbox container hidden with CSS -->
						<a href="#_" class="lightbox" id="img1"> 
						 		<img src="http://van6enklaar.lijktmeduidelijk.nl/files/2015/06/gordijnen.jpg" />  
						</a>
					</div>
					<div class="u-gridCol2">
						<a href="#img2">
						  	<div class="borderpic marginbutton">
						  		<img src="http://van6enklaar.lijktmeduidelijk.nl/files/2015/06/buttonramen2.jpg" />
							</div>
						</a>
						<!-- lightbox container hidden with CSS -->
						<a href="#_" class="lightbox" id="img2">
						  	<img src="http://van6enklaar.lijktmeduidelijk.nl/files/2015/06/gordijnen2.jpg" />  
						</a>
					</div>
					<div class="u-gridCol2">
						<a href="#img3">
						  	<div class="borderpic marginbutton">
						  		<img src="http://van6enklaar.lijktmeduidelijk.nl/files/2015/06/buttonramen3.jpg" />  
							</div>
						</a>
						<!-- lightbox container hidden with CSS -->
						<a href="#_" class="lightbox" id="img3">
						    <img src="http://van6enklaar.lijktmeduidelijk.nl/files/2015/06/vert-jaloezien.jpg" />  
						</a>
					</div>
					<div class="u-gridCol2">
						<a href="#img4">
						  	<div class="borderpic marginbutton">
						  		<img src="http://van6enklaar.lijktmeduidelijk.nl/files/2015/06/buttonramen4.jpg" />  
							</div>
						</a>
						<!-- lightbox container hidden with CSS -->
						<a href="#_" class="lightbox" id="img4">
						  	<img src="http://van6enklaar.lijktmeduidelijk.nl/files/2015/06/gordijnen-wie-zij-wij.jpg" /> 
						</a>
					</div>
					<div class="u-gridCol2 spaceright tekstspace">
								 <div class="buttontekst marginbutton">
								</div>
					</div>
				</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
