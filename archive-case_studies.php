<?php get_header(); ?>

<div class="full-container content-grid-studies-case">
	<div class="grid-studies-case" style="color: #fff;">
		<?php
			$args = array(
			    'post_type'=> 'case_studies',
			    'post_status' => 'publish',
			    'posts_per_page' => -1,
			    'order'    => 'ASC'
		    );

		    $the_query = new WP_Query( $args );
			if($the_query->have_posts() ) : 
				while ( $the_query->have_posts() ) : $the_query->the_post();
					$image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', true );
					$title = get_the_title();
					$link = get_permalink( get_the_ID() );
					?>
					<div class="item-grid-studies-case">
						<a href="<?php echo $link; ?>">
							<div class="border-grid">
								<div class="image-grid-studie-case">
									<img src="<?php echo $image_src[0]; ?>">
								</div>
								<div class="title-grid-studie-case">
									<h2><?php echo $title; ?></h2>
								</div>
							</div>
						</a>
					</div>
				<?php endwhile;
			endif;
			
		?>  
	</div>
	<section class="text-button_section_cs">
            <div class="container">
            	<?php 
            	$section_touch = get_field('get_in_touch','option');
            	if($section_touch): ?>

	                <div class="animation-element animaleft content-text-imagen-section">
	                <h2 class="headding-title-cs extra-bold"><?php echo $section_touch['title']; ?></h2>
	                <a href="<?php echo $section_touch['url_button']; ?>"><?php echo $section_touch['text_button']; ?></a>

	            <?php endif; ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>