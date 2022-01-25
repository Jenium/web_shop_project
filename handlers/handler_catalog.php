<?php 

    include($_SERVER['DOCUMENT_ROOT'].'/parts/header_conf.php');

    $response = [
        'products' => [],
        'pagination' => [
            'count' => 0,
            'active' => 0
        ]
    ];

    // логика расчета данных для пагинации
    $limitProducts = 8;
    $pagination_active = (int) $_GET['page'];

    $sql_all_products = "SELECT products.* FROM products 
    INNER JOIN product_category ON products.id = product_category.product_id 
    WHERE product_category.category_id ='{$_GET['category_id']}'";
    $result_all_products = mysqli_query($link, $sql_all_products);
    $count_products = mysqli_num_rows($result_all_products); // вернёт значение, сколь товаров пришло в данном запросе.
    $pagination_count = ceil($count_products / $limitProducts); // ceil() округление числа в большую сторону;
    
    $response['pagination']['count'] = $pagination_count;
    $response['pagination']['active'] = $pagination_active;

    $start_limit = ($pagination_active - 1) * $limitProducts;

    $sql_products = "SELECT products.* FROM products 
    INNER JOIN product_category ON products.id = product_category.product_id 
    WHERE product_category.category_id ='{$_GET['category_id']}'
    LIMIT {$start_limit}, {$limitProducts}";

    $result_products = mysqli_query($link, $sql_products);

    while ($row = mysqli_fetch_assoc($result_products)) {
        $response['products'][] = $row;
    }

    sleep(1);

    echo json_encode($response);

?>