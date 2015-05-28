<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>
	<div class="background">
	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer whiteback" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<div class="Content-text">

					<div class="u-gridRow">									
						<div class="adress-map u-gridCol12">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow">
						<h2><?php the_title(); ?></h2>
						<div class="adress-map u-gridCol8">						
							<p class="contact-page-p">Heeft u vragen? Wij staan voor u klaar!

							Kom even langs in de winkel of bel tijdens onze openingstijden. 
							Mailen kan natuurlijk ook of vul hieronder ons online contactformulier in. Wij streven ernaar uw e-mail binnen twee werkdagen te beantwoorden.</p>
							<?php the_content(); ?>
						
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<a href="/home">
			                        <div class="logo">
			                            <img>   
			                        </div>  
			                    </a>
								<p>Prinses Irenelaan 94</p>
								<p>2404 BJ Alphen aan den Rijn</p>
								<p><i class="fa fa-envelope"></i>&nbsp;info@van6enklaar.nl</p>
								<p><i class="fa fa-phone"></i>&nbsp;0172 - 491 419</p>
								<img class="alignnone size-full wp-image-62 piccontact" src="http://van6enklaar.lijktmeduidelijk.nl/files/2015/05/Afb_over-ons.jpg" alt="Afb_over-ons" width="192" height="192" />
								<img class="alignnone wp-image-64 size-full" src="http://van6enklaar.lijktmeduidelijk.nl/files/2015/05/tekstwolk_over_ons.gif" alt="tekstwolk_over_ons" width="188" height="123" />
							</div>
	
						</div>	
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>
</div>
<?php get_footer(); ?>



