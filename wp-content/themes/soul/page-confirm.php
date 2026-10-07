<?php get_header(); ?>
<!-- お問い合わせ内容確認画面用 -->
<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
        <main>
            <section>
                <h1 class="page-title"><?php the_title() ?></h1>
                <?php $id = get_the_ID(); ?>
            </section>
            <section>
                <?php the_content(); ?>
            </section>
        </main>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>