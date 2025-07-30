<?php
/*
Template Name: FRONT-Page
Template Post Type: post,page
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/design/css/top.css">

<div class="frontTopHeroBox">
    <img src="<?php bloginfo('template_directory')?>/common/img/shouniTophero.png" alt="">



<div class="frontOpeningMessage">
    
    <p>体と歯に優しい</p>
    <p>歯を抜かない矯正歯科</p>
        <div>小児矯正ページはコチラ</div>
</div>

</div>

<!--
		<div id="slider" class="pc">
			<div id="sliderInner">
			<ul>

				<li><img src="<?php bloginfo('template_directory')?>/library/528607df6253dc972f00036b/5aa222159c9ce0b06ca38cd9.png" alt="お母様、お子様にやさしい歯科です　・やたらに歯を削らない！　・お子様を怖がらせない！　・抑制具などで押さえつけない！　立川の小児歯科、近藤歯科クリニックでは立川市および立川近隣のお子さんの歯の健康な発育を目指して診療しています" width="990" height="378"></li>
				<li><img src="<?php bloginfo('template_directory')?>/library/528607df6253dc972f00036b/5aa228e03113ac4f1ed29f16.png" alt="治すだけではない予防もできる歯科です。お子様にご負担をかけずにむし歯の進行を止め、それから定期健診しながら、お子様の口の健康を維持し、見守ってまいります。" width="990" height="378"></li>
				<li><img src="<?php bloginfo('template_directory')?>/library/528607df6253dc972f00036b/5aa228e33113ac4f1ed29f1a.png" alt="お子様の歯並びも治せる小児歯科です。矯正治療は永久歯を抜かずに、費用も従来の半分以下で行っています。ぜひ、歯並びもご相談ください。" width="990" height="378"></li>

			</ul>

			</div>
		</div>
-->
<div id="sliderbg2" class="pc"></div>

<h3 class="pc" id="pc-mv-text">立川の小児歯科、近藤歯科クリニックでは立川市<br />および立川近隣のお子さんの歯の<br />健康な発育を目指して診療しています</h3>


<div id="slider-wrapper2" class="sp">
    <div id="slider-inner2">
        <ul id="slider2" style="width: 3215%; position: relative; transition-duration: 0.5s; transform: translate3d(0px, 0px, 0px);">
            <li style="float: left; list-style: none; position: relative; width: 100px;" class="bx-clone" aria-hidden="true"><img src="<?php bloginfo('template_directory')?>/common/img/sp_mv03.jpg" alt="お子様の歯並びも治せる小児歯科です。矯正治療は永久歯を抜かずに、費用も従来の半分以下で行っています。ぜひ、歯並びもご相談ください。"></li>
            <li style="float: left; list-style: none; position: relative; width: 100px;" aria-hidden="true"><img src="<?php bloginfo('template_directory')?>/common/img/sp_mv01.jpg" alt="お母様、お子様にやさしい歯科です　・やたらに歯を削らない！　・お子様を怖がらせない！　・抑制具などで押さえつけない！"></li>
            <li style="float: left; list-style: none; position: relative; width: 100px;" aria-hidden="false"><img src="<?php bloginfo('template_directory')?>/common/img/sp_mv02.jpg" alt="治すだけではない予防もできる歯科です。お子様にご負担をかけずにむし歯の進行を止め、それから定期健診しながら、お子様の口の健康を維持し、見守ってまいります。"></li>
            <li style="float: left; list-style: none; position: relative; width: 100px;" aria-hidden="true"><img src="<?php bloginfo('template_directory')?>/common/img/sp_mv03.jpg" alt="お子様の歯並びも治せる小児歯科です。矯正治療は永久歯を抜かずに、費用も従来の半分以下で行っています。ぜひ、歯並びもご相談ください。"></li>
            <li style="float: left; list-style: none; position: relative; width: 100px;" class="bx-clone" aria-hidden="true"><img src="<?php bloginfo('template_directory')?>/common/img/sp_mv01.jpg" alt="お母様、お子様にやさしい歯科です　・やたらに歯を削らない！　・お子様を怖がらせない！　・抑制具などで押さえつけない！"></li>
        </ul>
    </div>
</div>

<p class="clear sp">
    <img class="sp sp_mv" alt="立川の小児歯科、近藤歯科クリニックでは立川市および立川近隣のお子さんの歯の健康な発育を目指して診療しています" src="<?php bloginfo('template_directory')?>/common/img/sp_mv_txt.jpg">
</p>

<div class="wraper top">
    <div class="right_side">
        <?php the_content(); ?>

    </div>

    <?php include_once('sidebar.php'); ?>

</div>
<style>
    @media(max-width: 680px) {
        .c-banner img {
            max-width: 80%;
        }

        .c-banner {
            padding-left: 20px;
            padding-right: 20px;
        }

    }

</style>
<div class="c-banner" style="margin-left: auto; margin-right: auto; padding-top: 24px; padding-bottom: 24px; text-align: center; background: #f5f5f5;">
    <a href="https://doctorsfile.jp/h/38731/df/1/" target="_blank"><img src="/images/20190328_banner.jpg"></a>
</div>

<?php get_footer(); ?>
