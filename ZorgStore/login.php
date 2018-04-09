<?php
include 'navigation.php';
include 'footer.php';
?>

<!DOCTYPE HTML>

<html>

<style>
	
	input[type=text], input[type=password]
	{
	font-family: "Cooper Black", Helvetica, sans-serif;	
    width: 25%;
    padding: 5px;	
	margin: 8px 8px;
    display: inline-block;
    border: 2px;
    background: #f1f1f1;
	}
	
	button[type="submit"]
	{
	font-family: "Cooper Black", Helvetica, sans-serif;	
	background-color: #3F47CC;
    color: white;
    padding: 14px 20px;
    margin: 8px 8px;
    border: none;
    cursor: pointer;
    width: 10%;
    opacity: 0.9;	
	}
	
	div.errMsg
	{
		content: "Invalid username/password";
	}
</style>

	<body>
	<p style="font-size:20px; margin: 0px 8px;font-family: 'Cooper Black', Helvetica, sans-serif;">Log In! </p></br>
			<form method="POST" action="includes/login_inc.php">
			<input type="text" name="username" placeholder="Username" minlength="5" maxlength="20"></br>
			<input type="password" name="password" placeholder="Password" minlength= "8"></br>
			<button type="submit" name="login">Log In</button>
			
			<div class="errMsgBlank"><?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']; unset($_SESSION['msg']); ?><div>
		</form>
	<?php if (isset($_SESSION['msg'])) {unset($_SESSION['msg']);} ?>
	</body>
</html>