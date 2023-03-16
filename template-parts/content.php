<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Food_Truck_Promotions
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<header class="entry-header header-single-post">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title headding-title-cs extra-bold">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title headding-title-cs extra-bold"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					food_truck_posted_on();
					food_truck_posted_by();
					?>
				</div><!-- .entry-meta -->
				<div class="category-single">
					<?php
						$categories = get_the_category();
						if ( ! empty( $categories && $categories[0]->name != 'Uncategorized' ) ) {
							echo '<h3 class="title-cat">'.esc_html( $categories[0]->name ).'</h3>'; 
						}
					?>
				</div>
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<div>
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'food-truck' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			// wp_link_pages( array(
			// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'food-truck' ),
			// 	'after'  => '</div>',
			// ) );
			?>
		</div><!-- .entry-content -->

	</div>
</article><!-- #post-<?php the_ID(); ?> -->
