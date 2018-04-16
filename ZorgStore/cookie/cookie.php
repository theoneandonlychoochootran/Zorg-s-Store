<?php

if (isset($_SESSION['user_id'])){
		$user_id = $_SESSION['user_id'];
		
		if (isset($_COOKIE[$user_id]) && $_COOKIE[$user_id]){ 
			$cart= json_decode($_COOKIE[$user_id], true); // true -> returns an array
			setcookie($user_id, json_encode($cart), time() + (86400 * 30), '/');
			//echo 'cookie updated';
		}
		else{
			$cart= array();
			setcookie($user_id, json_encode($cart), time() + (86400 * 30), '/');
			//echo 'cookie created';
		}
}
?>