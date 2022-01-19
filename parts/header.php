<?php

// Шапка сайта  

include('parts/header_conf.php');

?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $header_config['title'] ?></title>

    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/<?= $header_config['style'] ?>">
</head>

<body>
    <div class="wrapper">

        <header>
            <div class="navigation-head">
                <nav class="menu">
                    <a href="#" class="menu-item logo"></a>
                    <a href="/catalog.php?category_id=1" class="menu-item text">Женщинам</a>
                    <a href="/catalog.php?category_id=2" class="menu-item text">Мужчинам</a>
                    <a href="/catalog.php?category_id=3" class="menu-item text">Детям</a>
                    <a href="#" class="menu-item text">Новинки</a>
                    <a href="#" class="menu-item text">О нас</a>
                </nav>
                <div class="account">
                    <a class="account-logining" href="#">
                        <div class="account-logining-icon icon-login"></div>
                        <span>Войти</span>
                    </a>
                    <a class="account-logining" href="#">
                        <div class="account-logining-icon icon-basket"></div>
                        <span>Корзина (0)</span>
                    </a>
                </div>
            </div>
        </header>