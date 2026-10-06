<?php get_header(); ?>

<!-- メインコンテンツ -->
<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post(); ?>
    <main class="p-business__page">
      <section class="p-business__desc">
        <h1 class="page-title"><?php the_title() ?></h1>
        <?php $id = get_the_ID(); ?>
      </section>
      <section class="p-business__text">
        <?php the_content(); ?>
      </section>
    </main>
  <?php endwhile; ?>
<?php endif; ?>

<!-- フッターエリア -->
<?php get_footer(); ?>