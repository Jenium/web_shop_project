<?php 

    // Подключение к базе данных

    $link = mysqli_connect('localhost', 'root', '', 'web_shop');
    mysqli_set_charset($link, 'utf8');

?>