<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?= dw_asset('img/logo-petit.png')?>">
    <link rel="stylesheet" href="<?= dw_asset('css/theme.css') ?>">
    <?php wp_head(); ?>
    <title>Pankart, groupe de musique rock celtique</title>
</head>
<body>
<header class="header">
    <h1 class="sro" role="heading" aria-level="1">Pankart, groupe de musique rock celtique</h1>
    <a href="https://pankart.natacha-belboom.be/"><img src="<?= dw_asset('img/logo.svg')?>" alt="logo de pankart" class="logo"></a>
    <img src="<?= dw_asset('img/menu.png')?>" class="more-info__header" alt="icone du menu">
    <nav class="top__menu menu" role="navigation">
        <h2 class="sro" role="heading" aria-level="2">Navigation principale</h2>
        <?php foreach(dw_menu('main') as $link): ?>
            <a href="<?= $link->url; ?>" class="menu__link__start <?=  $link->active ?>"><?= $link->label; ?></a>
        <?php endforeach; ?>
    </nav>
</header>
