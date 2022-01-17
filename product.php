<?php 

    // Карточка товара


    $header_config = [
        'title' => 'Карточка товара',
        'style' => 'product.css'
    ];

    include('parts/header.php');

    $template = [
        'id' => '',
        'img_url' => '',
        'name' => '',
        'description' => '',
        'price' => ''
    ];

    if (!empty($_GET['id'])) {
        $sql_product = "SELECT * FROM products WHERE id='{$_GET['id']}'";
        $result_product = mysqli_query($link, $sql_product);
        $template = mysqli_fetch_assoc($result_product);

    } else {
        header('Location: /catalog.php');
    }

?>

<div class="product">
    <div class="product-img" style="background-image: url('<?= $template['img_url'] ?>');"></div>
    <div class="product-name"><?= $template['name'] ?></div>
    <div class="product-price"><?= $template['price'] ?> руб.</div>
    <div class="product-description"><?= $template['description'] ?></div>
    <div class="product-btn">Добавить в корзину</div>
</div>

<?php

    $footer_config = [
        'script' => 'product.js'
    ];

    include('parts/footer.php');

?>