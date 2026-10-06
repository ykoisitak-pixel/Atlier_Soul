        <article class="p-events__card">
          <div class="p-events__date">
            <time datetime="<?php the_field('date'); ?>"><?php the_field('date'); ?></time>
          </div>
          <div class="c-events__category">
            <?php the_category(); ?>
          </div>
          <div class="p-events__title">
            <p><?php the_title(); ?></p>
          </div>
          <div class="p-events__pic">
            <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail([80, 80]); ?>
            <?php else: ?>
              <img src="<?= get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="">
            <?php endif; ?>
          </div>
          <div class="p-events__more">
            <a href="<?php the_permalink(); ?>">もっと見る &rarr;</a>
          </div>
        </article>