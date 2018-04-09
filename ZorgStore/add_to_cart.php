<?php include 'navigation.php' ?>

<?php 	$id = $_GET['id'];
		$sql = "SELECT books.book_id,title,price, short_description, book_pic, quantity, authors.first_name, authors.last_name FROM books, authors, author_book WHERE books.book_id='$id' AND author_book.book_id = '$id' AND authors.author_id = author_book.author_id";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();


// the following should add a book to the cookie
// so far, doesn't quite work yet

		//if($userID[$id] > 0){
			//$quantity = $quantity + 1;
			//setcookie($userID[$id], $quantity);
		//}
		//else{
			//$quantity = 1;
			//setcookie($userID[$id], $quantity);
		//}
		
?>

<h2>Added to Cart</h2>

<?php echo $row['title']?>

<br>
<br>
<a href=index.php class = "btn btn-basic jbbutton">Continue shopping </a>														

<?php include 'footer.php';?>