<?php /* Template Name: Page des musiques */
get_header(); ?>
<main class="main__music">
    <section class="musics">
        <h1 class="musics__title" role="heading" aria-level="1">Les musiques</h1>
        <div class="musics__container">
            <?php
            $music = new WP_Query([
                'post_type' => 'music',
                'orderby' => 'date',
                'order' => 'asc',
            ]);
            if ($music->have_posts()) : while ($music->have_posts()) : $music->the_post(); ?>
                <div class="music__info">
                    <h2 class="music__title" role="heading" aria-level="2"><?php the_title(); ?></h2>
                    <p class="music__album"><?php the_field('album'); ?></p>
                    <p class="music__time"><?php the_field('time'); ?></p>
                    <a href="#" class="bouton orange lyrics-on">Ecouter</a>
                    <div class="lyrics__container">
                        <p class="lyrics-off"><?php the_field('lyrics'); ?></p>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <p class="news__empty">Il n'y a pas de chanson pour l'instant</p>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
