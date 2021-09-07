<?php /* Template Name: Page de la galerie */
get_header(); ?>
<main class="gallery__main">
    <section class="gallery">
        <h1 class="gallery__title" role="heading" aria-level="1">Les photos</h1>
        <div class="gallery__container">
            <?php
            $gallery = get_field('images');
            if ($gallery): ?>
                <?php foreach ($gallery as $img):
                    if ($img): ?>
                        <div class="gallery__image">
                            <img class="image" <?= dw_the_img_attributes($img, ['thumbnail', 'medium', 'large']) ?>>
                        </div>
                    <?php endif; endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="gallery2">
        <h1 class="gallery__title" role="heading" aria-level="1">Les vidéos</h1>
        <div class="gallery2__container">
            <div class="gallery2__video">
                <?php the_field('videos');?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
