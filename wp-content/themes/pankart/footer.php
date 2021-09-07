<footer class="end">
    <div class="menu__container">
        <nav class="end__menu menu" role="navigation">
            <h1 class="end__menu title" role="heading" aria-level="1">Navigation</h1>
            <?php foreach (dw_menu('main') as $link): ?>
                <a href="<?= $link->url; ?>" class="menu__link__start <?= $link->active ?>"><?= $link->label; ?></a>
            <?php endforeach; ?>
        </nav>
        <nav class="end__menu menu" role="navigation">
            <h1 class="end__menu title" role="heading" aria-level="1">Streaming</h1>
            <?php foreach (dw_menu('streaming') as $link): ?>
                <a href="<?= $link->url; ?>" class="menu__link__start <?= $link->active ?>"><?= $link->label; ?></a>
            <?php endforeach; ?>
        </nav>
        <nav class="end__menu menu" role="navigation">
            <h1 class="end__menu title" role="heading" aria-level="1">Réseaux sociaux</h1>
            <?php foreach (dw_menu('social') as $link): ?>
                <a href="<?= $link->url; ?>" class="menu__link__start <?= $link->active ?>"><?= $link->label; ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
    <div class="copyright">
        <p>
            © Pankart
        </p>
    </div>
</footer>
<script src="<?= dw_asset('js/app.js') ?>"></script>
</body>
</html>