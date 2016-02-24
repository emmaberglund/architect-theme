<?php
get_header(); ?>
    <div id="main" class="container">
        <div class="row">
            
                <div id="content" class="eight columns white-box">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h2 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        
                        <p class="post-info" id="post-info">
                            <?php the_time('j F, Y - H:i') ?> 
                            
                            
                        </p>
                    
                        <p class="image-p"><?php the_post_thumbnail('banner_small');?></p>
                    
                        
                        <p class="content-text"><?php the_content(__('(more...)')); ?></p>
                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

                </div>
            <div class="four columns white-box">
                <?php dynamic_sidebar('Sidebar1'); ?>
            
            
            </div>
            
       
        </div>
    </div>
    <div id="delimiter">
    </div>

<?php get_footer(); ?>