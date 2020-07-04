<?php
include './library/session.php';
$cartKey = isset($_GET['cartKey']) ? $_GET['cartKey'] : '';

if($cartKey !== '') {
    unset_session($cartKey);
}

header("location: ./?page_layout=cart");
exit();