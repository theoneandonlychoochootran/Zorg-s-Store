<?php include 'navigation.php';?>

<body>
<?php

$sql = "SELECT * FROM authors" ;

$result = $conn->query($sql); ?>

<div class="container fb-jb">
	<div class = "panel panel-primary">
		<h1> List of Authors: </h1>
	</div>
</div>

<?php
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) { ?>
	
		
	<div class="genre-container">
	<div class="genre-item">
	<p>
	<a href="author.php?author=<?php echo $row["last_name"] ?>"> <?php echo $row["first_name"] . " " . $row["last_name"] ?> </a>
	</p>
	</div>
	</div>
<?php
	}	

} 
 else {

	echo "No authors found";
} ?>

</br>
</br>	

</body>
</html>