<?php include 'navigation.php';?>
<?php $id = $_GET['id'];
	  $sql = "SELECT title,price, short_description, book_pic, quantity, authors.first_name, authors.last_name FROM books, authors, author_book WHERE books.book_id='$id' AND author_book.book_id = '$id' AND authors.author_id = author_book.author_id";
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
		<p><?php echo $row["first_name"] . " " . $row["last_name"]?> </p>
		<p><?php echo $row["short_description"]?></p>
		<p><?php echo "$" . $row["price"]?></p>
		<?php if($row["quantity"] <= 0)
		{ ?>
			<p>OUT OF STOCK</p>
		<?php }
		else { ?>
			<a href="#" class = "btn btn-basic jbbutton">Add to cart </a>
		<?php }?>
	 </div>
   </div>
</div>
</div>

<?php include 'footer.php';?>
</body>
</html>
