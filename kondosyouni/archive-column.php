<?php
/*
Template Name:小児歯科ブログ blog_syouni_cate
Template Post Type: page
*/
?>
<?php include_once('header.php'); ?>

<style>
<!--
.blog_list a{
	color:#666 !important;
}
.blog_list a:hover dd{
	text-decoration:underline;
}
.blog_list dt{
	font-weight:normal;
}
.blog_list dt span,
.blog_list dt em{
	margin-right:1em;
	font-style:normal;
	min-width:9em;
	display:inline-block;
}
.blog_list dt em:before{
	content:"≫";
}
.blog_list dt span{
	font-weight:bold;
		font-size:110%;
		color:#336699;
}
.blog_list dd{
	margin:0.5em auto 3em auto;
	width:92%;
}
.blog_list dd:after {
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}
.blog_list dd img{
	width:60px;
	height:60px;
	display:block;
	margin:0 1.5em 0.5em 0;
	float:left;
}

.pager{
	display:block;
	clear:both;
	width:100%;
	text-align:center;
}
.pager>a,
.pager>span{
	display:inline-block;
	padding:0.5em 1em;
  text-align: center;
  flex-grow: 1;
}
.pager>span{
	font-weight:bold;
}



-->
</style>

<?php //wp_get_archives(); ?>

          <div class="row breadcrumb-wrap">            <div class="span12"></div>	</div>
          <div class="row outside-main-visual-wrap">            <div class="span12"></div>	</div>

          <div class="row">
           <?php include_once('sidebar.php'); ?>
            <div class="span9" data-role="contents">
            	<div class='row' data-module-type='container'>
                	<div class=' span9' data-module-type='cell'>
                    	<div data-module-type='heading'>
                            <h1 class="design-tmpl h2-cute-yellow" data-default-design="cute" data-default-color="yellow" data-design-class="h2-cute-yellow">お役立ち情報
                            </h1>
                        </div>
                    </div>
                </div>

            <div class='row' data-module-type='container'>
            	<div class=' span9' data-module-type='cell'>
                	<div data-module-type='paragraph-editable'>
                          <div data-layout="1">
                            <div>
                             <!-- パンくずリストここから -->
                              <p><a href="<?php echo home_url('/'); ?>" class="" data-page-id="52860a9a6253dc972f00038c" data-heading-id="">立川小児矯正なら近藤歯科クリニック</a>＞お役立ち情報一覧</p>
                             <!-- パンくずリストここまで -->
                            </div>
                          </div>
                     </div>
                 </div>
             </div>

             <div class='row' data-module-type='container'>
             	<div class=' span9' data-module-type='cell'>
                	<div data-module-type='heading'>
                        <h3 class="design-tmpl h3-cute-yellow" data-default-design="cute" data-default-color="yellow" data-design-class="h3-cute-yellow">
                        お役立ち情報一覧
                        </h3>
                    </div>
                </div>
             </div>

            <div class='row' data-module-type='container'>
                <div class=' span9' data-module-type='cell'>
                    <div data-module-type='pwithimg-editable' class="blog_list">


<?php


$max_c=get_option('posts_per_page');

$paged = (int) get_query_var('paged', 1);
$args = array(
	'posts_per_page' =>$max_c,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => array('column'),
	'post_status' => 'publish'
);
$the_query = new WP_Query($args);

if ( $the_query->have_posts() ) :
	echo '<div class="contents">';
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
		<dl>
		<a href="<?php echo esc_url(get_permalink()); ?>">
		<dt><em><?php the_time('Y年n月j日'); ?></em><span><?php the_title(); ?></span></dt>
        <dd>
		<img src="<?php echo catch_that_image(); ?>" />
		<?php the_excerpt();?>
        </dd>
		<?php //the_content(); ?>
        </a>
        </dl>

<?php endwhile; else: ?>
<p>現在記事の投稿がありません。</p>
                        <?php endif; ?>
<?php echo '</div>';?>
        </section>




                  </div>
                    </div>
                 </div>
            </div>


<?php
if ($the_query->max_num_pages > 1) {
?>
    <div class='row' data-module-type='container'>
            <div class=' span9' data-module-type='cell'>
                    <div data-module-type='paragraph-editable'>
                          <div data-layout="1">
                                <div class="pager">
                                <?php
                                if ($the_query->max_num_pages > 1) {
                                    echo paginate_links(array(
                                        'current' => max(1, $paged),
                                        'total' => $the_query->max_num_pages
                                    ));
                                }
                                ?>
                                </div>
                          </div>
                    </div>
            </div>
	</div>
<?php
 }
?>

</div>
          <?php include_once('footer.php'); ?>
