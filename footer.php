<footer>
    <div class="row footer">
        <div class="six columns footer1">
            <?php dynamic_sidebar('FooterMap'); ?>
        </div>

        <div class="six columns footer1">
            <div class="row">
                <div class="one-third column footerparts">
                </div>
                <div class="one-third column footerparts">
                </div>
                <div class="one-third column footerparts">
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
