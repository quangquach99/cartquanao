<?php
	session_start();
	var_dump($_POST);
	for($i = 0; $i < count($_POST); $i++) {
		$quantity = 'product_quantity' . $i;
		$_SESSION['cart'][$i]['product_quantity'] = $_POST[$quantity];
	}

	header("location: ./index.php?page_layout=checkout");