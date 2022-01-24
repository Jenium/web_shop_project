<?php include('../parts/header_conf.php'); ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Административная панель</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/products.php">Список товаров</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/product_add.php">Добавить новый товар</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/orders.php">Заказы</a>
            </li>
            
            <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->
        </ul>

        <br><br>