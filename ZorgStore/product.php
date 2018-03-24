<?php include 'navigation.php';?>
<?php $id = $_GET['id'];?>
<body>

<div class="container">
<div class="container-jb">    
  <div class="row-jb">
     <div class ="left-main">
		<img src="productsample.jpg" width="260" height="390">
	 </div>
	 <div class ="right-main">
		<h2>Title of Product</h2>
		<p>Description of Product</p>
		<?php echo $id; ?>
		<p>Price: $50.00</p>
		<a href="#" class = "btn btn-basic jbbutton">Add to cart </a>
	 </div>
   </div>
</div>
</div>

<?php include 'footer.php';?>
</body>
</html>
