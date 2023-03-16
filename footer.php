<footer>
    <div class="container">

        <div class="row-footer-1">
            <div class="flex__content_footer">
                <div class="logo-footer">
                    <?php if(get_field('logo_footer','option')): ?>
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php the_field('logo_footer','option') ?>">
                        </a>
                    <?php endif; ?>
                </div>
                <div class="menu-footer">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-2' ) ); ?>
                </div>
                <div class="social-footer">
                    <h3>FOLLOW US</h3>
                    <div class="icons-social">
                        <?php if(get_field('facebook','option')): ?>
                            <a href="<?php the_field('facebook','option'); ?>" target="_blank">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        <?php endif; ?>
                        <?php if(get_field('instagram','option')): ?>
                            <a href="<?php the_field('instagram','option'); ?>" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        <?php endif; ?>
                        <?php if(get_field('linkedin','option')): ?>
                            <a href="<?php the_field('linkedin','option'); ?>" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="phone-footer">
                        <?php if(get_field('phone_number','option')): ?>
                            <p><?php the_field('phone_number','option'); ?></p>
                        <?php endif; ?>  
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="bg__fotter_secondary">
        <div class="container">

            <div class="row-footer-2">
                <div class="flex__content_footer addresses_footer">
                    <div class="item__address">
                        <?php if(get_field('address_1','option')): ?>
                            <?php the_field('address_1','option'); ?>
                        <?php endif; ?>  
                    </div>
                    <div class="item__address">
                        <?php if(get_field('address_2','option')): ?>
                            <?php the_field('address_2','option'); ?>
                        <?php endif; ?>  
                    </div>
                    <div class="item__address">
                        <?php if(get_field('address_3','option')): ?>
                            <?php the_field('address_3','option'); ?>
                        <?php endif; ?>  
                    </div>
                </div>
            </div>

            <div class="copyright__footer">
                <p>COPYRIGHT <?php echo date('Y'); ?> FOOD TRUCK PROMOTIONS</p>
            </div>

        </div>
    </div>   
</footer>
<script>

</script>
<?php wp_footer(); ?>
</body>
</html>