<?php include 'navigation.php';?>
<body>

<div class="container fb-jb">
	<div class = "panel panel-primary">
		<h1>Featured Books</h1>
		</div>
	</div>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
	<?php $id = 1;
	  $sql = "SELECT book_pic FROM books WHERE book_id='1'";
	  $result = $conn->query($sql);
	  $row = $result->fetch_assoc();
	?>
      <a href="product.php?id=<?php echo $id ?>"> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row["book_pic"]).'" width="160" height="240"/>';?> </a>
    </div>
    <div class="col-sm-4"> 
      <?php $id = 2;
	  $sql = "SELECT book_pic FROM books WHERE book_id='$id'";
	  $result = $conn->query($sql);
	  $row = $result->fetch_assoc();
	?>
      <a href="product.php?id=<?php echo $id ?>"> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row["book_pic"]).'" width="160" height="240"/>';?> </a>
    </div>
    <div class="col-sm-4"> 
      <?php $id = 3;
	  $sql = "SELECT book_pic FROM books WHERE book_id='$id'";
	  $result = $conn->query($sql);
	  $row = $result->fetch_assoc();
	?>
      <a href="product.php?id=<?php echo $id ?>"> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row["book_pic"]).'" width="160" height="240"/>';?> </a>
    </div>
  </div>

<div class="row">
  <div class="genre-container">
	<div class="genre-item"><a href="genre.php?id=1" class="genre-text">Fiction</a></div>
	<div class="genre-item"><a href="genre.php?id=2" class="genre-text">Kitties</a></div>
	<div class="genre-item"><a href="genre.php?id=3" class="genre-text">Nonfiction</a></div>
	<div class="genre-item"><a href="genre.php?id=4" class="genre-text">Cooking</a></div>
	<div class="genre-item"><a href="genre.php?id=5" class="genre-text">Other</a></div>
  </div>
</div>
  
</div>

<?php include 'footer.php';?>

</body>
</html>
