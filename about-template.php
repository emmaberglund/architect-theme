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
                <div class="header-image" id="header-image-about" style="background-image:url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0]; ?>);"></div>
                <div class="">
                    <div class="row about text-divider">
                        <div class="six columns">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/gear.png" class="icon">
                            <?php dynamic_sidebar('About Us - The Company'); ?>
                        </div>
                        <div class="six columns">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/goals.png" class="icon">
                            <?php dynamic_sidebar('About Us - Vision'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve columns picture-divider">
                            <?php dynamic_sidebar('About Us - Picturedivider'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve columns text-divider2">
                            <?php dynamic_sidebar('About Us - Team'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">

                <?php


                $pages = get_pages(array('child_of'=> $post->ID ,'sort_order'=> 'asc', 'sort_column' => 'menu_order'));
                ?>

                    <?php
                    foreach ($pages as $page) {
                    ?>

                    <label for="person">
                    <div class="workers four columns">
                        <input type="checkbox" id="person">

                            <div class ="workers-image" style="background-image:url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($page->ID), 'large')[0]; ?>);">
                            <h3><?php echo $page->post_title; ?></h3>
                            <p class="worker-title"><?php echo $page->post_content; ?></p>
                        </div>
                        <div class="block-over">
                            <p class="block-over-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel efficitur mi. Nunc vitae aliquet sem. </p>
                        </div>
                    </div>
                    </label>


                    <?php if(1==2) {?>
                </div>

            <?php }

            }
            ?>

            </div>
        </main>
        <div class="row">
            <div class="twelve columns text-divider">
                <?php dynamic_sidebar('Work with Us'); ?>
            </div>
        </div>
    <?php
    endwhile;


else :
    echo "No content available!";

endif;


get_footer();
?>

