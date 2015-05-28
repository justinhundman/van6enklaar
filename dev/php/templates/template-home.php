<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
	<div class="background">
		<div class="u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol2">
					<div class="curtains">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/curtainl2.png" />  
                    </div> 
				</div>
					<div class="u-gridCol4 buttonref">
						<div style="position:relative;">
							<div class="raamkozijn">
							</div>
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
						<div class="recentiehome">
							<h5><font color="red">"</font>&nbsp;&nbsp;&nbsp;Het is wederom een plaatje,<br>
								bedankt voor de service.&nbsp;&nbsp;&nbsp;<font color="red">"</font>
							</h5>
								<p>Fam. Wielemaker</p><br>
						</div>
						<button class="onlineafspraak" type="button">MEER REFERENTIES</button>
					</div>
					<div class="u-gridCol2">
					<div class="curtains">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/curtainr2.png" />  
                    </div> 
					</div>
					<div class="u-gridRow">
						<div class="whitehome whiteback">
							<div class="u-gridCol2 whiteback">
								<div>
								<h5>Persoonlijk <font color="red">+</font> Praktisch</h5>
								Voor een goed advies op 
								maat nemen we de tijd om 
								uw wensen in kaart te 
								brengen. We denken mee 
								over uw persoonlijke smaak, 
								woonsituatie, budget, etc.
								<p>
								</div>
								<div>
								<h5>Kwaliteit <font color="red">+</font> service</h5>
								Door onze ruime ervaring 
								weten we hoe belangrijk 
								kwaliteit en een goede service 
								zijn. Die kwaliteit begint bij 
								onze producten en ziet u 
								terug in een professioneel 
								advies. Bij de afwerking 
								hebben onze vakmensen oog 
								voor detail en persoonlijke 
								service.<p>
								</div>
								<div>
								<h5>Merken <font color="red">+</font> collecties</h5>
								Het is onmogelijk om alle 
								collecties hier te laten zien. 
								Kom voor inspiratie en advies 
								naar onze gezellige winkel 
								in Alphen aan den Rijn. 
								Ervaar welke materialen het 
								best bij uw wensen aansluiten.<br><br>
								Samen komen we tot het 
								mooiste resultaat!
								<h5>Ronald Stoetzer  <font color="red">+</font>  team</h5><p>
								</div>
							</div>
							<div class="u-gridCol2 whiteback">
								<button class="onlineafspraak" type="button">MAAK ONLINE EEN AFSPRAAK</button>
								<div class="buttonraam marginbutton">
									<div class="redbutton">
										RAMEN
									</div>
									<div class="whitebutton">
										Meer informatie
									</div>
								</div>
								<div class="buttonvloer marginbutton">
									<div class="redbutton">
										VLOEREN
									</div>
									<div class="whitebutton">
										Meer informatie
									</div>
								</div>
								<div class="buttonshowroom marginbutton">
									<div class="redbutton">
										SHOWROOM
									</div>
									<div class="whitebutton">
										Meer informatie
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>

<?php get_footer(); ?>
