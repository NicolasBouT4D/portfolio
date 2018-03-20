<?php 
    /* Template Name: Template Home */ 
?>

<?php get_header(); ?>

<?php
    $features = get_posts( array( 
        'posts_per_page' => -1,
        'post_type' => 'features',
        'post_status' => 'publish',
        'orderby' => 'post_date',
        'order' => 'DESC'
    ));

    foreach( $features as $feature) {
        if( get_field('position', $feature->ID) == "left" ){
            echo '<h2>'.get_the_title($feature->ID).'</h2>';
        }
    }
?>


<?php get_footer(); ?>