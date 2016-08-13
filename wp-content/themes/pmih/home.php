<?php
/**
 * The template for displaying blog page.
 *
 * This is the template that displays blog pages by default.
 * 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PMIH
 */

get_header(); ?>

<section class="default-page">		
	<div class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<h2 class="entry-title"><?php the_title(); ?></h2>
			<article class="post-entry">
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	</div>
	
	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>