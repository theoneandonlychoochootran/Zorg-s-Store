<?php include 'navigation.php';?>
<?php $id =  $_GET['author'];;
	  $sql = "SELECT book_id, title, price, short_description, book_pic FROM books WHERE book_id IN (SELECT book_id FROM author_book WHERE author_id IN(SELECT author_id FROM authors WHERE last_name = '$id'))";
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
			<p><?php echo implode(' ', array_slice(explode(' ', $row['short_description']), 0, 25)); ?>...</p>
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