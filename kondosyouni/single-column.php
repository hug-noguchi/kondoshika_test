<?php
/*
Template Name:お役立ちコラム column
Template Post Type: post,page
*/
?>
<?php include_once('header.php'); ?>
<style>
<!--
h1,h2,h3,h4{
	font-size:120%;
	margin:1em 0;
	clear:both;
	width:calc(100%-20px);
	max-width:calc(100%-20px);
	padding:10px;

}
h1{
	font-size:150%;
}
h2{
	font-size:140%;
}
h3{
	font-size:130%;
}

ul.pager-list{
  list-style: none;
	display:block;
	clear:both;
	width:100%;
	text-align:center;
}
ul.pager-list>li{
	display:inline-block;
	margin:0 2em;
  text-align: center;
  flex-grow: 1;
}
.clear.txtR{
	clear:both;
	margin-top:2em;
	text-align:right;
	font-size:100%;
	color:#666;
}
[data-module-type=pwithimg-editable] [data-layout^=r] img {
    float: none !important;
    width: auto;
    margin:inherit;
}

-->
</style>

          <div class="row breadcrumb-wrap">            <div class="span12"></div>	</div>
          <div class="row outside-main-visual-wrap">            <div class="span12"></div>	</div>

          <div class="row">
           <?php include_once('sidebar.php'); ?>
            <div class="span9" data-role="contents">
            	<div class='row' data-module-type='container'>
                	<div class=' span9' data-module-type='cell'>
                    	<div data-module-type='heading'>
                            <h2 class="design-tmpl h2-cute-yellow" data-default-design="cute" data-default-color="yellow" data-design-class="h2-cute-yellow">お役立ち情報
                            </h2>
                        </div>
                    </div>
                </div>

            <div class='row' data-module-type='container'>
            	<div class=' span9' data-module-type='cell'>
                	<div data-module-type='paragraph-editable'>
                          <div data-layout="1">
                            <div>
                             <!-- パンくずリストここから -->
                              <p><a href="<?php echo home_url('/'); ?>" class="" data-page-id="52860a9a6253dc972f00038c" data-heading-id="">立川小児矯正なら近藤歯科クリニック</a>＞<a href="<?php echo home_url('/'); ?>column/">お役立ち情報一覧</a>＞<?php the_title();?></p>
                             <!-- パンくずリストここまで -->
                            </div>
                          </div>
                     </div>
                 </div>
             </div>


<?php
if (have_posts()) : while (have_posts()) : the_post();
?>
             <div class='row' data-module-type='container'>
             	<div class=' span9' data-module-type='cell'>
                	<div data-module-type='heading'>
                        <h3 class="design-tmpl h3-cute-yellow" data-default-design="cute" data-default-color="yellow" data-design-class="h3-cute-yellow">
                        <?php the_title(); ?>
                        </h3>
                    </div>
                </div>
             </div>

            <div class='row' data-module-type='container'>
                <div class=' span9' data-module-type='cell'>
                    <div data-module-type='pwithimg-editable'>




<div data-layout="r1">
		<?php the_content(); ?>
<p class="clear txtR"><?php echo the_time('Y年n月j日');?></p>
</div>

<?php endwhile; else: ?>

             <div class='row' data-module-type='container'>
             	<div class=' span9' data-module-type='cell'>
                	<div data-module-type='heading'>
                        <h3 class="design-tmpl h3-cute-yellow" data-default-design="cute" data-default-color="yellow" data-design-class="h3-cute-yellow">
                        ブログ記事がありません
                        </h3>
                    </div>
                </div>
             </div>

<div data-layout="r1">
      <p class="txtC">記事が見つかりませんでした。</p>
</div>

<?php endif; ?>
                  </div>
                    </div>
                 </div>
            </div>



    <div class='row' data-module-type='container'>
    	<div class=' span9' data-module-type='cell'>
        	<div data-module-type='paragraph-editable'>
              <div data-layout="1">
                <ul class="pager-list">
                  <?php
$previous_post = get_previous_post();
if($previous_post->ID!==NULL){
echo '<li><a href="'.home_url('/').'column/?p='.$previous_post->ID.'">&lt;&lt;前の記事</a></li>';
}
echo '<li><a href="'.home_url('/').'column/">ブログ一覧</a></li>';
$next_post = get_next_post();
if($next_post->ID!==NULL){
echo '<li><a href="'.home_url('/').'column/?p='.$next_post->ID.'">次の記事&gt;&gt;</a></li>';
}
?>
                </ul>
              </div>
		    </div>
		</div>
	</div>


<!--/div>
</div-->
          <?php include_once('footer.php'); ?>
