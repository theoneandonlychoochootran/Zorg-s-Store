<?php
// if the cookie is already set for the user,
// we'll need to update the cookie instead of
// creating a new one (since this 
// file is reloaded when navigation.php reloads.)

if (isset($_SESSION['user_id'])){
		$user_id = $_SESSION['user_id'];
		
		if (isset($_COOKIE[$user_id]) && $_COOKIE[$user_id]){ // not sure how to fix the "not an index" issue that happens when a new session begins and the cookie is first created, but when you reload the page, the cookie is recognized and the error goes away - I fixed it, its && not || - Justin
			$cart= json_decode($_COOKIE[$user_id], true); // true -> returns an array
			setcookie($user_id, json_encode($cart), time() + (86400 * 30), '/');
			//echo 'cookie updated';
		}
		else{
			$cart= array();
			setcookie($user_id, json_encode($cart), time() + (86400 * 30), '/');
			echo 'cookie created';
		}
}
?>