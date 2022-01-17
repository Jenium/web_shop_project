<?php 

    include($_SERVER['DOCUMENT_ROOT'].'/web-mag/parts/functions.php');

    $products = [
        [
            'name' => 'Шапка',
            'price' => '1000р'
        ],
        [
            'name' => 'Штаны',
            'price' => '2000р'
        ]
    ];

    // d($products);
    // json_encode - переводит массив в строку json

    echo json_encode($products);

?>