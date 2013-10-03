<?php get_header(); ?>

	<div id="myCarousel" class="carousel slide">
		<?php
		foreach((get_the_category()) as $cat) {
		?>
		<div class="carousel-inner" style="background: url(<?php echo z_taxonomy_image_url($cat->term_id); ?>) no-repeat fixed center top / cover  #000000;">
			<div class="container single-int">
		<?php
		$categoryname = $cat->cat_name;
		}
		?>
				<?php the_post(); ?>
				<h2><?php echo $categoryname; ?></h2>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-white">
		<div class="container bg-grey">
			
			<div class="row single-text">
				<div class="span5">
					<div class="border">
						<span class="breadcrumbs"><?php if(function_exists('bcn_display')) { bcn_display(); } ?></span>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<small>Details</small>

						<?php if (get_field('configuracao')): ?>
			                <?php while (has_sub_fields('configuracao')): ?>

			                    <?php if (get_sub_field('adicionais')): ?>
				                    <?php while (has_sub_fields('adicionais')): ?>
										
										<?php  
										$adds = get_sub_field('add'); 
										?>
										<?php  
											switch ($adds) {
												case 'caixa': echo "<div class=".'caixa'."><span>".get_sub_field('nome-r')."</span></div>"; break;
												case 'pulseira': echo "<div class=".'pulseira'."><span>".get_sub_field('nome-r')."</span></div>"; break;
												case 'visor': echo "<div class=".'visor'."><span>".get_sub_field('nome-r')."</span></div>"; break;
												case 'cronografo': echo "<div class=".'cronografo'."><span>".get_sub_field('nome-r')."</span></div>"; break;
												case 'calendario': echo "<div class=".'calendario'."><span>".get_sub_field('nome-r')."</span></div>"; break;
												case 'movimento': echo "<div class=".'movimento'."><span>".get_sub_field('nome-r')."</span></div>"; break;
												case 'fecho_deployant': echo "<div class=".'fecho-deployant'."><span>".get_sub_field('nome-r')."</span></div>"; break;
												case 'escala_taqueometrica': echo "<div class=".'escala-taqueometrica'."><span>".get_sub_field('nome-r')."</span></div>"; break;
												case 'water_resistance': echo "<div class=".'water-resistance'."><span>".get_sub_field('nome-r')."</span></div>"; break;
												case 'mostrador': echo "<div class=".'mostrador'."><span>".get_sub_field('nome-r')."</span></div>"; break;
												case 'maquinario_aparente': echo "<div class=".'maquinario-aparente'."><span>".get_sub_field('nome-r')."</span></div>"; break;
												case 'cristais_especiais': echo "<div class=".'cristais-especiais'."><span>".get_sub_field('nome-r')."</span></div>"; break;

												default: break;
											}	
										?>
				                    <?php endwhile; ?>
			                    <?php endif; ?>

			                <?php endwhile; ?>
			            <?php endif; ?>

					</div>
					
				</div>
				<div class="span7 bg-white int-image-single">
					<?php $images = get_field('galeria'); if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                    <img src="<?php echo $image['sizes']['slide-int']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endforeach; ?>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid black-grey related-post">
		<div class="container">
			<div class="row">
				<div class="span12">
					<h4>
						<?php 
							if (qtrans_getLanguage() == 'en') {
							  echo 'MORE FROM THIS COLLECTION';
							} elseif (qtrans_getLanguage() == 'de') {
							  echo 'MEER VAN DEZE COLLECTIE';
							}
						?>
					</h4>	
				</div>
			</div>
		</div>
		<?php wp_reset_query(); ?>
		<div class="container">
			<div class="row sponsorship-post-list">
                    <?php
                    $tags = wp_get_post_tags($post->ID);
                    if ($tags) {
                        $tag_ids = array();
                        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                    
                        $args=array(
                            'post_type' => 'produto',
                            "$tax" => $tax_term->slug,
                            'post_status' => 'publish',
                            'orderby' => rand,
                            'tag__in' => $tag_ids,
                            'post__not_in' => array($post->ID),
                            'showposts'=>4, // Quantidade de itens na lista
                            'caller_get_posts'=>1
                        );
                        $my_query = new wp_query($args); if( $my_query->have_posts() ) {
                            while ($my_query->have_posts()) {$my_query->the_post();
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
                        }
                      	}
                    }
                    wp_reset_query();
                    ?>
                </ul>
			</div>
		</div>
	</div>
	

<?php get_footer(); ?>