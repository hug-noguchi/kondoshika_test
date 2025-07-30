<?php
/**
* [レイアウト]
* ヘッダー
*
* @category components
* @package growp
* @since 1.0.0
*/
?>
<header class="l-header <?php if(is_front_page()) { echo 'is-top'; } else { echo 'is-lower'; }?>">
  <div class="l-header__box">
    <div class="l-header__top">
      <div class="l-header__logos">
        <?php if(is_front_page()) { ?>
          <h1 class="l-header__heading-text">立川の小児矯正歯科</h1>
        <?php } elseif( is_page('21')) { ?>
          <h1 class="l-header__heading-text">矯正治療_小児矯正歯科</h1>
        <?php } elseif( is_page('19')) { ?>
          <h1 class="l-header__heading-text">小児矯正_小児矯正歯科</h1>
        <?php } elseif( is_page('1522')) { ?>
          <h1 class="l-header__heading-text">費用について_小児矯正歯科</h1>
        <?php } elseif( is_page('6')) { ?>
          <h1 class="l-header__heading-text">近藤歯科クリニックの強み</h1>
        <?php } elseif( is_page('7')) { ?>
          <h1 class="l-header__heading-text">アクセス・診療時間</h1>
        <?php } elseif( is_page('2034')) { ?>
          <h1 class="l-header__heading-text">矯正治療の流れ</h1>
        <?php } elseif( is_page('11')) { ?>
          <h1 class="l-header__heading-text">アクセス・診療時間</h1>
        <?php } elseif( is_page('18')) { ?>
          <h1 class="l-header__heading-text">マウスピース矯正_矯正歯科</h1>
        <?php } elseif( is_page('20')) { ?>
          <h1 class="l-header__heading-text">予防矯正_小児矯正歯科</h1>
        <?php } elseif( is_page('16')) { ?>
          <h1 class="l-header__heading-text">インビザライン_矯正歯科</h1>
        <?php } elseif( is_page('17')) { ?>
          <h1 class="l-header__heading-text">部分矯正_矯正歯科</h1>
        <?php } elseif( is_page('27')) { ?>
          <h1 class="l-header__heading-text">院長・スタッフの紹介</h1>
        <?php } elseif( is_page('12')) { ?>
          <h1 class="l-header__heading-text">院内紹介_小児矯正歯科</h1>
        <?php } elseif( is_page('11')) { ?>
          <h1 class="l-header__heading-text">矯正治療の流れ_小児矯正歯科</h1>

        <?php } else { ?>
          <h1 class="l-header__heading-text">立川の矯正歯科・小児矯正なら近藤歯科クリニック</h1>
        <?php } ?>
        <div class="l-header__heading">
          <a class="l-header__logo" href="<?php GUrl::the_url() ?>/">
            <img src="<?php GUrl::the_asset()?>/assets/images/logo.png" alt="立川の矯正歯科　近藤歯科クリニック"/>
          </a>
        </div>
      </div>
      <a class="l-header__sp-tel u-hidden-lg" href="tel:042-524-0722"><i class="fa fa-phone" aria-hidden="true"></i>
      </a>
      <div class="l-header__info">
        <div class="l-header__tel"><span class="l-header__tel-text">ご予約お問い合わせはこちら！</span>
          <a class="l-header__tel-number" href="tel:0425240722"><i class="fa fa-phone" aria-hidden="true"></i>042-524-0722
          </a>
        </div>
        <div class="l-header__contacts">
          <a class="l-header__contact" href="<?php GUrl::the_url() ?>/contact/"><span>お問い合わせ</span></a>
          <a class="l-header__reservation" href="<?php GUrl::the_url() ?>/reservation/" target="_blank">
            <span>ご予約</span></a>
          </div>
        </div>
      </div>
      <nav class="l-header__nav">
        <ul class="l-header__nav-inner">
          <li>
            <a href="<?php GUrl::the_url() ?>/ortho/child/">
              <img src="<?php GUrl::the_asset()?>/assets/images/icon-global-nav-03.png" alt="小児矯正治療について"/>
              <span>小児矯正</span>
            </a>
          </li>
          <li>
            <a href="<?php GUrl::the_url() ?>/ortho/">
              <img src="<?php GUrl::the_asset()?>/assets/images/icon-global-nav-01.png" alt="矯正治療"/>
              <span>矯正治療</span>
            </a>
          </li>
          <li>
            <a href="<?php GUrl::the_url() ?>/flow/">
              <img src="<?php GUrl::the_asset()?>/assets/images/icon-global-nav-08.png" alt="矯正治療の流れ"/>
              <span>矯正治療の流れ</span>
            </a>
          </li>
          <li>
            <a href="<?php GUrl::the_url() ?>/price/">
              <img src="<?php GUrl::the_asset()?>/assets/images/icon-global-nav-02.png" alt="費用について"/>
              <span>費用について</span>
            </a>
          </li>
          <li>
            <a href="<?php GUrl::the_url() ?>/aboutus/">
              <img src="<?php GUrl::the_asset()?>/assets/images/icon-global-nav-06.png" alt="近藤歯科クリニックについて"/>
              <span>近藤歯科クリニックについて</span>
            </a>
          </li>
          <li>
            <a href="<?php GUrl::the_url() ?>/faq/">
              <img src="<?php GUrl::the_asset()?>/assets/images/icon-global-nav-09.png" alt="よくある質問"/>
              <span>よくある質問</span>
            </a>
          </li>

          <li>
            <a href="<?php GUrl::the_url() ?>/access/">
              <img src="<?php GUrl::the_asset()?>/assets/images/icon-global-nav-04.png" alt="アクセス・診療時間"/>
              <span>アクセス・診療時間</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <style>
    .l-header.header--min .l-header__box {
      position: relative;
    }
    .l-header.header--min .l-header__heading {
      max-width: 232px;
    }
    .l-header.header--min .l-header__tel-text {
      font-size: 8px;
    }
    .l-header.header--min .l-header__tel-number {
      font-size: 20px;
    }
    .l-header.header--min .l-header__contact,
    .l-header.header--min .l-header__reservation {
      width: 100px;
      font-size: 12px;
    }
    .l-header.header--min .l-header__nav {
      position: absolute;
      top: 24px;
      left: 43%;
      width: 900px;
      margin-left: -450px;
      margin-bottom: 0;
    }
    .l-header.header--min .l-header__nav-inner > li {
      font-size: 12px;
    }
    .l-header__nav-inner > li:nth-child(4):after {
      top: 0px;
      right: -3px;
    }
    .l-header__nav-inner > li:nth-child(5):after,
    .l-header__nav-inner > li:nth-child(6):after {
      top: 7px;
    }
  </style>
  <div class="c-slidebar-container js-slidebar-container is-top-to-bottom">
