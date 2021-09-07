<?php /* Template Name: Page des coups de coeur/gueule */
get_header(); ?>
    <main class="main__opinion">
        <section>
            <h1 class="main__title" role="heading" aria-level="1">Les coups de gueule et les coups de coeur</h1>
            <div class="opinions__container">
                <?php
                $opinions = new WP_Query([
                    'post_type' => 'opinion',
                    'orderBy' => 'date',
                    'order' => 'desc',
                ]);

                if ($opinions->have_posts()) : while ($opinions->have_posts()) : $opinions->the_post(); ?>
                    <div class="opi">
                        <div class="opi__container">
                            <div class="opi__infos opi__infos__<?php the_field('choice'); ?>">
                                <div class="choice <?php the_field('choice'); ?>"></div>
                                <p class="opi__title"><?php the_title(); ?></p>
                                <p class="opi__date"><?php the_field('date'); ?></p>
                                <p class="opi__avis">"<?php the_field('opinion'); ?>"</p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else: ?>
                    <p class="opinions__empty">Il n'y a pas de coup de coeur ni de coup de gueule</p>
                <?php endif; ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>