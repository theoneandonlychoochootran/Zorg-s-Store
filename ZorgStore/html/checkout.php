<?php include ('navigation/navigation.php'); ?>

<h2>CheckOut</h2>

<?php 
$total = 0;
$cart= json_decode($_COOKIE[$user_id], true); ?>
<?php 
	while($id = key($cart)){
		$sql = "SELECT title, price FROM books WHERE book_id ='$id'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) { 
				//calculates total cost of books based on quantity
				$total = $total + ($row["price"] * $cart[$id])?>
				<div class="container-cart-co">
						<p> <?php echo $row["title"];  ?></p>
						<p>Price: $<?php echo $row["price"]?> &emsp; Quantity: <?php echo $cart[$id]; ?> </p>
					</div>
			<h1></h1>
		<?php }			
		}
		next($cart);		
		} ?>
<div class="invoice-container">
<p>Subtotal: <?php echo number_format((float)$total, 2, '.', '');; ?></p>
<p>Shipping: $<?php echo number_format((float)$shipping = 10, 2, '.', ''); ?></p>
<p>Total: $<?php echo number_format((float)$total + $shipping, 2, '.', ''); ?></p>
</div>
</br>
</br>
</br>
