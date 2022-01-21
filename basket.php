<?php

// Корзина


$header_config = [
    'title' => 'Корзина',
    'style' => 'basket.css'
];

include('parts/header.php');

?>

<section class="basket">
    <h3 class="title" style="font-weight: 600;">
        Ваша корзина
    </h3>
    <div class="undertitle">
        Товары резервируются на ограниченное время
    </div>

    <div class="table-head">
        <div class="col">фото</div>
        <div class="col">наименование</div>
        <div class="col">размер</div>
        <div class="col">количество</div>
        <div class="col">стоимость</div>
        <div class="col">удалить</div>
    </div>

    <div class="table-row">
        <div class="col _photo" style="background-image: url('./images/catalog/1.jpg');"></div>
        <div class="col">
            <div style="text-transform: uppercase; font-weight: 600;">
                куртка синяя
            </div>
            <div style="font-size: 11px;">
                арт. 123412
            </div>
        </div>
        <div class="col" style="font-family: 'Lato'; font-size: 16px;">39</div>
        <div class="col _amount">
            <div style="font-family: 'Lato'; padding: 10px;">1</div>
            <div>
                <div class="count-btn">+</div>
                <div class="count-btn">-</div>
            </div>
        </div>
        <div class="col">3800 руб.</div>
        <div class="col">
            <div class="_delete"></div>
        </div>

    </div>

    <div class="table-footer">
        <div class="table-footer-total">
            Итого:
            <span class="table-footer-total-summ">12500 руб.</span>
        </div>
    </div>

    <div class="zigzag">
        <div class="zigzag-block">
            <div class="zigzag-block-line"></div>
            <div class="zigzag-block-line"></div>
            <div class="zigzag-block-line"></div>
        </div>
    </div>

</section>

<section class="delivery">
    <h3 class="title">
        адрес доставки
    </h3>
    <div class="undertitle">
        Все поля обязательны для заполнения
    </div>

    <form method="" action="">

        <div class="delivery-item">
            <div>
                выберите вариант доставки
            </div>
            <select class="delivery-item-form" name="delivery">
                <option value="courier">Курьерская служба - 500 руб.</option>
                <option value="ruspost">Почта России - 300 руб.</option>
                <option value="pickpoint">Пункт выдачи - 300 руб.</option>
                <option value="postamat">Постамат - 200 руб.</option>
                <option value="pickup">Самовывоз - 50 руб.</option>
            </select>
        </div>

        <div class="half">
            <div class="delivery-item _half">
                <div>
                    имя
                </div>
                <input class="delivery-item-form" name="name" type="text">
            </div>

            <div class="delivery-item _half">
                <div>
                    фамилия
                </div>
                <input class="delivery-item-form" name="surname" type="text">
            </div>
        </div>

        <div class="delivery-item">
            <div>
                адрес
            </div>
            <input class="delivery-item-form" name="adress" type="text">
        </div>

        <div class="half">
            <div class="delivery-item _half">
                <div>
                    город
                </div>
                <input class="delivery-item-form" name="city" type="text">
            </div>

            <div class="delivery-item _half">
                <div>
                    индекс
                </div>
                <input class="delivery-item-form" name="index" type="text">
            </div>
        </div>

        <div class="half">
            <div class="delivery-item _half">
                <div>
                    телефон
                </div>
                <input class="delivery-item-form" name="phone" type="tel">
            </div>

            <div class="delivery-item _half">
                <div>
                    e-mail
                </div>
                <input class="delivery-item-form" name="email" type="email">
            </div>
        </div>

    </form>

</section>

<div class="zigzag">
    <div class="zigzag-block">
        <div class="zigzag-block-line"></div>
        <div class="zigzag-block-line"></div>
        <div class="zigzag-block-line"></div>
    </div>
</div>

<section class="payment">
    <h3 class="title">
        Варианты оплаты
    </h3>
    <div class="undertitle">
        Все поля обязательны для заполнения
    </div>

    <div class="payment-total">
        <div class="payment-total-item">
            <div class="payment-total-text">Стоимость: </div>
            <div class="payment-total-number"> 12500 руб.</div>
        </div>
        <div class="payment-total-item">
            <div class="payment-total-text">Доставка:</div>
            <div class="payment-total-number">500 руб.</div>
        </div>
        <div class="payment-total-item" style="color: #f68236;">
            <div class="payment-total-text">Итого:</div>
            <div class="payment-total-number">13000 руб.</div>

        </div>
    </div>

    <form method="" action="">

        <div class="payment-item">
            <div>
                выберите способ оплаты
            </div>
            <select class="payment-item-form" name="delivery">
                <option value="card">Банковская карта</option>
                <option value="cash">Наличные</option>
                <option value="online">Онлайн оплата</option>
            </select>
        </div>

        <input class="payment-item-btn" type="submit" name="button" value="заказать">
    </form>

</section>

<?php

$footer_config = [
    'script' => 'basket.js'
];

include('parts/footer.php');

?>