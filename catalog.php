<?php

// Каталог товаров


$header_config = [
    'title' => 'Каталог товаров',
    'style' => 'catalog.css'
];

include('parts/header.php');

$category_id = 1;

if (!empty($_GET['category_id'])) {
    $category_id = (int) $_GET['category_id'];
}

$sql_category = "SELECT * FROM categories WHERE id='{$category_id}'";
$result = mysqli_query($link, $sql_category);

$category = mysqli_fetch_assoc($result);

?>

<div class="catalog" data-category-id="<?= $category['id'] ?>">
    <div class="breadcrumbs">
        главная / <?= $category['name'] ?>
    </div>
    <div class="catalog-header">
        <h1 class="title">
            <?= $category['name'] ?>
        </h1>
        <div class="undertitle">
            Все товары
        </div>

        <form method="" action="">
            <select class="form-field" name="category">
                <option disabled selected style="display: none;">Категория</option>
                <option value="women">Женщинам</option>
                <option value="men">Мужчинам</option>
                <option value="children">Детям</option>
                <option value="new">Новинки</option>
            </select>
            <select class="form-field" name="size">
                <option selected disabled hidden>Размер</option>
                <option value="">S</option>
                <option value="">M</option>
                <option value="">L</option>
            </select>
            <select class="form-field" name="price">
                <option selected disabled hidden>Стоимость</option>
                <option></option>
                <option value="">0-1000 руб.</option>
                <option value="">1000-3000 руб.</option>
                <option value="">3000-6000 руб.</option>
                <option value="">6000-20000 руб.</option>
            </select>
        </form>
    </div>

    <div class="catalog-list">

    </div>

    <div class="catalog-pagination">
        <div class="catalog-pagination-item _active">1</div>
        <div class="catalog-pagination-item">2</div>
        <div class="catalog-pagination-item">3</div>
        <div class="catalog-pagination-item">4</div>
    </div>

    <div class="loader">Загрузка...</div>
</div>

<?php

$footer_config = [
    'script' => 'catalog.js'
];

include('parts/footer.php');

?>