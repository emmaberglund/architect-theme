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
                    <div class="twelve columns">
                        <h3><?php the_content();?></h3>
                    </div>
                </div>

                <?php


                $pages = get_pages(array('child_of'=> $post->ID ,'sort_order'=> 'asc', 'sort_column' => 'menu_order'));
                ?>

                <div class="row">
                    <?php
                    foreach ($pages as $page) {
                    ?>


                    <div class="workers four columns">
                        <?php echo get_the_post_thumbnail( $page->ID, array(200, 200)  ); ?>
                        <h3><?php echo $page->post_title; ?></h3>
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
