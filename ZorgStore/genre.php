<?php include 'navigation.php';?>
<?php $id = $_GET['id'];?>
<body>

<div class="container container-genre-main">
	<div class="genre-row">
		<div class="genre-left">
			<img src="productsample.jpg" width="133" height="200">
		</div>
		<div class="genre-right">
		<h2>Title of Product</h2>
		<p></p>
		<?php echo $id; ?>
		<p>Price: $50.00</p>
		<a href="product.php?id=123" class = "btn btn-basic jbbutton">View Product </a>
		</div>
	</div>
</div>

<?php include 'footer.php';?>

</body>
</html>