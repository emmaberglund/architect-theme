<?php get_header(); ?>

<?php
    if(have_posts()) :
        while (have_posts()) : the_post(); ?>

<?php global $post; ?>
<div class="header-image" style="background-image:url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'header')[0]; ?>);">

</div>
<?php
    endwhile;

else :
    echo "No content available!";

endif;

?>
<?php
$pages = get_pages(array('child_of'=> $post->ID ,'sort_order'=> 'asc', 'sort_column' => 'menu_order'));
?>
<div class="container">
    <div class="news-container">
        <?php
        //replace post_parent value with your portfolio page id:
        $args=array(
            'post_type' => 'page',
            'post_parent' => 8,
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'caller_get_posts'=> 1
        );
        $my_query = null;
        $my_query = new WP_Query($args);
        //echo "<pre>"; print_r($my_query); echo "</pre>";
        if( $my_query->have_posts() ) {
            echo''; // Här kan man skriva en rubrik
            while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="three columns news" style="background-image:url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($page->ID), 'large')[0]; ?>);">
                        <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                            <path d="M0,0C0,0,0,180,0,180C0,180,90,130,90,130C90,130,180,180,180,180C180,180,180,0,180,0C180,0,0,0,0,0" style="fill:#ffffff"></path>
                            <path d="M0,0C0,0,0,50,0,50C0,50,90,70,90,70C90,70,180,50,180,50C180,50,180,0,180,0C180,0,0,0,0,0" style="fill:#ffffff"></path>
                            <desc>Created with Snap</desc><defs></defs></svg>
                        <div class="fig">
                        <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                        <?php
                        global $more; $more = false;
                        ?>
                        <?php the_content('Read on....');?>
                            <button class="view-button">Läs mer</button>
                    </div>
                    </div>
             <?php
            endwhile;

        }
        wp_reset_query();  // Restore global post data stomped by the_post().
        ?>
    </div>
</div>
<?php get_footer(); ?>
