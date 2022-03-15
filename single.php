<?php
get_header();
?>

	<section id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>
        <img class="slider_img" src="<?php the_field('slider_img'); ?>">
	</section><!-- #main -->


<?php
get_footer();

