<?php /* Template Name: About */ ?>

<?php get_header(); ?>
<div class="main-content-about-page">
    <?php
    $count_our_food = 0;
    // check if the flexible content field has rows of data
    if( have_rows('about_blocks') ):

    // loop through the rows of data
    while ( have_rows('about_blocks') ) : the_row();


        if( get_row_layout() == 'video_section' ): ?>
            <section class="banner-video">
                <video autoplay loop muted class="wrapper__video">
                  <source src="<?php the_sub_field('video_url_section'); ?>">
                </video>
            </section>
            <?php
          elseif( get_row_layout() == 'banner_header' ): ?>

            <section class="banner-top">
                <div class="container">
                    <div class="animation-element content-text-top animaleft">
                        <h2 class="headding-title-cs extra-bold default-size-about"><?php the_sub_field('title'); ?></h2>
                        <div class="paragraph-content">
                                <?php $paragraph = get_sub_field('paragraph');
                                if( $paragraph ): 
                                    foreach( $paragraph as $parag ): ?>
                                        <div class="paragraph-item">
                                           <h3><?php echo $parag['subtitle']; ?></h3>
                                           <p><?php echo $parag['text']; ?></p>
                                        </div>
                                    <?php endforeach;
                                endif; ?>
                        </div>
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
        elseif( get_row_layout() == 'project_cycle' ): ?>

            <section class="project_cycle bg-white-section">
                <div class="container-full">

                    <div class="container">
                        <div class="col-40">
                           <h2 class="headding-title-cs extra-bold default-size-about"><?php the_sub_field('title'); ?></h2>
                            <p><?php the_sub_field('text'); ?></p> 
                        </div>
                    </div>
                    <div class="content-flex-cycles animation-element">
                        <div class="container">
                            <?php $cycle1 = get_sub_field('cycles_1');
                            if($cycle1): ?>
                                <div class="item-cycle">
                                    <div class="item-img-cs">
                                        <object type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/img/bulb.svg"></object>
                                    </div>
                                    <div class="item-text-flex-cycle">
                                        <h3 class="headding-title-cs"><?php echo $cycle1['titles_cycle']; ?></h3>
                                        <p><?php echo $cycle1['text_cycle']; ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php $cycle2 = get_sub_field('cycles_2');
                            if($cycle2): ?>
                                    <div class="item-cycle">
                                        <div class="item-img-cs">
                                            <object type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/img/bulb.svg"></object>
                                        </div>
                                        <div class="item-text-flex-cycle">
                                            <h3 class="headding-title-cs"><?php echo $cycle2['titles_cycle']; ?></h3>
                                            <p><?php echo $cycle2['text_cycle']; ?></p>
                                        </div>
                                    </div>
                            <?php endif; ?>

                            <?php $cycle3 = get_sub_field('cycles_3');
                            if($cycle3): ?>
                                    <div class="item-cycle">
                                        <div class="item-img-cs">
                                            <object type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/img/bulb.svg"></object>
                                        </div>
                                        <div class="item-text-flex-cycle">
                                            <h3 class="headding-title-cs"><?php echo $cycle3['titles_cycle']; ?></h3>
                                            <p><?php echo $cycle3['text_cycle']; ?></p>
                                        </div>
                                    </div>
                            <?php endif; ?>

                            <?php $cycle4 = get_sub_field('cycles_4');
                            if($cycle4): ?>
                                    <div class="item-cycle">
                                        <div class="item-img-cs">
                                            <object type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/img/bulb.svg"></object>
                                        </div>
                                        <div class="item-text-flex-cycle">
                                            <h3 class="headding-title-cs"><?php echo $cycle4['titles_cycle']; ?></h3>
                                            <p><?php echo $cycle4['text_cycle']; ?></p>
                                        </div>
                                    </div>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </section>

            <?php
            elseif( get_row_layout() == 'map_section_cs' ): ?>

            <section class="section_map_cs">
                <div class="float-text-map-cs">
                    <div class="container contain-text animation-element">
                        <p><?php the_sub_field('float_text'); ?></p>
                    </div>
                </div>
                <div class="container">
                    <div class="col-50">
                        <div class="container-text animation-element">
                            <h2 class="headding-title-cs extra-bold default-size-about"><?php the_sub_field('title'); ?></h2>
                            <p><?php the_sub_field('text'); ?></p> 
                        </div>
                    </div>
                </div>
                <div class="container-full">
                    <div class="action-map-cs animation-element">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/usa-white.png">
                        <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/usa-cro.png"> -->
                        <span id="location_icon_1" class="item-location-cs">
                            <span class="name-icon-cs icon-title-1">Los Angeles</span>
                            <img class="icon-location-cs" src="<?php echo get_stylesheet_directory_uri(); ?>/img/location-icon.png">
                        </span>
                        <span id="location_icon_2" class="item-location-cs">
                            <span class="name-icon-cs icon-title-2">Nevada</span>
                            <img class="icon-location-cs" src="<?php echo get_stylesheet_directory_uri(); ?>/img/location-icon.png">
                        </span>
                        <span id="location_icon_3" class="item-location-cs">
                            <span class="name-icon-cs icon-title-3">Illinois</span>
                            <img class="icon-location-cs" src="<?php echo get_stylesheet_directory_uri(); ?>/img/location-icon.png">
                        </span>
                        <span id="location_icon_4" class="item-location-cs">
                            <span class="name-icon-cs icon-title-4">Texas</span>
                            <img class="icon-location-cs" src="<?php echo get_stylesheet_directory_uri(); ?>/img/location-icon.png">
                        </span>
                        <span id="location_icon_5" class="item-location-cs">
                            <span class="name-icon-cs icon-title-5">Florida</span>
                            <img class="icon-location-cs" src="<?php echo get_stylesheet_directory_uri(); ?>/img/location-icon.png">
                        </span>
                        <span id="location_icon_6" class="item-location-cs">
                            <span class="name-icon-cs icon-title-6">New York</span>
                            <img class="icon-location-cs" src="<?php echo get_stylesheet_directory_uri(); ?>/img/location-icon.png">
                        </span>
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
                endif;

            endwhile;

        else :

    // no layouts found

    endif;

    ?>
</div>
<?php get_footer(); ?>