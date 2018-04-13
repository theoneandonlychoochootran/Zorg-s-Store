<!DOCTYPE html>
<html lang="en">
<?php
session_start(); 
include('dbconnect.php');
include ('cookie.php');
?>
<head>
  <title>Zorg Books</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css"/>
  <script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<div class="jumbotron">
  <div class="container text-center">
	<h1><a href="index.php">Zorg Books!</a></h1>      
  </div>
</div>

<br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <ul class="nav navbar-nav navbar-left">
	  <form class="form-inline">
	  <?php if (!isset($_SESSION['user_id'])){ ?>
	  <?php }else {?>
		<a href=cart.php class = "btn btn-link">Shopping Cart </a>
	  <?php } ?>
		<a href="prdctindex.php" class="btn btn-link">Products</a>
		<a href="authorindex.php" class="btn btn-link">Authors</a>
		<div class="dropdown">
			<button class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown">
			Genres
			<span class="caret"></span></button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="genre.php?genre=Fiction"> Fiction</a>
				<a class="dropdown-item" href="genre.php?genre=Children"> Children's</a>
				<a class="dropdown-item" href="genre.php?genre=Nonfiction"> Nonfiction</a>
				<a class="dropdown-item" href="genre.php?genre=Cooking"> Cooking</a>
			</div>
		</div>
      </ul>
	  </form>
	  <ul class="nav navbar-nav navbar-right">
		<form class="form-inline">
		<?php if (!isset($_SESSION['user_id'])){?>
		<a href="signup.php" class="btn btn-link">Sign Up</a>
		<a href="login.php" class="btn btn-link">Log In</a>
		<?php }else {?>
		<a href="profile.php" class="bth btn-link">Welcome, <?php echo $_SESSION['user_id'] ?></a>
		<a href="logout.php" class="btn btn-link">Log Out</a>
		<?php }?>
		
	  </ul>
   </form>
    </div>
  </div>
</nav>