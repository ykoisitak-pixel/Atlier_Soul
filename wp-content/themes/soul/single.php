<?php get_header(); ?>
<!-- メインコンテンツ -->
<main class="p-event">
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
      <article class="p-event__detail" id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
        <section class="p-event__plan">
          <div class="c-date">
            <time datetime="Y-m-d"><?php the_field('date'); ?></time>
          </div>
          <div class="c-events__category">
            <p><?php the_category() ?></p>
          </div>
          <div class="p-event__title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="p-event__content">
            <h2>開催内容</h2>
            <p>
              <?php the_content(); ?>
            </p>
          </div>
        </section>

        <section class="p-event__report">
          <div class="p-event__report-text">
            <h2>レポート</h2>
            <p>
              <?php the_field('report'); ?>
            </p>
          </div>
          <div class="p-event__report-photos">
            <figure>

              <?php if (get_field('photo1')): ?>
                <figcaption>記録写真1</figcaption>
                <?php
                $photo1 = get_field('photo1');
                $photo1_url = $photo1['sizes']['medium'];
                ?>
                <img src="<?= $photo1_url; ?>" alt="event-photo1">
              <?php endif; ?>
            </figure>
            <figure>
              <?php if (get_field('photo2')): ?>
                <figcaption>記録写真2</figcaption>
                <?php
                $photo2 = get_field('photo2');
                $photo2_url = $photo2['sizes']['medium'];
                ?>
                <img src="<?= $photo2_url; ?>" alt="event-photo2">
              <?php endif; ?>
            </figure>
            <figure>
              <?php if (get_field('photo3')): ?>
                <figcaption>記録写真3</figcaption>
                <?php
                $photo3 = get_field('photo3');
                $photo3_url = $photo3['sizes']['medium'];
                ?>
                <img src="<?= $photo3_url; ?>" alt="event-photo3">
              <?php endif; ?>
            </figure>
          </div>
        </section>
      <?php endwhile; ?>
    <?php endif; ?>
      </article>
      <nav class="c-prevnext">
        <?php
        $prev_post = get_previous_post();
        minilog($prev_post, '前の投稿');
        if ($prev_post):
        ?>
          <div class="c-prev">
            <a href="<?php the_permalink($prev_post); ?>">
              <span class="c-prevnext__title"><?= get_the_title($prev_post); ?></span>
            </a>
          </div>
        <?php endif; ?>

        <?php
        $next_post = get_next_post();
        minilog($prev_post, '次の投稿');
        if ($next_post):
        ?>
          <div class="c-next">
            <a href="<?php the_permalink($next_post); ?>">
              <span class="c-prevnext__title"><?= get_the_title($next_post); ?></span>
            </a>
          </div>
        <?php endif; ?>
      </nav>

</main>

<!-- フッターエリア -->
<?php get_footer(); ?>