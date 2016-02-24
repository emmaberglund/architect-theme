<footer>
    <div class="row footer">
        <div class="six columns footer1">
            <?php dynamic_sidebar('FooterMap'); ?>
        </div>

        <div class="six columns footer1">
            <div class="row">
                <div class="one-third column footerparts">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/phone-map3.png" class="contact-icon">
                    <?php dynamic_sidebar('Footer1'); ?>
                </div>
                <div class="one-third column footerparts">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/smartphone.png" class="contact-icon">
                    <?php dynamic_sidebar('Footer2'); ?>
                </div>
                <div class="one-third column footerparts">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/letter3.png" class="contact-icon">
                    <?php dynamic_sidebar('Footer3'); ?>
                </div>
            </div>
        </div>

        <div class="twelve columns"><p class="copy">&copy; <?php bloginfo('author');?> <?php the_time('Y');?></p></div>

    </div>



</footer>




<?php wp_footer([
    'theme_location' => 'footer'


]); ?>

    </body>
</html>
