<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PMIH
 */

get_header(); ?>

<section class="single-page" >
		
	<div class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php comments_template(); ?>
		<?php endwhile; ?>
	</div>
		
	<?php get_sidebar(); ?>
	
	<div id="navigation" class="container">
		<div class="left"><a href="<?php echo site_url('/blog/') ?>">&larr; <span>Back to posts</span></a></div>
    </div>
</section>

<?php get_footer(); ?>
