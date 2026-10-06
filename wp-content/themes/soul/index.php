<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="content-wrapper">
  <div class="container">
    <h1 class="page-title">カテゴリー：<?php wp_title(''); ?></h1>

    <div class="posts-grid">
      <?php if (have_posts()): ?>
        <div class="p-events__posts">
          <?php while (have_posts()): the_post(); ?>
            <?php get_template_part('template-parts/loop', 'event'); ?>
          <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>

    <!-- ページネーション -->
    <nav class="pagination" aria-label="ページナビゲーション">
      <?php
      $args = [
        'type' => 'list',
      ];
      ?>
      <?= paginate_links($args); ?>
    </nav>

  </div>
</main>

<!-- フッターエリア -->
<?php get_footer(); ?>