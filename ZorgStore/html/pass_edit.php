<!DOCTYPE html>
<html lang="en">
<?php
include('navigation/navigation.php');

?>
<link rel="stylesheet" type="text/css" href="../css/edit_style.css">

<body>
			<form method="POST" action="../php/pass_chg.php">
			<input type="password" name="old" placeholder="Old Password"></br>
			<input type="password" name="new1" placeholder="Retype New Password"></br>
			<input type="password" name="new2" placeholder="Retype New Password"></br>
			<button type="submit" name="addy_chg">Change Password</button>
			<div><?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']; unset($_SESSION['msg']); ?><div>			
</body>