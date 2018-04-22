<?php include 'navigation/navigation.php';?>
<?php $id = $_GET['id'];
	  $sql = "SELECT books.book_id,title,price, short_description, book_pic, quantity, authors.first_name, authors.last_name FROM books, authors, author_book WHERE books.book_id='$id' AND author_book.book_id = '$id' AND authors.author_id = author_book.author_id";
	  $result = $conn->query($sql);
	  $row = $result->fetch_assoc();
	  
?>

<body>

<div class="container">
<div class="container-jb">    
  <div class="row-jb">
     <div class ="left-main">
		<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row["book_pic"]).'" width="260" height="390"/>';?>
	 </div>
	 <div class ="right-main">
		<h2><?php echo $row["title"]?></h2>
		<a href="author.php?author=<?php echo $row["last_name"] ?>"> <?php echo $row["first_name"] . " " . $row["last_name"] ?> </a>
		<p><?php echo $row["short_description"]?></p>
		<p><?php echo "$" . $row["price"]?></p>
		<?php if($row["quantity"] <= 0)
		{ ?>
			<p>OUT OF STOCK</p>
		<?php }
		else {
			if (isset($_SESSION['user_id'])){ ?>	
			<form action="" method="POST">
				<input type="text" name="bookquantity" value="1">
				</br>
				</br>
				<button  class = "btn btn-basic jbbutton" type="submit" name="signup">Update Quantity</button>
			</form>
			</br>
			<?php 
			if(isset($_POST['bookquantity']) && $_POST['bookquantity']){ ?>
				<p> Quantity selected: <?php echo $_POST['bookquantity']; ?> </p>
				
			<?php
				$filename = "add_to_cart.php?id=" .$row['book_id'] . "&num=" . $_POST['bookquantity'];
			}
			}
			else{
				$filename = "login.php";}
			if(isset($filename) && $filename) { ?>
				<a href=<?php echo $filename ?> class = "btn btn-basic jbbutton">Add to cart </a>
			<?php }
			else { ?>
				<a href="add_to_cart.php?id=<?php echo $row['book_id'];?>&num=1" class = "btn btn-basic jbbutton">Add to cart </a>
			<?php }
			}?>
	 </div>
   </div>
</div>
</div>

</body>
</html>
