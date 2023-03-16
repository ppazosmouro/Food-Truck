<?php get_header(); ?>

	<div class="container-full post-case-studies-cs">

		<section class="image-section-header">
			<div class="bg-image-section">
				<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')); ?>">
			</div>
		</section>
		<?php

		// check if the flexible content field has rows of data
		if( have_rows('home_blocks') ):

		// loop through the rows of data
		    while ( have_rows('home_blocks') ) : the_row();

		    	if( get_row_layout() == 'section_left_text' ): ?>
		    		<style type="text/css">
		    			.headding-title-cs.normal-size-cs span{
		    				color: <?php the_field('page_color'); ?>
		    			}
		    		</style>
		    	<?php endif; ?>

				<?php if( get_row_layout() == 'section_left_text' ): ?>

					<section class="section_left_text">
						<div class="container">
							<div class="col-50">
								<?php if(get_sub_field('logo')): ?>
									<div class="img-logo-cs animation-element animatop">
										<img src="<?php echo wp_get_attachment_image_src(get_sub_field('logo'), 'full')[0]; ?>">
									</div>
								<?php endif; ?>
								<div class="content-text animation-element animatop">
									<h2 class="headding-title-cs extra-bold normal-size-cs"><?php the_sub_field('title'); ?></h2>
									<p><?php the_sub_field('text'); ?></p>
								</div>
							</div>
						</div>
					</section>

				<?php elseif( get_row_layout() == 'images_right_effect' ): ?>

					<section class="images_right_effect">
						<div class="container-full">
							<div class="content-images-cs-right">
								<?php if(get_sub_field('img_1')): ?>
									<div class="item-img-cs-rigt img-cs-right-1 animation-element animatop">
										<img src="<?php echo wp_get_attachment_image_src(get_sub_field('img_1'), 'full')[0]; ?>">
									</div>
								<?php endif; ?>
								<?php if(get_sub_field('img_2')): ?>
									<div class="item-img-cs-rigt img-cs-right-2 animation-element animatop">
										<img src="<?php echo wp_get_attachment_image_src(get_sub_field('img_2'), 'full')[0]; ?>">
									</div>
								<?php endif; ?>
							</div>
						</div>
					</section>

				<?php elseif( get_row_layout() == 'section_right_text' ): ?>

					<section class="section_right_text">
						<div class="container">
							<div class="col-50">
								<div class="content-text animation-element animatop">
									<h2 class="headding-title-cs extra-bold normal-size-cs"><?php the_sub_field('title'); ?></h2>
									<p><?php the_sub_field('text'); ?></p>
								</div>
							</div>
						</div>
					</section>

				<?php elseif( get_row_layout() == 'images_left_effect' ): ?>

					<section class="images_left_effect">
						<div class="container-full">
							<div class="content-images-cs-left">
								<?php if(get_sub_field('img_1')): ?>
									<div class="item-img-cs-left img-cs-left-1 animation-element animatop">
										<img src="<?php echo wp_get_attachment_image_src(get_sub_field('img_1'), 'full')[0]; ?>">
									</div>
								<?php endif; ?>
								<?php if(get_sub_field('img_2')): ?>
									<div class="item-img-cs-left img-cs-left-2 animation-element animatop">
										<img src="<?php echo wp_get_attachment_image_src(get_sub_field('img_2'), 'full')[0]; ?>">
									</div>
								<?php endif; ?>
								<?php if(get_sub_field('img_3')): ?>
									<div class="item-img-cs-left img-cs-left-3 animation-element animatop">
										<img src="<?php echo wp_get_attachment_image_src(get_sub_field('img_3'), 'full')[0]; ?>">
									</div>
								<?php endif; ?>
							</div>
						</div>
					</section>

				<?php elseif( get_row_layout() == 'section_left_text_2' ): ?>

					<section class="section_left_text">
						<div class="container">
							<div class="col-50">
								<div class="content-text animation-element animatop">
									<h2 class="headding-title-cs extra-bold normal-size-cs"><?php the_sub_field('title'); ?></h2>
									<p><?php the_sub_field('text'); ?></p>
								</div>
							</div>
						</div>
					</section>

				<?php elseif( get_row_layout() == 'images_right_effect_2' ): ?>

					<section class="images_right_effect section_2">
						<div class="container-full">
							<div class="content-images-cs-right">
								<?php if(get_sub_field('img_1')): ?>
									<div class="item-img-cs-rigt img-cs-right-1 animation-element animatop">
										<img src="<?php echo wp_get_attachment_image_src(get_sub_field('img_1'), 'full')[0]; ?>">
									</div>
								<?php endif; ?>
								<?php if(get_sub_field('img_2')): ?>
									<div class="item-img-cs-rigt img-cs-right-2 animation-element animatop">
										<img src="<?php echo wp_get_attachment_image_src(get_sub_field('img_2'), 'full')[0]; ?>">
									</div>
								<?php endif; ?>
							</div>
						</div>
					</section>

				<?php elseif( get_row_layout() == 'section_left_text_small' ): ?>

					<section class="section_left_text small_col-cs">
						<div class="container">
							<div class="col-40">
								<div class="content-text animation-element animatop">
									<h2 class="headding-title-cs extra-bold normal-size-cs"><?php the_sub_field('title'); ?></h2>
									<p><?php the_sub_field('text'); ?></p>
								</div>
							</div>
						</div>
					</section>

				<?php elseif( get_row_layout() == 'cols_numbers' ): ?>

							<section class="cols_numbers">
								<div class="container">
									<div class="container-flex-numbers">
										<?php if( have_rows('item_number') ):
											 while( have_rows('item_number') ): the_row(); ?>
												<div class="content-text content-numbers-section animation-element animatop">
													<h2 class="number-cs extra-bold">
														+<span class="ef-number-cs"><?php the_sub_field('number'); ?></span><?php the_sub_field('number_short'); ?>
													</h2>
													<h3><?php the_sub_field('text'); ?></h3>
												</div>
											<?php endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
							</section>
					
				<?php endif;
			endwhile;
		endif; ?>

		<?php 
			$more_case = get_field('more_case_studies');

			if( $more_case ): ?>

				<section class="more_case_studies">
					<div class="container-full">

							<div class="content-text animation-element animatop">
								<div class="container">
									<h2 class="headding-title-cs extra-bold more_case_studies_title"><?php echo $more_case['title']; ?></h2>
								</div>
								<div class="grid-studies-case" style="">
									<?php if(count($more_case['select_case_studies']) === 3):
											foreach ( $more_case['select_case_studies']  as $single_case ) : ?>
											<div class="item-grid-studies-case">
												<a href="<?php echo get_permalink( $single_case ); ?>">
													<div class="border-grid">
														<div class="image-grid-studie-case">
															<img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $single_case ), 'large', true )[0]; ?>">
														</div>
														<div class="title-grid-studie-case">
															<h2><?php echo get_the_title($single_case); ?></h2>
														</div>
													</div>
												</a>
											</div>
									<?php endforeach;
										else: 
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
											endif; ?> 
									<?php endif;?>
								</div>
							</div>
						
					</div>
				</section>

		<?php else: ?>

			<section class="more_case_studies">
				<div class="container-full">
					<div class="content-text animation-element animatop">
						<div class="container">
							<h2 class="headding-title-cs extra-bold more_case_studies_title">More Case Studies</h2>
						</div>
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
								endif; ?>  
						</div>
					</div>
				</div>
			</section>
					
		<?php endif; ?>

		<?php $section_touch = get_field('get_in_touch');
	          if($section_touch): ?>
					<section class="text-button_section_cs">
			            <div class="container">
					            <div class="animation-element animaleft content-text-imagen-section">
					            <h2 class="headding-title-cs extra-bold"><?php echo $section_touch['title']; ?></h2>
					            <a href="<?php echo $section_touch['url_button']; ?>"><?php echo $section_touch['text_button']; ?></a>
				            </div>
				        </div>
			    	</section>
    	<?php endif; ?>
		
	</div>

<?php get_footer(); ?>