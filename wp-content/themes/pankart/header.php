<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= dw_asset('css/theme.css') ?>">
    <?php wp_head(); ?>
    <title>Pankart</title>
</head>
<body>
<header class="header">
    <a href=""><img src="<?= dw_asset('img/logo.png')?>" alt="logo de pankart" class="logo"></a>
    <nav class="top__menu menu" role="navigation">
        <h1 class="sro">Navigation principale</h1>
        <?php foreach(dw_menu('main') as $link): ?>
            <a href="<?= $link->url; ?>" class="menu__link__start <?=  $link->active ?>"><?= $link->label; ?></a>
        <?php endforeach; ?>
    </nav>
    <!--<nav class="top__menu menu social" role="navigation">
        <h1 class="sro">Réseaux sociaux</h1>
        <?php foreach(dw_menu('social') as $link): ?>
            <a href="<?= $link->url; ?>" class="menu__link__start menu__social"><?= $link->label; ?></a>
        <?php endforeach; ?>
    </nav> -->
</header>
