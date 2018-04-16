<?php include ('navigation.php');
		$id = $_GET['id'];
		$quantity = '1';	// won't be hard-coded in release

if(isset($_COOKIE[$user_id])){
	
	$cart = json_decode($_COOKIE[$user_id], true);

	if(!isset($cart[$id])){
		$cart[$id] = $quantity;
		setcookie($user_id, json_encode($cart), time() + (86400 * 30), '/');
	}
	else{
		$previous_quantity = $cart[$id];
		$cart[$id] = $previous_quantity + $quantity;
		
		setcookie($user_id, json_encode($cart), time() + (86400 * 30), '/');
	}
}
?>

<h2>Added to Cart</h2>
<p>Your selected book displayed here</p>

<a href=cart.php class = "btn btn-basic jbbutton">Go to Cart </a><br><br>
<a href=index.php class = "btn btn-basic jbbutton">Continue shopping </a><br>