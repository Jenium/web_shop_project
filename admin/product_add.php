<?php
include('parts/header.php');

// Добавление товара в базу
if (isset($_POST['add'])) {
    $sql_add = "INSERT INTO products (id, img_url, name, description, price) 
                VALUES (null, '{$_POST['img_url']}', '{$_POST['name']}', '{$_POST['description']}', '{$_POST['price']}')";
    $result_add = mysqli_query($link, $sql_add);
    $id = mysqli_insert_id($link);
}

if ($result_add) {
    echo "<div class='alert alert-success' role='alert'>
    Товар успешно добавлен! (<a href='/admin/product_edit.php?id={$id}'>Редактировать</a>)
    </div>";
} else {
    echo '<div class="alert alert-danger" role="alert">
    Не удалось добавить товар!
    </div>';
}

?>

<h1>
    Добавление нового товара
</h1>

<form method="POST">
    <input type="hidden" name="add" value="add">

    <div class="mb-3">
        <input type="text" class="form-control" placeholder="Путь до картинки" name="img_url">
    </div>

    <div class="mb-3">
        <input type="text" class="form-control" placeholder="Название товара" name="name">
    </div>

    <div class="mb-3">
        <input type="text" class="form-control" placeholder="Описание" name="description">
    </div>

    <div class="mb-3">
        <input type="text" class="form-control" placeholder="Цена" name="price">
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>

<?php include('parts/footer.php'); ?>