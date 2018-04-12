<?php include 'navigation.php';

// get the book_id and quantities from the cookie
// create sql queries to display:
// title
// book_pic
// quantity
// price
$cart = json_decode($_COOKIE[$user_id], true);
?>

<h2>Your Shopping Cart</h2>

<?php echo print_r($cart); // replace this array with book info?>
<a href=cart.php class = "btn btn-basic jbbutton">Update Cart </a>
<a href=index.php class = "btn btn-basic jbbutton">Continue shopping </a>
<a href=checkout.php class = "btn btn-basic jbbutton">CheckOut </a>

<?php include 'footer.php';?>