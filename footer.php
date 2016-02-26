<footer>
    <div class="row">
        <div class="twelve columns footer1">
            <?php dynamic_sidebar('FooterMap'); ?>
        </div>
    </div>
    <div class="row footer">
        <div class="four columns">
            <?php dynamic_sidebar('Footer1'); ?>
        </div>
        <div class="four columns social">
            <?php dynamic_sidebar('Social Media'); ?>
        </div>
        <div class="four columns">
            <?php dynamic_sidebar('Footer2'); ?>
        </div>
    </div>



    <div class="row copy">
        <div class="twelve columns"><p class="copy">&copy; <?php bloginfo('author');?> <?php the_time('Y');?></p></div>
    </div>



</footer>




<?php wp_footer([
    'theme_location' => 'footer'


]); ?>

    </body>
</html>
