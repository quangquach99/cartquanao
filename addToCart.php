<?php
include './library/database.php';
include './library/session.php';

if(isset($_POST['addToCart'])) {
    $product_id = isset($_POST['product_id']) ? $_POST['product_id'] : '';
    $size = isset($_POST['size']) ? $_POST['size'] : '';
    $color = isset($_POST['color']) ? $_POST['color'] : '';
    $product_quantity = isset($_POST['product_quantity']) ? $_POST['product_quantity'] : '';
    $products = new Dbh;
    $product = $products->getProductById($product_id);
    $product_code = $product['product_code'];
    $product_price = $product['product_price'];
    $product_image = $product['product_image'];
    $product_name = $product['product_name'];

    $array = [
        'product_id' => $product_id,
        'product_size' => $size,
        'product_color' => $color,
        'product_quantity' => $product_quantity,
        'product_price' => $product_price,
        'product_code' => $product_code,
        'product_image' => $product_image,
        'product_name' => $product_name
    ];
    if(!isset($_SESSION['cart'])) {
        set_session($array);
    } else {
        pushToCart($array);
    }
    header("location: ./index.php?page_layout=cart");
    exit();
}