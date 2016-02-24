<?php
get_header(); ?>
    <div id="main" class="container">
        <div class="row">
            <div class="one column"></div>
                <div class="twelve columns white-box" id="content white box">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h2 id="h2-single"><?php the_title(); ?></h2>
                        
                        <p class="post-info">
                            <?php the_time('j F, Y - H:i') ?> 
                        </p>
                    
                        <p class="image-p"><?php the_post_thumbnail('banner_image');?></p>
                    
                        
                        <p><?php the_content(__('(more...)')); ?></p>
                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

                </div>
        
        </div>
    </div>
    <div id="delimiter">
    </div>

<?php get_footer(); ?>