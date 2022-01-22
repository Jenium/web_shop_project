<?php

// Главная страница


$header_config = [
    'title' => 'Главная страница',
    'style' => 'index.css'
];

include('parts/header.php');

?>

<section class="heading">
    <h1 class="heading-title">
        Новые поступления весны
    </h1>
    <div class="heading-undertitle">Мы подготовили для Вас лучшие новинки сезона</div>
    <div class="heading-btn">посмореть новинки</div>
</section>

<section class="banner">
    <div class="banner-item" style="grid-row-start: 1; grid-row-end: 3; background-image: url('/images/index/1.jpg');">
        <div>
            <div class="banner-item-text1">
                джинсовые куртки
            </div>
            <div class="banner-item-text2">
                New Arrival
            </div>
        </div>
    </div>
    <div class="banner-item" style="background-color: #bbbbbb;">
        <div>
            <div class="banner-item-attention"></div>
            <div class="banner-item-text3">
                Каждый сезон мы подготавливаем для Вас исключительно лучшую модную одежду. Следите за нашими новинками.
            </div>
        </div>
    </div>
    <div class="banner-item" style="background-image: url('/images/index/3.jpg');">
    </div>
    <div class="banner-item" style="background-color: #606060;">
        <div>
            <div class="banner-item-arrow"></div>
            <div class="banner-item-text1">
                Элегантная обувь
            </div>
            <div class="banner-item-text2">
                ботинки, кросовки
            </div>
        </div>
    </div>
    <div class="banner-item" style="background-image: url('/images/index/2.jpg');">
        <div>
            <div class="banner-item-text1">
                джинсы
            </div>
            <div class="banner-item-text2" style="text-transform: none;">
                от 3200 руб.
            </div>
        </div>
    </div>
    <div class="banner-item" style="background-color: #bbbbbb;">
        <div>
            <div class="banner-item-attention"></div>
            <div class="banner-item-text3">
                Самые низкие цены в Москве. Нашли дешевле? Вернем разницу.
            </div>
        </div>
    </div>
    <div class="banner-item" style="grid-column-start: 4; grid-row-start: 2; grid-row-end: 4; background-image: url('/images/index/4.jpg');">
        <div>
            <div class="banner-item-text1">
                детская одежда
            </div>
            <div class="banner-item-text2">
                New Arrival
            </div>
        </div>
    </div>
    <div class="banner-item" style="background-image: url('/images/index/5.jpg');">
    </div>
    <div class="banner-item" style="background-color: #606060;">
        <div>
            <div class="banner-item-arrow"></div>
            <div class="banner-item-text1">
                аксессуары
            </div>
        </div>
    </div>
    <div class="banner-item" style="background-image: url('/images/index/6.jpg'); background-color: rgba(0, 0, 0, 0.5); background-blend-mode: multiply;">
        <div>
            <div class="banner-item-text1">
                Спортивная одежда
            </div>
            <div class="banner-item-text2" style="text-transform: none;">
                от 590 руб.
            </div>
        </div>
    </div>
</section>

<section class="subscribe">
    <h3 class="title">
        будь всегда в курсе выгодных предложений
    </h3>
    <div class="undertitle">
        подписывайся и следи за новинками и выгодными предложениями.
    </div>
    <form method="" action="">
        <div class="subscribe-form">
            <div>
                <input class="subscribe-form-item" type="email" name="email" placeholder="e-mail">
            </div>
            <div>
                <input  class="subscribe-form-btn" type="submit" name="button" value="записаться">
            </div>
        </div>
        <div class="subscribe-error-wrap">
            <div class="subscribe-error error-active">
                Некорректный e-mail. Попробуйте еще раз.
            </div>
        </div>
    </form>
</section>

<?php

$footer_config = [
    'script' => 'index.js'
];

include('parts/footer.php');

?>