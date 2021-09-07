<?php /* Template Name: Page de contact */
get_header(); ?>
<main class="main__contact">
<section class="form">
    <h1 class="contact" role="heading" aria-level="1">Contacte-nous ! </h1>
    <?= do_shortcode('[contact-form-7 id="114" title="Contact"]') ?>
</section>
</main>
<?php get_footer(); ?>
