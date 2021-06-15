<?php /* Template Name: Page des news */
get_header(); ?>
<main class="news__main">
    <section class="news">
        <h1 class="sro">Toutes les news</h1>
        <div class="news__container">
            <?php
            $news = new WP_Query([
                'post_type' => 'news',
                'orderby' => 'date',
                'order' => 'asc',
            ]);

            if ($news->have_posts()) : while ($news->have_posts()) : $news->the_post(); ?>
                <article class="new">
                    <div class="new__card">
                        <div class="new__info">
                            <h2 class="new__title"><?php the_title(); ?></h2>
                            <p class="new__date"><?php the_field('date'); ?></p>
                            <p class="new__description"><?php the_field('description'); ?></p>
                        </div>
                        <div class="new__fig">
                            <img <?= dw_the_img_attributes(get_field('img'), ['thumbnail', 'medium', 'large']); ?>
                                    class="new__img">
                        </div>
                    </div>
                </article>
            <?php endwhile; else: ?>
                <p class="news__empty">Il n'y a pas de news pour l'instant</p>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
