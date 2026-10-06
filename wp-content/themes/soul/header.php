<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Atlier Soul Web サイト</title> -->
  <?php
  wp_enqueue_style('soul-css', get_template_directory_uri() . '/css/style.css');
  wp_head();
  ?>
</head>

<body>
  <!-- ヘッダーエリア -->
  <header class="l-header">
    <div class="l-header__nav-logo">
      <a href="<?= home_url(); ?>">Atlier Soul</a>
      <p><?php bloginfo('description'); ?></p>
    </div>
    <div class="l-header__nav-list">
      <nav>
        <ul>
          <li><a href="<?= home_url('/') ?>">HOME</a></li>
          <li><a href="<?= home_url('/') ?>#p-business__jump">Business</a></li>
          <li><a href="<?= home_url('/') ?>#p-events__jump">Events</a></li>
          <li><a href="<?= home_url('/') ?>#p-staff__jump">staff</a></li>
        </ul>
      </nav>
    </div>
  </header>