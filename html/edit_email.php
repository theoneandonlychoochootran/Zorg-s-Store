<!DOCTYPE html>
<html lang="en">
<?php
include('navigation/navigation.php');
?>
<link rel="stylesheet" type="text/css" href="../css/edit_style.css">
<body>
			<form method="POST" action="../php/email_chg.php">
			<input type="text" name="new_email" placeholder="New E-mail"></br>
			<input type="text" name="new_2" placeholder="Re-enter E-mail"></br>
			<button type="submit" name="email_chg">Change E-mail</button>
			<div><?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']; unset($_SESSION['msg']); ?><div>
</body>