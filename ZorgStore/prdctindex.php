<?php include 'navigation.php';?>

<body>


<?php

$sql = "SELECT books.book_id, books.title, books.book_pic,  books.short_description, books.price, authors.first_name, authors.last_name FROM books, authors, author_book WHERE books.book_id = author_book.book_id AND authors.author_id = author_book.author_id" ;

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
		
	$id = $row["book_id"];
	$pic = $row["book_pic"];
	$price = $row["price"];
	$title = $row["title"];
    $name = $row["first_name"];
	$namel = $row["last_name"];
    $message = $row["short_description"]; 
	
	?>
	<div class="container container-genre-main">
	<div class="genre-row">
		<div class="genre-left">
			<a href="product.php?id=<?php echo $id ?>"> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($pic).'" width="133" height="200"/>';?> </a>
		</div>
		<div class="genre-right">
		<h2> <?php echo $title;  ?> </h2>
		<p> <?php echo $name . " " .$namel; ?></p>
		<p class="more" title="Read More"><?php echo $row["short_description"] ?></p>
		<p>Price: <?php echo $price ?> </p>
		<a href="product.php?id= <?php  echo $id; ?>" class = "btn btn-basic jbbutton">View Product </a>
		</div>
	</div>
</div>

	<?php
	}	

} 
 else {

	echo "We have no books for sale!.";
} ?>

</br>
</br>	

<script>
$('.more').css({height:'20px', overflow:'hidden'});
$('.more').on('click', function() {
    var $this = $(this);
    if ($this.data('open')) {
        $this.animate({height:'20px'});
        $this.data('open', 0);

    }
    else {
        $this.animate({height:'100%'});
        $this.data('open', 1);
    }
});
</script>
</body>
</html>