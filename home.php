<?php
/*
 * Template Name: home
 * description: >-
  Page template without sidebar
 */
?>
<?php get_header();?>
    <?php $loop = new WP_Query( array( 'post_type' => 'titre','orderby'=> array('date' =>'ASC') )); ?>
    <div class=" row titres">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-12 col-md-6">
            <a href="<?php the_permalink();?>">
                <?php echo get_the_title();?>
            </a>
       </div> 
    <?php endwhile;?>
    </div>

<?php get_footer();?>