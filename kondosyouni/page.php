<?php
/*
Template Name:固定ページ
Template Post Type: post,page
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/design/css/body.css">
<?php
$stylesheet_directory_path = get_stylesheet_directory();
$cssfile=($stylesheet_directory_path.'/design/css/'.attribute_escape( $post->post_name ).'.css');
if (file_exists($cssfile)) :
?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/design/css/<?php echo attribute_escape( $post->post_name )?>.css">
<?php
endif;
?>
<div class="wraper <?php echo attribute_escape( $post->post_name ); ?>">
<div class="right_side">
  <h2 class="design-tmpl h2-cute-yellow" data-default-design="cute" data-default-color="yellow"
    data-design-class="h2-cute-yellow"><?php the_title(); ?></h2>
<?php
echo do_shortcode('[breadcrumbs]');
?>

<?php the_content(); ?>

</div>

<?php include_once('sidebar.php'); ?>

</div>


<?php get_footer(); ?>
