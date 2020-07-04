<?php
	session_start();
	function set_session($array) {
		$_SESSION['cart'] = $array;
	}
	function pushToCart($array) {
		array_push($_SESSION['cart'],$array);
	}
	function unset_session($cartKey) {
		if(isset($_SESSION['cart'][$cartKey])) {
			unset($_SESSION['cart'][$cartKey]);
		} else {
			return false;
		}
	}