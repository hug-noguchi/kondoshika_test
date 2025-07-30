<?php
/**
 Template Name: FAQ
 Page Slug: price
 Page Template Name: page-faq.php
 */
the_post();
remove_filter('the_content', 'wpautop');
$price_childs = get_field('price-child');
$price_preventions = get_field('price-prevention');
$price_portions = get_field('price-portion');
$price_mouthpieces = get_field('price-mouthpiece');
 ?>
<section class="l-main">
        <div class="l-section is-lower">
          <div class="l-section is-lower-inner">
            <?php get_template_part('content', 'pan_center'); // パンくず ?>
            <?php the_content()?>
          </div>
        </div>
      </section>
