<?php
/**
 * The template for displaying the policies page.
 *
 * 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PMIH
 */

get_header(); ?>

<section class="default-page">		
	<div class="main-content">
		<?php while ( have_posts() ): the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<h3><?php echo "Privacy Policy"; ?></h3>
				<?php the_field('privacy_policy'); ?>
			<h3><?php echo "Terms & Conditions"; ?></h3>
				<?php the_field('terms_&_conditions'); ?>
			<h3><?php echo "Income Disclaimer"; ?></h3>
				<?php the_field('income_disclaimer'); ?>
		<?php endwhile; ?>
	</div>
	
	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>