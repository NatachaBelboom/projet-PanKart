<?php get_header(); ?>
<main class="main">
    <section class="text__color">
        <h1 class="sro" role="heading" aria-level="1">Pankart</h1>
        <div class="band__img">
            <img src="<?= dw_asset('img/pankar.jpg') ?>"
                 alt="photo du groupe">
        </div>
        <div class="text-transparent">
            <p>Nous sommes un groupe de musique rock celtique engagé</p>
        </div>
    </section>
    <section class="presentation">
        <h1 class="sro" role="heading" aria-level="1">Présentation</h1>
        <div>
            <h2 role="heading" aria-level="2">
                Pankart
            </h2>
            <p class="presentation__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Neque egestas congue quisque egestas diam in. Interdum velit euismod in
                pellentesque massa placerat duis. Ante in nibh mauris cursus. Placerat orci nulla pellentesque dignissim
                enim sit amet venenatis. Et malesuada fames ac turpis egestas integer. Id interdum velit laoreet id
                donec ultrices. Duis ut diam quam nulla porttitor massa id neque.
            </p>
            <a href="https://pankart.natacha-belboom.be/biographie/" class="bouton black">Voir la biographie complète</a>
        </div>
    </section>
    <section class="home-video">
        <h1 class="last-video" role="heading" aria-level="1">La dernière vidéo</h1>
        <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/LiKDvz-PMRM"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>
        <a href="https://pankart.natacha-belboom.be/galerie/" class="bouton orange">Voir toutes les vidéos</a>
    </section>
    <section class="pub__ep">
        <h1 class="sro" role="heading" aria-level="1">Présentation EP</h1>
        <div class="punchline-block">
            <div class="pub container">
                <img src="<?= dw_the_img_attributes(get_field('pub_img'), ['thumbnail', 'medium', 'large']); ?>"
                     alt="photo de l'ep de pankart" class="img">
                <div class="infos">
                    <h2>Notre premier EP est sorti !</h2>
                    <a href="#" class="bouton black-full">Acheter</a>
                    <a href="https://pankart.natacha-belboom.be/musique/" class="bouton black">Ecouter</a>
                </div>
            </div>
            <p class="punchline" id="punch2">Va jouer sur l'autoroute&nbsp;!</p>
            <p class="punchline" id="punch1">Standing still is not an option&nbsp;!</p>
        </div>
    </section>
    <section class="opinions">
        <h1 class="main__title" role="heading" aria-level="1">Le dernier coup de gueule et coup de coeur</h1>
        <div class="opinions__container">
            <?php
            $opinions = new WP_Query([
                'post_type' => 'opinion',
                'orderBy' => 'date',
                'order' => 'desc',
                'posts_per_page' => 2,
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
    <section class="events">
        <h1 role="heading" aria-level="1">Les évènements</h1>
        <div>
            <?php
            $events = new WP_Query([
                'post_type' => 'event',
                'orderby' => 'date',
                'order' => 'asc',
            ]);
            if ($events->have_posts()) : while ($events->have_posts()) : $events->the_post(); ?>
                <div class="event">
                    <div class="event__container">
                        <p class="event__date"><?php the_field('date'); ?></p>
                        <p class="event__address"><?php the_field('address'); ?></p>
                        <p class="event__place"><?php the_field('place'); ?></p>
                        <a href="<?php the_field('link'); ?>" target="_blank"
                           class="bouton black">Renseignements</a>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <p class="news__empty">Il n'y a pas d'évènements pour l'instant</p>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
