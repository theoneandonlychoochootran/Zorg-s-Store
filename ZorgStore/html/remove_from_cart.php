<?php include ('navigation/navigation.php');
		$id = $_GET['id'];

if(isset($_COOKIE[$user_id])){
	
	$cart = json_decode($_COOKIE[$user_id], true);

	if(!isset($cart[$id])){
		//$cart[$id] = $quantity;
		//setcookie($user_id, json_encode($cart), time() + (86400 * 30), '/');
	}
	else{
		unset($cart[$id]); 
		setcookie($user_id, json_encode($cart), time() + (86400 * 30), '/');
		
	}
}

$sql = "SELECT title,price, book_pic FROM books WHERE books.book_id='$id'";
	  $result = $conn->query($sql);
	  $row = $result->fetch_assoc();
?>	  

<div class="container">
	<h1>Removed from Cart!</h1>
	<div id="container_added_to_cart"> 
		<a href="product.php?id=<?php echo $id ?>"> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['book_pic']).'" width="133" height="200"/>';?> </a>
		<p><?php echo $row["title"]?></p>
		<!-- <p>Quantity: <?php echo $quantity?></p> -->
		
		<div class = "container_left">
		<a href="index.php"  class = "btn btn-basic jbbutton">Continue shopping </a>
		</div>
		<div class = "container_right">
		<a href=" cart.php"  class = "btn btn-basic jbbutton">View Cart  </a>
		</div>
	</div>
</div>