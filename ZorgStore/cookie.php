<?php
// to verify that the cookie is set,
// log in to zorg store, (you can use: userid => constructionpaperguy, pssword => ipreferyellow)
// Firefox --> about:preferences 
// Type cookies in "Find in Option"
// Select 'remove individual cookies'
// Type 'localhost' in search bar and you should see your cookie, congrats!
if (isset($_SESSION['user_id'])){
		$userID = $_SESSION['user_id'];
		$cart=[];
		$cart[1] = 'apple'; // for testing purposes
		$cart[2] = 'banana'; // this one too; remove after testing
		setcookie($userID, json_encode($cart));
		}
?>