<?php 
/*
Template Name: Coleção
*/
?>

<?php get_header(); ?>

	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
			<?php echo do_shortcode('[mega-slider id="582"/]'); ?>
		</div>
	</div>
	<div class="container-fluid bg-repeat-colection">
		<div class="container">
			<span class="breadcrumbs collect"><?php if(function_exists('bcn_display')) { bcn_display(); } ?></span>
			<div class="row sponsorship-post-list">
				
	        		<?php
	        			$postcat = get_post_meta($post->ID, 'category-collection', single);
	                    $my_query = new WP_Query( array( 'post_type' => 'produto','cat' => $postcat ) );
	                    while ($my_query->have_posts()) : $my_query->the_post();
	                    $do_not_duplicate = $post->ID;
	                ?>
	                    <div class="span3 view view-tenth">
		                    <a href="<?php the_permalink(); ?>" class="lista_link">
	                        	<?php the_post_thumbnail('int'); ?>
	                    	</a>
		                    <div class="mask">
		                        <h2><?php the_title(); ?></h2>
		                        <a class="info" href="<?php the_permalink(); ?>">
									<?php 
										if (qtrans_getLanguage() == 'en') {
										  echo 'READ MORE';
										} elseif (qtrans_getLanguage() == 'de') {
										  echo 'LESS MEER';
										}
									?>
		                        </a>
		                    </div>
		                </div>
	                <?php
	                endwhile;
	            	wp_reset_query();
	            	?>
	            </ul>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-fluid-desc">
		<div class="container">
			<div class="row">
				<?php
				$image = get_field('image-collection');
				?>
				<div class="span12 footer-colecao" style="background: url(<?php echo $image; ?>)  no-repeat 270px 0 transparent;">
					<h4><?php echo get_post_meta($post->ID, 'title-description', single); ?></h4>
					<p><?php echo get_post_meta($post->ID, 'text-description', single); ?></p>
					<p class="title-collection-desc"><?php echo get_post_meta($post->ID, 'title-image', single); ?></p>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>