<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<section class="entry-content">
        <h2><?php the_title() ?></h2>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'top-forum' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'top-forum' ),
				'after'  => '</div>',
			)
		);
		?>
	</section><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
