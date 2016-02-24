<?php
/*
Template Name: Om
*/
get_header();

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];


if(have_posts()) :
    while (have_posts()) : the_post();

?>
        <main>
            <div class="container">
                <div class="row below-header">
                    <h2 class="header-text"><?php the_content();?></h2>
                    <div class="about-us">

        <?php
        $pages = get_pages(array('child_of'=> $post->ID ,'sort_order'=> 'asc', 'sort_column' => 'menu_order'));
        ?>

                    <?php
                    $count = 1;
                    foreach ($pages as $page) {
                        ?>
                        <div class="three columns workers">
                            <div class="employes">

                            <p><?php echo $page->post_content; ?></p>
                        </div>
                        </div>


                          <?php if($count % 4 == 0) {?>
                                </div>
                                <div class="row">
                                <div class="about-us">
                          <?php }
                        $count++;
                    }
                    ?>
                </div>
                </div>
            </div>
                <div class="row">
                    <div class="twelve columns introduction">
                        <?php dynamic_sidebar('Our Workers'); ?>
                        <div class="row">
                            <div class="twelve columns social-media2">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon-white.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/instagram-icon-black.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/instagram-icon-white.png'" class="icons" alt="instagramIcon"></a>
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon-white.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/facebook-icon-black.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/facebook-icon-white.png'" class="icons" alt="facebookIcon"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="twelve columns">
                        <div class="instagramflow">

                        </div>
                    </div>
                </div>

        </main>
    <?php
    endwhile;

else :
    echo "No content available!";

endif;

get_footer();
?>
