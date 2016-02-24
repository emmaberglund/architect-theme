<?php
/*
Template Name: Nyheter
*/
get_header();

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];


if(have_posts()) :
    while (have_posts()) : the_post();

?>
<main>
    <div class="container services">
        <div class="row below-header">
            <div class="twelve columns">
                <h2 class="header-text"><?php the_content();?></h2>
            </div>
        </div>

<?php


        $pages = get_pages(array('child_of'=> $post->ID ,'sort_order'=> 'asc', 'sort_column' => 'menu_order'));
        ?>

                <div class="row">
                    <?php
                    foreach ($pages as $page) {
                        ?>


                        <div class="service four columns">
                            <div class ="service-img" style="background-image:url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($page->ID), 'medium')[0]; ?>);">
                            </div>
                            <h2><?php echo $page->post_title; ?></h2>
                            <p><?php echo $page->post_content; ?></p>
                        </div>



                          <?php if(1==2) {?>
                                </div>

                          <?php }

                    }
                    ?>

            </div>
        </main>
    <?php
    endwhile;

else :
    echo "No content available!";

endif;

get_footer();
?>
