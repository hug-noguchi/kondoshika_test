<?php
/**
 * Template Name: トップページ
 */
remove_filter( 'the_content', 'wpautop' );
?>
<?php echo get_field( 'frontpage_opening' ) ?>
<div class="c-feature-top">
    <div class="c-feature-top__slider">
        <div class="c-feature-top__slider-inner"></div>
    </div>
    <div class="c-feature-top__inner point">
      <?php echo get_field( 'frontpage_features' ) ?>
      <div class="c-feature-top__points js-fadein">
        <?php
        $features = get_field( 'frontpage_features_block' );
        foreach ( $features as $feature ) {
          ?>
          <div class="c-feature-top__point" id="<?php echo $feature['features_block_label'] ?>">
            <div class="c-feature-top__images">
              <div class="c-feature-top__number">
                <div class="c-feature-top__number-inner">
                  <span>特徴</span><span><?php echo $feature['features_block_label'] ?></span></div>
                </div>
                <img class="c-feature-top__image" src="<?php echo GTag::get_attachment_url( $feature['features_block_image'],
                'full' ); ?>" alt="歯を抜かない、身体にやさしい矯正歯科"/>
              </div>
              <div class="c-feature-top__text">
                <h3 class="u-marker-yellow f-weight"><?php echo $feature['features_block_text01'] ?></h3>
                <span class="text_cont f-weight"><?php echo $feature['features_block_text02'] ?></span>
                <div class="c-feature-top__minitext u-text-center u-mbs is-xs">
                  <a href="<?php echo $feature['features_block_link'] ?>">詳細を見る <i class="i fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
<?php echo get_field( 'frontpage_about' ) ?>
<!--出力-->
<div class="c-relation-lg  is-top">
    <div class="c-relation-lg__inner">
        <div class="l-container">
            <div class="c-relation-lg__title">
                <h2 class="heading is-xlg">初めての方へ</h2>
            </div>
            <div class="c-relation-lg__links">
				<?php
				$firsts = get_field( 'frontpage_first' );
				foreach ( $firsts as $first ) {
					?>
          <div class="c-relation-lg__block">
              <span class="c-relation-lg__image">
                  <img src="<?php echo GTag::get_attachment_url( $first['frontpage_first_image'],
      'full' ); ?>" alt="<?php echo $first['frontpage_first_title'] ?>"/>
              </span>
              <span class="c-relation-lg__block-title f-weight"><?php echo $first['frontpage_first_title'] ?></span>
              <span class="c-relation-lg__text f-weight"><?php echo $first['frontpage_first_text'] ?></span>
              <div class="c-relation-lg__minitext"><a href="<?php echo $first['frontpage_first_link'] ?>">詳細を見る <i class="i fa fa-angle-right"></i></a></div>
          </div>
				<?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- <div class="c-relation-lg  is-top-youtube">
  <div class="c-relation-lg__inner">
    <div class="l-container">
        <div class="c-relation-lg__title">
            <h2 class="heading is-xlg">矯正をYouTube動画チャンネルでわかりやすくご案内</h2>
        </div>
        <div class="t_youtubeBox"><img src="<?php GUrl::the_asset()?>/assets/images/youtube_T.png" alt="youtube"/></div>
    </div>
    <article class="youtube_top_list">
      <ul id="youtube_top">
        <?php for ($i=1; $i <= 3; $i++) { ?>
          <?php $post_objects = get_field('top_youtube0'.$i,1875); if( $post_objects ): // 投稿オブジェクトの取得 ?>
            <li>
              <a href="https://www.youtube.com/watch?v=<?php the_field('youtubeID',$post_objects->ID); ?>" target="_blank">
                <div class="img">
                  <?php if(get_field('youThumb',$post_objects->ID)){ ?>
                    <img src="<?php the_field('youThumb',$post_objects->ID); ?>" alt="<?php echo get_the_title($post_objects->ID); ?>・サムネイルイメージ">
                  <?php }else{ ?>
                    <img src="<?php echo get_theme_root_uri()."/kondo-shika-shinbi-html/dist/assets/images/no_image.jpg"; ?>" alt="<?php the_title(); ?>・サムネイル無し">
                  <?php } ?>
                </div>
                <div class="text">
                  <div class="text_inner">
                    <span class="title">
                      <?php echo get_the_title($post_objects->ID); ?>
                    </span>
                  </div>
                </div>
              </a>
            </li>
          <?php endif; ?>
        <?php } ?>


      </ul>
    </article>
    <div class="youtube_lnk_btn">
      <a href="<?php echo home_url( '/' ); ?>youtube">動画一覧はコチラ</a>
    </div>
  </div>
</div> -->

<div class="c-greeting_top">
  <div class="cont_inner">
    <div class="img">
      <img src="<?php GUrl::the_asset()?>/assets/images/greeting.jpg" alt="院長・近藤哲夫"/>
    </div>
    <div class="cont">
      <h2 class="heading is-xlg">院長あいさつ</h2>
      <span class="text">
        <p>
          皆さん、はじめまして、近藤歯科クリニック院長の近藤哲夫です。歯科大学を卒業して34年、立川で開業して25年になります。<br />
        </p>
        <p>
          当クリニックの目指すところ、歯科診療の前提として、まず子供たちの健全な成長発育、子供たちとお母様、お父様方の笑顔、それに、大人の患者さんの癒やしの場所、さらに、スタッフのみんなが楽しく働ける場所、と考えています。<br />
        </p>
        <p>
          私自身、歯医者でありながら、”歯を削ること””歯を抜くこと””インプラントをすること”などはあまり好きではないです。自然の本来のままの姿がいちばん良い、と考えています。<br />
        </p>
        <p>
          極力"削らず”"抜かず”"切らず”にその人本来の免疫力、抵抗力、自然治癒力を生かしながら、無理なく、押しつけでなく、一人ひとりの患者さんに寄り添いながら、融通無碍に対応できるように、診療ができたら、と日々考えております。
        </p>
      </span>
    </div>
  </div>
</div>

<div class="c-facility_top">
  <div class="cont_inner">
    <h2 class="heading is-xlg">院内・設備</h2>
    <ul class="facility">
      <li>
        <div class="img">
          <img src="<?php GUrl::the_asset()?>/assets/images/facility01.jpg" alt="待合室"/>
        </div>
        <h3>待合室</h3>
        <div class="text">
          できるだけ広く、空間を広くとっております。<br>
          お子様の矯正治療はご家族で来院される方が多いので、待合は広くとるようにしました。<br>
          天井埋め込み式の空気清浄機もあり、この感染予防対策が必要とされる状況にも十分に対応できていると考えております。
        </div>
      </li>
      <li>
        <div class="img">
          <img src="<?php GUrl::the_asset()?>/assets/images/facility02.jpg" alt="キッズスペース"/>
        </div>
        <h3>キッズスペース</h3>
        <div class="text">
          キッズスペースも広くとっておりますので、保護者の方もご一緒に過ごせます。感染予防対策の一環として、おもちゃは片付けて有ります。
        </div>
      </li>
      <li>
        <div class="img">
          <img src="<?php GUrl::the_asset()?>/assets/images/facility03.jpg" alt="ガチャガチャ"/>
        </div>
        <h3>ガチャガチャ</h3>
        <div class="text">
          当クリニックは、男の子用と女の子用に分けて、内容も充実させています。ご予約でいらしたお子様はみなコインをもらって楽しめます。（予約外で来院されたお子様には現在お渡ししていませんのでご理解のほどお願いします）
        </div>
      </li>
    </ul>
  </div>
</div>

<!-- <div class="c-facility_top">
  <div class="cont_inner">
    <h2 class="heading is-xlg">求人</h2>
    <ul class="facility recruit">
      <li>
      <a href="https://www.webqua.jp/dh/search/35789" target="_blank"><img src="https://quacareertimes.com/wp-content/uploads/2022/02/DH_640_200.jpg" alt="求人情報の詳細はこちら"></a>
      </li>
      <li>
      <a href="https://www.webqua.jp/ndh/search/22644" target="_blank"><img src="https://quacareertimes.com/wp-content/uploads/2022/02/NDH_640_200.jpg" alt="求人情報の詳細はこちら"></a>
      </li>
    </ul>
  </div>
</div> -->

<div class="c-news-top  u-line-dot">
  <div class="c-news-top__inner  l-container">
    <div class="c-news-top__titles">
      <div class="c-news-top__title">
        <h2 class="heading is-news"><span>News</span>
          <small>お知らせ</small>
        </h2>
      </div>
      <div class="c-news-top__button">
        <a class="c-button is-md is-arrow is-primary is-effect" href="<?php echo home_url(); ?>/info/">一覧を見る</a>
      </div>
    </div>
    <div class="c-news-top__post">
      <?php
      $new_query = new WP_Query( [
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'cat'  => 27,
        ] );
        ?>
        <div class="c-post-item">
          <div class="c-post-item__inner">
            <?php
            if ( $new_query->have_posts() ) {
              while ( $new_query->have_posts() ) {
                $new_query->the_post();
                ?>
                <a class="c-post-item__block" href="<?php the_permalink() ?>">
                  <div class="c-post-item__sup">
                    <div class="c-post-item__date"><?php echo get_the_date( 'Y/m/d' ) ?>
                    </div>
                    <div class="c-post-item__category"><?php echo GTag::get_first_term( get_the_ID(),"category", "name" ); ?></div>
                  </div>
                  <div class="c-post-item__title"><?php the_title() ?></div>
                </a>
                <?php
              }
            }
            ?>
          </div>
        </div>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="c-news-top__button-sp">
        <a class="c-button is-md is-arrow is-primary is-effect" href="<?php echo home_url(); ?>/info/">
          一覧を見る
        </a>
      </div>
    </div>
  </div>
<div class="c-relation-top  u-weave-blue">
    <img class="c-relation-top__star is-left" src="<?php GUrl::the_asset() ?>/assets/images/img-star.png" alt="装飾の星"/>
    <img class="c-relation-top__star is-right" src="<?php GUrl::the_asset() ?>/assets/images/img-star-rev.png" alt="装飾の星"/>
    <div class="c-relation-top__inner">
      <h2 class="heading is-xlg">診療項目</h2>
      <ul class="relation-menu">
        <li>
          <a href="<?php echo home_url( '/' ); ?>ortho/">
            <h3>矯正歯科</h3>
            <p>成人の方の歯科矯正も歯を抜かない、身体に優しい矯正治療をおこないます。</p>
            <span>詳細はこちら &gt;&gt;</span>
          </a>
        </li>
        <li>
          <a href="<?php echo home_url( '/' ); ?>ortho/child/">
            <h3>小児矯正</h3>
            <p>永久歯を抜かない、からだと心にやさしい矯正です。費用も従来の半分以下になりました。</p>
            <span>詳細はこちら &gt;&gt;</span>
          </a>
        </li>
        <li>
          <a href="<?php echo home_url( '/' ); ?>ortho/mouthpiece/">
            <h3>インビザライン</h3>
            <p>年間症例数50人以上を達成し、インビザラインプラチナドクターに認定されました。</p>
            <span>詳細はこちら &gt;&gt;</span>
          </a>
        </li>
        <li>
          <a href="<?php echo home_url( '/' ); ?>shounishika/">
            <h3>小児歯科</h3>
            <p>無理やりの治療はおこないません。むし歯もすぐに削らず、進行を止めてから治療を始めます。</p>
            <span>詳細はこちら &gt;&gt;</span>
          </a>
        </li>
        <li>
          <a href="<?php echo home_url( '/' ); ?>ceramic/">
            <h3>セラミック治療</h3>
            <p>美しい白い歯、丈夫で体にもいいです。費用も従来の半分ほどになりました。</p>
            <span>詳細はこちら &gt;&gt;</span>
          </a>
        </li>
        <li>
          <a href="<?php echo home_url( '/' ); ?>shounishika/DentalCheck-for-Pregnants/">
            <h3>妊婦歯科健診</h3>
            <p>赤ちゃんのためにも、お母様のためにも、ぜひ、いらしてください。健診料は無料です。</p>
            <span>詳細はこちら &gt;&gt;</span>
          </a>
        </li>
      </ul>

      <!--
        <div class="c-relation-top__buttons  l-container">
            <div class="c-relation-top__button">
                <a class="c-button is-bg-image is-flow" href="/flow/">矯正治療の流れ</a>
            </div>
            <div class="c-relation-top__button">
                <a class="c-button is-bg-image is-qa" href="<?php GUrl::the_url()?>/archives/879/">小児矯正Q＆A</a>
            </div>
            <div class="c-relation-top__button">
                <a class="c-button is-bg-image is-bio" href="<?php GUrl::the_url()?>/archives/788/">
                    小児矯正と<br>
                    バイオセラピー
                </a>
            </div>
        </div>
        <div class="c-relation-top__banner  l-container">
        <?php
          $banners = get_field( 'frontpage_banner' );
          ?>
          <div class="c-relation-top__banner-button">
            <a href="<?php echo $banners['frontpage_doctor_link']; ?>" target="_blank">
              <img class="u-hidden-sm" src="<?php GUrl::the_asset() ?>/assets/images/img-banner-doctors-top.png" alt="ドクターズファイル"/>
              <img class="u-hidden-lg" src="<?php GUrl::the_asset() ?>/assets/images/img-banner-doctors-top-sp.png" alt="ドクターズファイル"/>
              <p style="font-size: 11px; letter-spacing: 0;" class="u-hidden-sm">&nbsp;</p>
            </a>
          </div>
          <div class="c-relation-top__banner-button">
            <a href="<?php GUrl::the_url()?>/reservation/" target="_blank">
              <img src="<?php GUrl::the_asset() ?>/assets/images/img-banner-res-top.png" alt="ネット予約はこちら"/>
            </a>
          </div>
          <div class="c-relation-top__banner-button">
            <a href="<?php GUrl::the_url()?>/ortho/mouthpiece/">
              <img src="<?php GUrl::the_asset() ?>/assets/images/bnr-invisa.png" alt="インビザライン（マウスピース矯正）についてはこちらから"/>
            </a>
          </div>
        </div>
      -->

      <div class="c-relation-top__banner  l-container" style="padding-top: 0; padding-bottom: 48px;" id="banners">
      </div>
        <div class="l-container">
            <div class="c-relation-top__relation">
                <div class="c-relation-top__title">
                    <h3 class="heading is-xlg">お役立ち情報</h3>
                </div>
                <div class="c-relation-top__relation-buttons">
                  <!-- 管理画面のリンク先が分からないのでコメントアウト
                  <?php
                  $relations = get_field( 'frontpage_relation' );
                  foreach ( $relations as $relation ) {
                    ?>
                    <div class="c-relation-top__relation-button">
                      <a class="c-button is-lg is-arrow is-primary is-effect" href="<?php echo $relation['frontpage_relation_link'] ?>">
                        <?php echo $relation['frontpage_relation_title'] ?>
                      </a>
                    </div>
                  <?php } ?>
                  -->
                  <div class="c-relation-top__relation-button"><a class="c-button is-lg is-arrow is-primary is-effect" href="<?php echo home_url(); ?>/orthodontic_column/">歯科矯正コラム</a></div>
                  <div class="c-relation-top__relation-button"><a class="c-button is-lg is-arrow is-primary is-effect" href="<?php echo home_url(); ?>/case_of_correction/">歯科矯正の事例集</a></div>
                  <div class="c-relation-top__relation-button"><a class="c-button is-lg is-arrow is-primary is-effect" href="<?php echo home_url(); ?>/staff_blog/">スタッフブログ</a></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="c-opening__inner is-bottom c-opnmt">
  <div class="c-opening__blocks js-fadein">
  <div class="c-opening__block">
  <div class="c-opening__block-image"><img src="https://kondo-shika-shinbi.com/wp-content/uploads/2019/08/img-opening-01.png" alt="立川の矯正歯科「近藤歯科クリニック」"></div>
  <div class="c-opening__block-name"><span>近藤歯科クリニック</span><span>Kondo Dental Clinic</span></div>
  <div class="c-opening__block-table"><div class="c-time-table">
      <table class="c-time-table__schedule">
          <thead>
              <tr>
                  <th class="u-text-left">受付<br class="u-hidden-lg">時間</th>
  				                    <th>月</th>
  				                    <th>火</th>
  				                    <th>水</th>
  				                    <th>木</th>
  				                    <th>金</th>
  				                    <th>土	</th>
  				                    <th>日/祝</th>
  				            </tr>
          </thead>
          <tbody>
              <tr>
                  <td class="u-text-left">
                      <span class="is-text-lg">午前</span><br>
  					9:40～13:00                </td>
  				                    <td><span>▲</span></td>
  				                    <td><span><i class="fa fa-circle" aria-hidden="true"></i></span></td>
  				                    <td><span><i class="fa fa-times" aria-hidden="true"></i></span></td>
  				                    <td><span><i class="fa fa-circle" aria-hidden="true"></i></span></td>
  				                    <td><span>▲</span></td>
  				                    <td><span><i class="fa fa-circle" aria-hidden="true"></i></span></td>
  				                    <td><span><i class="fa fa-times" aria-hidden="true"></i></span></td>
  				            </tr>
              <tr>
                  <td class="u-text-left">
                      <span class="is-text-lg">午後</span><br>
  					14:30～19:00                </td>
  				                    <td><span><i class="fa fa-circle" aria-hidden="true"></i></span></td>
  				                    <td><span><i class="fa fa-circle" aria-hidden="true"></i></span></td>
  				                    <td><span><i class="fa fa-times" aria-hidden="true"></i></span></td>
  				                    <td><span><i class="fa fa-circle" aria-hidden="true"></i></span></td>
  				                    <td><span><i class="fa fa-circle" aria-hidden="true"></i></span></td>
  				                    <td><span><i class="fa fa-times" aria-hidden="true"></i></span></td>
  				                    <td><span><i class="fa fa-times" aria-hidden="true"></i></span></td>
  				            </tr>
          </tbody>
      </table>
      <div class="c-time-table__text">
  		※▲ 10:00～13:00迄です <br>
  ※初診随時受付（予約制） ※電話予約可能    </div>
  </div>
  </div>
  </div>
  <div class="c-opening__block">
  <div class="c-opening__block-title">
  <h2 class="heading is-bottom-border u-text-left"><i class="fa fa-map-marker" aria-hidden="true"></i>アクセス</h2>
  </div>
  <div class="c-opening__block-add-texts">
  <div class="c-opening__block-add-text">東京都立川市高松町2-25-3 メープル立川1F<br>
  立川駅徒歩10分</div>
  <div class="c-opening__block-add-map-button"><a class="c-button is-md is-arrow is-primary is-effect" href="//goo.gl/maps/UtkYHCBFPCzSBrga6" target="_blank" rel="noopener"><span>Mapを見る</span></a></div>
  </div>
      <div class="BmapBox">

          <img src="<?php GUrl::the_asset()?>/assets/images/Bmap.png" alt="">
          <p>※駐車場3台完備(1台増設して駐車場3台)　従来の番号1，2の隣の3です。</p>
      </div>



  <div class="c-opening__block-add-map">
  <div class="c-google-map">
  <div class="c-google-map__inner"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6479.693715862818!2d139.419512!3d35.705386!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e16eecc0673d%3A0xe4d9cfb7db427108!2z44CSMTkwLTAwMTEg5p2x5Lqs6YO956uL5bed5biC6auY5p2-55S677yS5LiB55uu77yS77yV4oiS77yT!5e0!3m2!1sja!2sjp!4v1562305321309!5m2!1sja!2sjp" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
  </div>
  </div>
  <div class="c-opening__block-add-buttons">
  <div class="c-opening__block-add-button"><a class="c-button is-phone is-arrow is-yellow is-effect" href="tel:042-524-0722"><span>042-524-0722</span></a></div>
  <div class="c-opening__block-add-button"><a class="c-button is-normal is-arrow is-yellow is-effect" href="/contact/"><span>お問い合わせ</span></a></div>
  </div>
  </div>
  </div>
</div>
<!-- SPお問合せ&Tellボタン -->
<!-- <p class="s-pagetop conact">
<a href="/contact/"></a>
</p>
<p class="s-pagetop tell">
<a href="tel:0425240722"><i class="fa fa-phone" aria-hidden="true"></i></a>
</p> -->
