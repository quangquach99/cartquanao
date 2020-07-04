<?php
	session_start();
	function set_session($array) {
		$_SESSION['cart'] = $array;
	}
	function pushToCart($array) {
		array_push($_SESSION['cart'],$array);
	}
	function get_session($key) {
		if(isset($_SESSION[$key])) {
			return $_SESSION[$key];
		} else {
			return false;
		}
	}
	function unset_session($key) {
		if(isset($_SESSION[$key])) {
			unset($_SESSION[$key]);
		} else {
			return false;
		}
	}