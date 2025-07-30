<?php
/*
Template Name:index
*/
?>
<?php include_once('header.php'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
<?php include_once('footer.php'); ?>
