<?php /* Template Name: Page de biographie */
get_header(); ?>
    <main class="main__bio">
        <section class="biography-group">
            <h1 class="sro" role="heading" aria-level="1">Biographie</h1>
            <div class="bio__container">
                <h2 class="bio__title" role="heading" aria-level="2"><?php the_field('title'); ?></h2>
                <div class="bio__fig">
                    <img <?= dw_the_img_attributes(get_field('img'), ['thumbnail', 'medium', 'large']); ?>
                </div>
                <div class="bio">
                    <p class="bio__biography"><?php the_field('biography'); ?></p>
                </div>
            </div>
            <div class="bio-membres__container">
                <?php
                $members = new WP_Query([
                    'post_type' => 'membres',
                ]);
                ?>
                <h2 class="bio__title" role="heading" aria-level="2">Les membres</h2>
                <div class="bio-membres__fig">
                    <ul>
                        <?php if ($members->have_posts()) : while ($members->have_posts()) : $members->the_post(); ?>
                            <li class="bio-membres__list">
                                <div class="bio-membre">
                                    <img class="bio-membre__big" <?= dw_the_thumbnail_attributes(['thumbnail', 'medium', 'large']); ?>>
                                    <div class="bio-membre__description">
                                        <h3 class="bio-membre__title" role="heading" aria-level="3"><?php the_title(); ?></h3>
                                        <p class="bio-membre__instruments"><?php the_field('instruments'); ?></p>
                                        <p class="bio-membre__biography"><?php the_field('biography'); ?></p>
                                    </div>
                                </div>
                                <img class="bio-membre__small" <?= dw_the_thumbnail_attributes(['thumbnail', 'medium', 'large']); ?>>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php else: ?>
                <p class="members__empty">Il n'y a pas de membre</p>
            <?php endif; ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>