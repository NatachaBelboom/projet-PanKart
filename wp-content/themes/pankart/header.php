<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= dw_asset('css/theme.css') ?>">
    <?php wp_head(); ?>
    <title>Pankart, groupe de musique rock celtique</title>
</head>
<body>
<header class="header">
    <h1 class="sro">Pankart, groupe de musique rock celtique</h1>
    <a href="http://pankart.local/"><img src="<?= dw_asset('img/logo.png')?>" alt="logo de pankart" class="logo"></a>
    <img src="<?= dw_asset('img/menu.png')?>" class="more-info__header" alt="icone du menu">

    <nav class="top__menu menu" role="navigation">
        <h1 class="sro">Navigation principale</h1>
        <?php foreach(dw_menu('main') as $link): ?>
            <a href="<?= $link->url; ?>" class="menu__link__start <?=  $link->active ?>"><?= $link->label; ?></a>
        <?php endforeach; ?>
    </nav>
</header>
