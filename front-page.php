<?php get_header(); ?>

<?php
    if(have_posts()) :
        while (have_posts()) : the_post(); ?>

<?php global $post; ?>
<div class="header-image" style="background-image:url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'header')[0]; ?>);">
    <h3><?php the_content();?></h3>
</div>
<?php
    endwhile;

else :
    echo "No content available!";

endif;

?>

<div class="container">
    <div class="row">
        <div class="three columns offer">
            <?php dynamic_sidebar('ContentOffer1'); ?>
        </div>
        <div class="three columns offer">
            <?php dynamic_sidebar('ContentOffer2'); ?>
        </div>
        <div class="three columns offer">
            <?php dynamic_sidebar('ContentOffer3'); ?>
        </div>
        <div class="three columns offer">
            <?php dynamic_sidebar('ContentOffer4'); ?>
        </div>
    </div>

    <div class="row">
        <div class="twelve columns introduction">
            <?php dynamic_sidebar('IntroductionFrontPage'); ?>
        </div>
    </div>

    <div class="row">
        <div class="twelve columns instagram">
            <?php dynamic_sidebar('Instagram'); ?>
        </div>
        <div class="twelve columns social-media">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon-green.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/instagram-icon-black.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/instagram-icon-green.png'" class="icons" alt="instagramIcon"></a>

            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon-green.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/facebook-icon-black.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/facebook-icon-green.png'" class="icons" alt="facebookIcon"></a>
        </div>
    </div>

        </div>
    </div>
<?php get_footer(); ?>
