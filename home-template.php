<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<?php
$count_our_food = 0;
// check if the flexible content field has rows of data
if( have_rows('home_blocks') ):

// loop through the rows of data
    while ( have_rows('home_blocks') ) : the_row();


        if( get_row_layout() == 'video_section' ): ?>
            <section class="banner-video">
                <video autoplay loop muted class="wrapper__video">
                  <source src="<?php the_sub_field('video_url_section'); ?>">
                </video>
            </section>
            <?php
          elseif( get_row_layout() == 'banner_header' ):

            ?>

            <section class="banner-top">
                <div class="container">
                    <div class="animation-element content-text-top animaleft">
                        <h2 class="headding-title-cs extra-bold"><?php the_sub_field('title'); ?></h2>
                        <p><?php the_sub_field('text'); ?></p>
                    </div>
                    <div class="animation-element animate-img-card">
                        <div class="content-effect-images">
                            <?php if(get_sub_field('img_1')): ?>
                                <img src="<?php echo wp_get_attachment_image_src(get_sub_field('img_1'), 'full')[0]; ?>" class="ef-img-1 delay-1">
                            <?php endif; ?>
                            <?php if(get_sub_field('img_1')): ?>
                                <img src="<?php echo wp_get_attachment_image_src(get_sub_field('img_2'), 'full')[0]; ?>" class="ef-img-2 delay-2">
                            <?php endif; ?>
                            <?php if(get_sub_field('img_1')): ?>
                                <img src="<?php echo wp_get_attachment_image_src(get_sub_field('img_3'), 'full')[0]; ?>" class="ef-img-3 delay-3">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <?php
        elseif( get_row_layout() == 'grid_section' ): 
            ?>
            <section class="grid-section">
                <div class="container">
                    <div class="animation-element animatop">
                        <h2 class="headding-title-cs extra-bold"><?php the_sub_field('title'); ?></h2>
                    </div>
                    <div class="animation-element animatop">
                        <div class="content-grid-section">
                            <?php 
                            if( have_rows('row_item') ):
                                while ( have_rows('row_item') ) : the_row(); ?>
                                    <div class="content-row-grid-section">
                                        <?php $group1 = get_sub_field('tab_item_1');
                                        if( $group1 ): ?>
                                            <div class="col-item-grid-section">
                                                <div class="img-item-grid-section">
                                                    <img src="<?php echo wp_get_attachment_image_src($group1['img_item'], 'full')[0]; ?>">
                                                </div>
                                                <h3 class="headding-title-cs">
                                                    <?php echo $group1['title_item']; ?>   
                                                </h3>
                                                <p class="text-grid-section">
                                                    <?php echo $group1['text_item']; ?>
                                                </p>
                                            </div>
                                            <?php
                                        endif;
                                        $group2 = get_sub_field('tab_item_2');
                                        if( $group2 ): ?>
                                            <div class="col-item-grid-section">
                                                <div class="img-item-grid-section">
                                                    <img src="<?php echo wp_get_attachment_image_src($group2['img_item'], 'full')[0]; ?>">
                                                </div>
                                                <h3 class="headding-title-cs">
                                                    <?php echo $group2['title_item']; ?>   
                                                </h3>
                                                <p class="text-grid-section">
                                                    <?php echo $group2['text_item']; ?>
                                                </p>
                                            </div>
                                            <?php  
                                        endif;
                                        $group3 = get_sub_field('tab_item_3');
                                        if( $group3 ): ?>
                                            <div class="col-item-grid-section">
                                                <div class="img-item-grid-section">
                                                    <img src="<?php echo wp_get_attachment_image_src($group3['img_item'], 'full')[0]; ?>">
                                                </div>
                                                <h3 class="headding-title-cs">
                                                    <?php echo $group3['title_item']; ?>   
                                                </h3>
                                                <p class="text-grid-section">
                                                    <?php echo $group3['text_item']; ?>
                                                </p>
                                            </div>
                                            <?php  
                                        endif; ?>
                                    </div>
                                <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </section> 

            <?php
        elseif( get_row_layout() == 'section_image_bg' ):
            ?>
            <section class="bg-img-bg_section" style="background: url(<?php echo wp_get_attachment_image_src(get_sub_field('bg_imagen'), 'full')[0]; ?>)">
                <div class="container">
                    <div class="animation-element animaleft content-text-imagen-section">
                        <h2 class="headding-title-cs extra-bold"><?php the_sub_field('title'); ?></h2>
                        <p><?php the_sub_field('text'); ?></p>
                        <a href="<?php the_sub_field('url_button'); ?>"><?php the_sub_field('button_text'); ?></a>
                    </div>
                </div>
            </section>

            <?php 
            elseif( get_row_layout() == 'gallery_section_cs' ): ?>
                <section class="gallery_section_cs">
                    <div class="container">
                        <div class="animation-element animatop">
                            <h2 class="headding-title-cs extra-bold"><?php the_sub_field('title'); ?></h2>
                        </div>
                    </div>
                    <div class="container-full">
                        <div class="container-gallery-cs">

                            <?php 
                            $img_gallery = get_sub_field('gallery');
                            $size_img    = 'full';
                            if ($img_gallery): ?>
                                <div class="owl-carousel gallery-slide item-image" >   
                                    <?php foreach( $img_gallery as $img_id ): ?>
                                        <div class="item gallery_item">
                                            <div class="img_gallery_slide">
                                                <?php echo wp_get_attachment_image( $img_id, $size_img ); ?>   
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>

                <?php 
                elseif(get_row_layout() == 'text-button_section_cs'): ?>

                    <section class="text-button_section_cs">
                        <div class="container">
                            <div class="animation-element animaleft content-text-imagen-section">
                                <h2 class="headding-title-cs extra-bold"><?php the_sub_field('title'); ?></h2>
                                <a href="<?php the_sub_field('url_button'); ?>"><?php the_sub_field('text_button'); ?></a>
                            </div>
                        </div>
                    </section>

                <?php
                elseif(get_row_layout() == 'our_food_slide_cs'): $count_our_food++; ?>

                    <section class="our_food_slide_cs <?php echo 'bg-'.get_sub_field('style_section'); ?> <?php echo ($count_our_food == 1)?'first-section-number':''; ?>">
   						<div class="container-full number__bg_cs">
   							<div class="container">
   								<div class="content__number_cs animation-element animatop">
   									<?php echo sprintf("%02d", $count_our_food); ?>
   								</div>
   							</div>
   						</div>
                        <div class="container-full container-bgt-our-food">
                        	<div class="container">
                        		<div class="animation-element animaleft content-text-our-food">
	                        		<h4><?php the_sub_field('title_1'); ?></h4>
	                        		<h2 class="headding-title-cs extra-bold">
	                        			<?php the_sub_field('title_2'); ?>
	                        		</h2>
	                        		<p><?php the_sub_field('text'); ?></p>
	                        	</div>
                        	</div>
                        	<div class="container-gallery-cs animation-element animatop">
	                            <?php 
	                            $img_slide = get_sub_field('slide');
	                            if ($img_slide): ?>
	                                <div class="owl-carousel gallery-slide item-image" >   
	                                    <?php foreach( $img_slide as $slide_id ): ?>
	                                        <div class="item gallery_item">
	                                            <div class="img_gallery_slide">
	                                                <?php echo wp_get_attachment_image( $slide_id, 'full' ); ?>   
	                                            </div>
	                                        </div>
	                                    <?php endforeach; ?>
	                                </div>
	                            <?php endif; ?>
	                        </div>
                        </div>
                    </section>  

				<?php
                endif;

            endwhile;

        else :

// no layouts found

        endif;

        ?>

<?php get_footer(); ?>