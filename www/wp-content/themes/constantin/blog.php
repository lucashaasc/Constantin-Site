<?php
/*
Template Name: Blog page
*/
?>

<?php get_header(); ?>


<div style="width:100%; height:250px">
<div style="width:940px; height:30px; margin:0 auto; position:relative; top:130px">
<h1>NEWS</h1>
</div></div>

		<div id="newscontainer">
			    
			    
			    
			    <?php query_posts('category_name=featuredlarge&showposts=1'); ?>
			    <?php while (have_posts()) : the_post(); ?>
			       <div id="featurednew1">
			       <a href="<?php the_permalink(); ?>">
			       <?php
			        if(has_post_thumbnail()){ the_post_thumbnail( array(630,360) ); }
			        else{ echo ''; }
			       ?>
	
			       </a>
			       </div>
			    <?php endwhile; ?>
			    <?php wp_reset_query(); ?>
			    
			    
			    <?php query_posts('category_name=featuredsmall1&showposts=1'); ?>
			    <?php while (have_posts()) : the_post(); ?>
			       <div class="featured2">
		<a href="<?php the_permalink(); ?>">
		<?php
		 if(has_post_thumbnail()){ the_post_thumbnail( array(367,172) ); }
		 else{ echo '<img src="'.get_bloginfo("template_url").'/i/no-image.png" />'; }
		?>

		</a>
			       </div>
			       <?php endwhile; ?>
			       <?php wp_reset_query(); ?>
			       
			       
			       <?php query_posts('category_name=featuredsmall2&showposts=1'); ?>
			       <?php while (have_posts()) : the_post(); ?>
			       <div class="featured3">
			       <a href="<?php the_permalink(); ?>">
			       <?php
			        if(has_post_thumbnail()){ the_post_thumbnail( array(367,172) ); }
			        else{ echo '<img src="'.get_bloginfo("template_url").'/i/no-image.png" />'; }
			       ?>
		
			       </a>
			       </div>
			       <?php endwhile; ?>
			       <?php wp_reset_query(); ?>
			    
			        <ol>
			
			
			<?php query_posts('category_name=news&showposts=20'); ?>
			<?php while (have_posts()) : the_post(); ?>
			            <li>
			            <?php
			             if(has_post_thumbnail()){ the_post_thumbnail( array(320,172) ); }
			             else{ echo '<img src="'.get_bloginfo("template_url").'/i/no-image.png" />'; }
			            ?>
			            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			            
			            <?php the_excerpt(); ?>
			                
			             <span class="barr">
			             <span class="cmtnbr"><?php comments_popup_link(__('<span>0</span>'), __('<span>1</span> Comment'), __('<span>%</span> Comments'), '', __('')); ?></span>
			             <a class="gotoblk" href="<?php the_permalink(); ?>">link</a>
			             </span>
			             </li>
<?php endwhile; ?>
<?php wp_reset_query(); ?>







			            
			            
			            
			               
			          
			
			</ol>


			


</div>

<br class="c"/>

<?php get_footer(); ?>