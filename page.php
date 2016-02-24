<?php get_header(); ?>
<div class="main container white-box" id="white-box">
    <div class="row" id="content">
    
        <?php
            if(have_posts()) :
                while (have_posts()) : the_post(); ?>

        
        <p><?php the_content();?></p>

            <?php
                endwhile;

            else :
                echo "No content available!";

            endif;

        ?>
       
    </div>
   </div>
<?php get_footer(); ?>
