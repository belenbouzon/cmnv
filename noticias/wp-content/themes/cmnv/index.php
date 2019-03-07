<?php 
/**
 * CONTENT
 */
?>

<?php get_header(); ?>


	<div class="wrapper">
    	
        <div class="content">



			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php get_template_part( 'navigation', 'none' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'none' ); ?>
				
			<?php endif; ?>




		</div>
	
	


<?php get_footer(); ?>