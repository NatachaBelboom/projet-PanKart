<?php /* Template Name: Page de biographie */
get_header(); ?>
    <main class="main__bio">
        <section class="biography">
            <h1 class="sro">Biographie</h1>
            <div class="bio__container">
                <?php
                $bio = new WP_Query([
                    'post_type' => 'biographie',
                ]);

                if ($bio->have_posts()) : while ($bio->have_posts()) : $bio->the_post(); ?>
                    <div class="bio__fig">
                        <img <?= dw_the_img_attributes(get_field('img'), ['thumbnail', 'medium', 'large']); ?>
                    </div>

                    <div class="bio">
                        <h2 class="bio__title"><?php the_title(); ?></h2>
                        <p class="bio__biography"><?php the_field('biography'); ?></p>
                    </div>
                <?php endwhile; else: ?>
                    <p class="news__empty">Il n'y a pas de biographie</p>
                <?php endif; ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>