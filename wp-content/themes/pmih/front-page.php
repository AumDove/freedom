<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage PMIH
 * @since PMIH 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
			
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<a href="<?php the_field('landing_page_link'); ?>" target="_blank" class="btn">Get Started Now</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>