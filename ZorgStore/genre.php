<?php include 'navigation.php';?>
<?php $id = $_GET['genre'];
	  $sql = "SELECT book_id, title, price, short_description, book_pic FROM books WHERE book_id IN (SELECT book_id FROM category_book WHERE category_id IN(SELECT category_id FROM categories WHERE category_name = '$id'))";
	  $result = $conn->query($sql);
?>
<body>
<?php
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
?>		
<div class="container container-genre-main">
	<div class="genre-row">
		<div class="genre-left">
			<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row["book_pic"]).'" width="133" height="200">'?>
		</div>
		<div class="genre-right">
			<h2><?php echo $row["title"]?></h2>
			<p>Price: $<?php echo $row["price"]?></p>
			<a href=<?php echo 'product.php?id=' . $row['book_id'] ?> class = "btn btn-basic jbbutton">View Product </a>
		</div>
	</div>
</div>
	<?php 	}
}
else {
	?>
	<h2> No Results </h2>
<?php }  ?>
</br>
</br>
<?php include 'footer.php';?>

</body>
</html>