<!DOCTYPE html>
<html lang="en">
<?php
session_start(); 
include('dbconnect.php'); 
?>
<head>
  <title>Zorg Books</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
		<a href="#" class="btn btn-link">Shopping Cart</a>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
		<form class="form-inline">
		<?php if (!isset($_SESSION['user_id'])){?>
		<a href="login.php" class="btn btn-link">Log In</a>
		<?php }else {?>
		<a href="logout.php" class="btn btn-link">Log Out</a>
		<?php }?>
		<a href="signup.php" class="btn btn-link">Sign Up</a>
	  </ul>
  </form>
    </div>
  </div>
</nav>