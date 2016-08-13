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
			<a href="<?php the_field('landing_page_link'); ?>" target="_blank" class="btn">Get Started Now</a>
			<?php 

				$image_1 = get_field('image_1');
				$size = 'medium'; // (thumbnail, medium, large, full or custom size)

				if( $image_1 ) {

					echo wp_get_attachment_image( $image_1, $size );

				}

			?>
			<h3><?php echo "About Me"; ?></h3>
				<?php the_field('about_me'); ?>
			<h3><?php echo "About Our Team"; ?></h3>
				<?php the_field('about_our_team'); ?>
			<h3><?php echo "Email"; ?></h3>
				<?php the_field('email'); ?>
			<h3><?php echo "facebook"; ?></h3>
				<?php the_field('facebook'); ?>
			<h3><?php echo "instagram"; ?></h3>
				<?php the_field('instagram'); ?>
			<h3><?php echo "youtube"; ?></h3>
				<?php the_field('youtube'); ?>
			
				
			
		</div>
	</div>
</section>

<?php get_footer(); ?>