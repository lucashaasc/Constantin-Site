<?php 
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

	<div id="myCarousel" class="carousel slide">
		<div class="transparent-bg"></div>
		<div class="carousel-inner">
			<?php echo do_shortcode('[mega-slider id="29"/]'); ?>
		</div>
	</div>

	<div class="container titulo-conteudo">
		<div class="row">
			<div class="span8">
				<h3>
					<?php 
						if (qtrans_getLanguage() == 'en') {
						  echo 'NEWS';
						} elseif (qtrans_getLanguage() == 'de') {
						  echo 'NIEUWS';
						}
					?>
				</h3>
			</div>
			<div class="span4">
				<h3 class="coroa">
					<?php 
						if (qtrans_getLanguage() == 'en') {
						  echo 'BECAME A MEMBER';
						} elseif (qtrans_getLanguage() == 'de') {
						  echo 'LID WORDEN';
						}
					?>
				</h3>
				<small>
					<?php 
						if (qtrans_getLanguage() == 'en') {
						  echo 'of our special club'; 
						} elseif (qtrans_getLanguage() == 'de') {
						  echo 'van onze speciale club';
						}
					?>
				</small>
			</div>
		</div>
	</div>

	<div class="container conteudo-home">
		<div class="row">
			<div class="span12">
				<ul class="thumbnails">
		            <?php $my_query = new WP_Query('showposts=2'); ?>
	            	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>                
	            		<li class="span4">
			                <div class="thumbnail">
	            				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('home-post'); ?></a>
	            				<div class="caption">
		            				<h4><?php the_title(); ?></h4>
		            				<?php the_excerpt(); ?>
		            				<p>
		            					<a class="btn btn-primary" href="#">
		            					<?php 
											if (qtrans_getLanguage() == 'en') {
											  echo 'READ MORE';
											} elseif (qtrans_getLanguage() == 'de') {
											  echo 'LESS MEER';
											}
										?>
		            					</a>
		            				</p>
	            				</div>
	            			</div>
	            		</li>
	            	<?php endwhile; ?>
	            	<?php wp_reset_postdata(); ?>
		            <li class="span4">
	                	<div class="caption">
	                    	<?php echo do_shortcode('[mc4wp-form]'); ?>
	                  	</div>

		                <h3>
		                	<?php 
								if (qtrans_getLanguage() == 'en') {
								  echo 'WHERE TO BUY';
								} elseif (qtrans_getLanguage() == 'de') {
								  echo 'WAAR TE KOOP';
								}
							?>
		                </h3>
		                <img src="<?php bloginfo("template_url"); ?>/images/cc.png" alt="">
		            </li>
	            </ul>
	        </div>
		</div>
	</div>

	<div class="container-fluid video-conteudo">
		<div class="container">
			<div class="row">
				<div class="span7">
					<?php echo get_post_meta($post->ID, 'video', single); ?>
				</div>
				<div class="span5 text-video">
					
					<h4>
						<?php 
							if (qtrans_getLanguage() == 'en') {
							  
							  echo get_post_meta($post->ID, 'titulo-en', single);
							  
							} elseif (qtrans_getLanguage() == 'de') {
							  
							  echo get_post_meta($post->ID, 'titulo-de', single);
							  
							}
						?>
					</h4>
					<p>
						<?php 
							if (qtrans_getLanguage() == 'en') {
							  
							  echo get_post_meta($post->ID, 'texto-en', single);
							  
							} elseif (qtrans_getLanguage() == 'de') {
							  
							  echo get_post_meta($post->ID, 'texto-de', single);
							  
							}
						?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php wp_reset_postdata(); ?>
	<div class="container-fluid since-conteudo">
		<div class="container">
			<div class="row">
				<div class="span12">
					<h4>
						<?php  if (qtrans_getLanguage() == 'en') { echo get_post_meta($post->ID, 'titulo-q-en', single); } elseif (qtrans_getLanguage() == 'de') { echo get_post_meta($post->ID, 'titulo-q-de', single); } ?>
						<br/>
						<span class="small-since"><?php  if (qtrans_getLanguage() == 'en') { echo get_post_meta($post->ID, 'subtitulo-q-en', single); } elseif (qtrans_getLanguage() == 'de') { echo get_post_meta($post->ID, 'subtitulo-q-de', single); } ?></span>
					</h4>
					<p>
						<?php  if (qtrans_getLanguage() == 'en') { echo get_post_meta($post->ID, 'texto-q-en', single); } elseif (qtrans_getLanguage() == 'de') { echo get_post_meta($post->ID, 'texto-q-de', single); } ?>
					</p>
					<a class="btn btn-primary" href="#">
						<?php 
							if (qtrans_getLanguage() == 'en') {
							  echo 'KNOW MORE';
							} elseif (qtrans_getLanguage() == 'de') {
							  echo 'MEER WETEN';
							}
						?>
					</a>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>