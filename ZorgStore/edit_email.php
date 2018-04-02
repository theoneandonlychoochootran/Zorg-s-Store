<!DOCTYPE html>
<html lang="en">
<?php
include('navigation.php');
include ('footer.php'); 
?>
<link rel="stylesheet" type="text/css" href="edit_style.css">
<body>
			<form method="POST" action="includes/email_chg.php">
			<input type="text" name="new_email" placeholder="New E-mail"></br>
			<input type="text" name="new_2" placeholder="Re-enter E-mail"></br>
			<button type="submit" name="email_chg">Change E-mail</button>	
</body>