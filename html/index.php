<?php include './navigation/navigation.php';?>
<body>

<div class="container fb-jb">
	<div class = "panel panel-primary">
		<h1>Featured Books</h1>
		</div>
	</div>

<div class="carousel-wrap">
<div id="zorgcarousel" class="carousel slide" data-ride="carousel" data-interval="3500">


  <ul class="carousel-indicators">
  <?php $id = 1;
	  $sql = "SELECT book_pic, title, book_id FROM books WHERE book_id='1'";
	  $result = $conn->query($sql);
	  $row1 = $result->fetch_assoc();
	?>
    <li data-target="#zorgcarousel" data-slide-to="0" class="active"></li>
	<?php $id = 2;
	  $sql = "SELECT book_pic, title, book_id FROM books WHERE book_id='2'";
	  $result = $conn->query($sql);
	  $row2 = $result->fetch_assoc();
	?>
    <li data-target="#zorgcarousel" data-slide-to="1"></li>
	<?php $id = 3;
	  $sql = "SELECT book_pic, title, book_id FROM books WHERE book_id='3'";
	  $result = $conn->query($sql);
	  $row3 = $result->fetch_assoc();
	?>
    <li data-target="#zorgcarousel" data-slide-to="2"></li>
  </ul>
  

  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="product.php?id=<?php echo $row1["book_id"] ?>"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row1["book_pic"]).'" alt="$row1["title"] width="300" height="450"/>' ?> 
    </div>
    <div class="carousel-item">
      <a href="product.php?id=<?php echo $row2["book_id"] ?>"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row2["book_pic"]).'" alt="$row2["title"] width="300" height="450"/>' ?>
    </div>
    <div class="carousel-item">
      <a href="product.php?id=<?php echo $row3["book_id"] ?>"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row3["book_pic"]).'" alt="$row3["title"] width="300" height="450"/>' ?>
    </div>
  </div>	
  

  <a class="carousel-control-prev" href="#zorgcarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#zorgcarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</br>

</body>
</html>
