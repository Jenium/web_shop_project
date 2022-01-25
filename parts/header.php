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
                    <a href="/" class="menu-item logo"></a>
                    <a href="/catalog.php?category_id=1" class="menu-item underline">Женщинам</a>
                    <a href="/catalog.php?category_id=2" class="menu-item underline">Мужчинам</a>
                    <a href="/catalog.php?category_id=3" class="menu-item underline">Детям</a>
                    <a href="#" class="menu-item underline">Новинки</a>
                    <a href="#" class="menu-item underline">О нас</a>
                </nav>
                <div class="account">
                    <a class="account-logining" href="#">
                        <div class="account-logining-icon icon-login"></div>
                        <span class="underline">Войти</span>
                    </a>
                    <a class="account-logining" href="/basket.php">
                        <div class="account-logining-icon icon-basket"></div>
                        <span class="underline">Корзина <span class="counter">(0)</span></span>
                    </a>
                </div>
            </div>
        </header>