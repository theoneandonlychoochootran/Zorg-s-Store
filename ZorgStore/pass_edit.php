<!DOCTYPE html>
<html lang="en">
<?php
include('navigation.php');

?>
<link rel="stylesheet" type="text/css" href="edit_style.css">

<body>
			<form method="POST" action="includes/pass_chg.php">
			<input type="password" name="old" placeholder="Old Password"></br>
			<input type="password" name="new1" placeholder="Retype New Password"></br>
			<input type="password" name="new2" placeholder="Retype New Password"></br>
			<button type="submit" name="addy_chg">Change Password</button>	
</body>