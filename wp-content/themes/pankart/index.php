<?php get_header(); ?>
<main class="main">
    <section class="text__color">
        <h1 class="sro">Pankart </h1>
        <div class="text">
            <p>Groupe de musique rock celtique engagé</p>
            <p>Gagnant du gigstarter groupe de l'année 2020</p>
            <p>Découvrez Pankart</p>
        </div>
        <div class="band__img">
            <img src="https://pankart.natacha-belboom.be/wp-content/themes/pankart/public/img/pankart.png" alt="photo du groupe">
        </div>
        <a href="" class="button__link orange">Voir leur performance</a>
    </section>

    <section class="presentation">
        <h1 class="sro">Présentation</h1>
        <div>
            <h2>
                Pankart
            </h2>
            <p class="presentation__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. A pellentesque sit amet porttitor eget dolor morbi non. Malesuada fames ac turpis
                egestas sed tempus urna et pharetra. Mi quis hendrerit dolor magna eget. Ullamcorper velit sed
                ullamcorper morbi tincidunt ornare.
            </p>
            <a href="" class="button__link black">Lire la biographie complète</a>
            <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/LiKDvz-PMRM"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>

            </iframe>
            <div class="embed-container">
                <?php the_field('oembed'); ?>
            </div>-->
        </div>
    </section>
    <section class="pub__ep">
        <div class="pub__ep container">
            <img src="<?= dw_the_img_attributes(get_field('pub_img'), ['thumbnail', 'medium', 'large']); ?>"
                 alt="photo de l'ep de pankart" class="pub__ep img">
            <div class="infos">
                <h2>Notre premier EP est sorti !</h2>
                <a href="" class="button__link orange">Acheter</a>
                <a href="" class="button__link black border">Ecouter</a>
            </div>
        </div>
    </section>
    <section class="events">
        <h2>Les évènements</h2>

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
                        <a href="<?php the_field('link'); ?>" target="_blank" class="button__link white">Renseignements</a>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <p class="news__empty">Il n'y a pas d'évènements pour l'instant</p>
            <?php endif; ?>
        </div>
    </section>
    <section class="opinions">
        <h2>Les coups de coeur / Les coups de gueule</h2>
        <div class="opinions__container">
            <?php
            $opinions = new WP_Query([
                'post_type' => 'opinion',
                'orderby' => 'date',
                'order' => 'asc',
            ]);

            if ($opinions->have_posts()) : while ($opinions->have_posts()) : $opinions->the_post(); ?>
                <div class="opinion">
                    <div class="opinion__container">
                        <img src="<?= dw_the_img_attributes(get_field('img'), ['thumbnail', 'medium', 'large']); ?>" alt="" class="opinion__img">
                       <div class="opinion__infos">
                           <p class="opinion__title"><?php the_title(); ?></p>
                           <p class="opinion__date"><?php the_field('date'); ?></p>
                           <p class="opinion__avis">"<?php the_field('opinion'); ?>"</p>
                           <a href="<?php the_field('link'); ?>">Lire l'article</a>
                       </div>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <p class="news__empty">Il n'y a pas de coup de coeur ni de coup de gueule</p>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
