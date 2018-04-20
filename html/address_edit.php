<!DOCTYPE html>
<html lang="en">
<?php
include('navigation/navigation.php');
?>
<link rel="stylesheet" type="text/css" href="../css/edit_style.css">

<style>
input[name="state"]
{width: 5%;}

input[name="zip"]
{width:10%;}
</style>

<body>
			<form method="POST" action="../php/address_chg.php">
			<input type="text" name="city" placeholder="City"></br>
			<input type="text" name="state" placeholder="State" maxlength="2" minlength="2"></br>
			<input type="text" name="zip" placeholder="ZIP Code" maxlength="5" minlength="5"></br>
			<button type="submit" name="addy_chg">Change Address</button>
			<div><?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']; unset($_SESSION['msg']); ?><div>			
</body>