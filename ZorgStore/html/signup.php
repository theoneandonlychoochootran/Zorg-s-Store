<?php
include 'navigation/navigation.php';
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
	
	input[name="state"]
	{
		width: 5%
	}

	input[name="zip"]
	{
		width: 15%
	}
	
	input[name="city"]
	{
		width: 15%
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
</style>


	<body>
	
		<div class="container">
			<div class="container-jb">  
			<p style="font-size:20px; margin: 0px 8px;font-family: 'Cooper Black', Helvetica, sans-serif;">Sign Up For Zorg Stores! </p></br>
				<form method="POST" action="../php/signup_inc.php">
				<input type="text" placeholder="Enter Username (Between 5 and 20 characters)" name="username" maxlength="20">
				</br>
				
				<input type="password" placeholder="Enter Password (8 characters)" name="password">
				</br>
				
				<input type="password" placeholder="Enter Password Again" name="password2">
				</br>
				
				<input type="text" placeholder="Enter E-mail" name="email">
				</br>
		
				<input type="text" placeholder="City" name="city">
				</br>
				
				<input type="text" placeholder="State" name="state" maxlength="2">
				</br>
				
				<input type="text" placeholder="ZIP Code" name="zip" maxlength="5" minlength="5">
				</br>
				
				<button type="submit" name="signup">Sign Up</button>	
		</form>
		<div><?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']; session_destroy(); ?></div>
		</div>
	</div>
	</body>
</html>