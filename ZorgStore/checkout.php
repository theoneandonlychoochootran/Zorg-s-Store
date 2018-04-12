<?php include ('navigation.php'); ?>

<h2>CheckOut</h2>

<?php 
$cart= json_decode($_COOKIE[$user_id], true);

echo print_r($cart);
?>

<p>Price per Book</p>
<p>Subtotal</p>
<p>Tax</p>
<p>Shipping</p>
<p>Total</p>

<?php include 'footer.php';?>