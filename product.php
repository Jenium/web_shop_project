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

<div class="breadcrumbs" style="margin-bottom: 24px;">
    главная / мужчинам / обувь / <?= $template['name'] ?>
</div>
<div class="product">
    <div class="product-img" style="background-image: url('<?= $template['img_url'] ?>');"></div>
    <div class="title" style="font-weight: 600;"><?= $template['name'] ?></div>
    <div class="product-article">Артикул: 385904</div>
    <div class="undertitle" style="margin: 20px 0 0 0;"><?= $template['price'] ?> руб.</div>
    <div class="product-description"><?= $template['description'] ?></div>
    <div class="product-text">размер</div>
    <div class="product-size">
        <div class="product-size-box">38</div>
        <div class="product-size-box">39</div>
        <div class="product-size-box">40</div>
        <div class="product-size-box">41</div>
        <div class="product-size-box">42</div>
    </div>
    <div class="product-btn" data-product-id="<?= $template['id'] ?>">Добавить в корзину</div>
</div>

<?php

$footer_config = [
    'script' => 'product.js'
];

include('parts/footer.php');

?>