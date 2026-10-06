<?php get_header(); ?>

<!-- ヒーローエリア -->
<section class="p-concept">
  <div class="p-concept__text">
    <h1>Atlier Soul</h1>
    <div class="p-concept__massage">
      <p>人は誰しも、自らの人生の中の主役です。</p>
      <p>我々Atlier Soulは、そんな主役達の人生のワンシーンを、写真に、映像に残すためのお手伝いをする団体です。</p>
      <br>
      <p>別にスターじゃなくていい。アイドルじゃなくていい。</p>
      <p>勇者でも、魔王でも、王様でも、人気者でなくてもいい。</p>
      <p>あなただけの人生を生きる、あなたと言うその輝かしい存在を、切り取り残す事が出来たのならば光栄です。</p>
    </div>
    <div class="p-concept__inquiry">
      <p class="c-button">
        <a href="<?= get_permalink('2088'); ?>">Contact Us</a>
      </p>
    </div>
  </div>

  <div class="p-concept__img">
    <img src="<?= get_template_directory_uri() . '/images/MV.jpg' ?>" alt="ヒーロー画像">
  </div>

</section>

<!-- Businessセクション -->
<section id="p-business__jump" class="p-business">
  <div class="container">
    <h2>Business</h2>
    <p>私たちの主な活動をご紹介します。</p>
  </div>
  <div class="p-business__cards">
    <!-- 投稿1 -->
    <div class="p-business__card">
      <div class="p-business__icon">
        <i class="fa-regular fa-camera"></i>
      </div>
      <div class="p-business__desc">
        <h3>ポートレート・モデル撮影</h3>
        <p>野外、屋内問わず、ご希望のロケーションにて撮影致します。<br>
          屋内ならば、弊社専用のスタジオも完備。メイク・ヘアメイクのサービスもあります。</p>
      </div>
      <div class="p-business__link">
        <a href="<?= get_permalink('2048'); ?>" class="read-more">もっと見る&rarr;</a>
      </div>
    </div>
    <!-- 投稿2 -->
    <div class="p-business__card">
      <div class="p-business__icon">
        <i class="fa-regular fa-camera"></i>
      </div>
      <div class="p-business__desc">
        <h3>スナップ撮影</h3>
        <p>
          フェスやお祝い事などの会場撮影等、承ります。<br>
          定期的な催しならば、次回開催のPRとなるショートムービーの作成等もお勧めです。</p>
      </div>
      <div class="p-business__link">
        <a href="<?= get_permalink('2098'); ?>" class="read-more">もっと見る&rarr;</a>
      </div>
    </div>
    <!-- 投稿3 -->
    <div class="p-business__card">
      <div class="p-business__icon">
        <i class="fa-regular fa-camera"></i>
      </div>
      <div class="p-business__desc">
        <h3>ライブ撮影</h3>
        <p>ミュージックライブ、ダンスイベント、各種スポーツや格闘技など。<br>
          ジャンルを問わずお手伝いさせて頂きます。</p>
      </div>
      <div class="p-business__link">
        <a href="<?= get_permalink('2101'); ?>" class="read-more">もっと見る&rarr;</a>
      </div>
    </div>
    <!-- 投稿4 -->
    <div class="p-business__card">
      <div class="p-business__icon">
        <i class="fa-regular fa-camera"></i>
      </div>
      <div class="p-business__desc">
        <h3>晴れの舞台の撮影</h3>
        <p>成人式・お宮参り・七五三などの晴れの舞台での、何気ないスナップから、ご家族揃っての記念撮影まで、お手伝い致します。<br>
          記念にショートムービーの作成のサービスも併用出来ます。</p>
      </div>
      <div class="p-business__link">
        <a href="<?= get_permalink('2104'); ?>" class="read-more">もっと見る&rarr;</a>
      </div>
    </div>
    <!-- 投稿5 -->
    <div class="p-business__card">
      <div class="p-business__icon">
        <i class="fa-regular fa-camera"></i>
      </div>
      <div class="p-business__desc">
        <h3>アーティスト写真撮影</h3>
        <p>イメージに合わせて、ロケーション探しの段階からお手伝い致します。</p>
      </div>
      <div class="p-business__link">
        <a href="<?= get_permalink('2107'); ?>" class="read-more">もっと見る&rarr;</a>
      </div>
    </div>
    <!-- 投稿6 -->
    <div class="p-business__card">
      <div class="p-business__icon">
        <i class="fa-regular fa-camera"></i>
      </div>
      <div class="p-business__desc">
        <h3>店舗・商品撮影・PR動画制作</h3>
        <p>お客様へのニーズに応じた商品の撮影、ご協力致します。<br>
          又、店舗PR用動画の作成も承ります。</p>
      </div>
      <div class="p-business__link">
        <a href="<?= get_permalink('2114'); ?>" class="read-more">もっと見る&rarr;</a>
      </div>
    </div>
  </div>
</section>

<!-- events セクション -->
<section id="p-events__jump" class="p-events">
  <div class="p-events__head">
    <h2>最新のイベント（3件）</h2>
    <p>私たちが主催する、最近のイベントをご紹介します。</p>
  </div>

  <?php if (have_posts()): ?>
    <div class="p-events__posts">
      <?php while (have_posts()): the_post(); ?>
        <?php get_template_part('template-parts/loop', 'event'); ?>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>


</section>

<!-- staff セクション -->
<section id="p-staff__jump" class="p-staff">
  <div class="p-staff__desc">
    <h2>スタッフ</h2>
    <p>当団体の主なスタッフのプロフィールです。</p>
  </div>
  <div class="p-staff__posts">
    <!-- 投稿1 -->
    <div class="p-staff__card">
      <div class="p-staff__photo">
        <img src="<?= get_template_directory_uri() . '/images/kiku.jpg' ?>" alt="kikuchi">
      </div>
      <div class="p-staff__name">
        <h3 class="name">菊池裕忠</h3>
        <p class="role">代表</p>
      </div>
      <div class="p-staff__detail">
        <p>
          Photographer （写真）<br>
          Videographer （映像）<br>
          運営<br>
          各種イベント企画<br>
        </p>
      </div>
    </div>
    <!-- 投稿2 -->
    <div class="p-staff__card">
      <div class="p-staff__photo">
        <img src="<?= get_template_directory_uri() . '/images/kaoru.jpg' ?>" alt="kaoru">
      </div>
      <div class="p-staff__name">
        <h3 class="name">蛭間 薫</h3>
        <p class="role">統括リーダー</p>
      </div>
      <div class="p-staff__detail">
        <p>
          Photographer （写真）<br>
          Videographer （映像）<br>
          インテリアデザイン・コーディネート<br>
          運営・企画<br>
        </p>
      </div>
    </div>
    <!-- 投稿3 -->
    <div class="p-staff__card">
      <div class="p-staff__photo">
        <img src="<?= get_template_directory_uri() . '/images/maki.jpg' ?>" alt="maki">
      </div>
      <div class="p-staff__name">
        <h3 class="name">MAKI</h3>
        <p class="role">モデル / イベントスタッフ</p>
      </div>
      <div class="p-staff__detail">
        <p>
          写真・映像モデル<br>MC 音楽イベント企画<br>
          シンガー<br>
        </p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>