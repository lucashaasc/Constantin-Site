<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">

<div style="width:100%; height:150px"></div>

		<div id="content" role="main">
<div style="width:100%; height:auto;background:#141414">
<div style="width:960px; height:auto; margin:0 auto; padding:50px 0 200px 0">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

<span style="color:#a3a3a3"><?php the_content(); ?></span>

				<?php comments_template(); ?>

			<?php endwhile; ?>
<?php else : ?>
<h2>Error 404</h2>
<p align="center">Nothing found.</p>
<?php endif; ?>

</div><!-- /styled div -->
</div><!-- /styled div -->


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>