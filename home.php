<?php
/*
 * Template Name: home
 * description: >-
  Page template without sidebar
 */
?>
<?php get_header();?>
    <?php $loop = new WP_Query( array( 'post_type' => 'titre','orderby'=> array('date' =>'ASC') )); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
       <p>
            <a href="<?php the_permalink();?>">
                <?php echo get_the_title();?>
            </a>
       </p> 
    <?php endwhile;?>

<?php get_footer();?>