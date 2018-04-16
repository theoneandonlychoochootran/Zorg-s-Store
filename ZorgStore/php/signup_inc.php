<?php
session_start();
include'dbconnect.php';

if (isset($_POST['signup']))
{	
	$uid = mysqli_real_escape_string($conn,$_POST["username"]);
	$upwd = mysqli_real_escape_string($conn,$_POST["password"]);
	$pwd2 = mysqli_real_escape_string($conn, $_POST["password2"]);
	$uemail = mysqli_real_escape_string($conn,$_POST["email"]);
	$city = mysqli_real_escape_string($conn,$_POST["city"]);
	$state = mysqli_real_escape_string($conn,$_POST["state"]);
	$zip = mysqli_real_escape_string($conn,$_POST["zip"]);

	// Error checking for empty fields. Since we are using HTML to check for this, they shouldnt be empty, but... 
	if (empty($uid) ||empty($upwd) ||empty($uemail) ||empty($city) ||empty($state) || empty($zip))
	{
	$_SESSION['msg'] ='<br /><font style="Cooper Black" color="#FF0000">Please enter a username and password. </font>';
	header("Location: ./../html/signup.php?login=empty");
	exit();
		
	}
	elseif($upwd != $pwd2)
	{
		$_SESSION['msg'] = '<br /><font style="Cooper Black" color="#FF0000">Passwords do not match.</font>';
		header("Location: ./../html/signup.php?login=badPwd2");
		exit();
	}
	else
	if(!filter_var($uemail,FILTER_VALIDATE_EMAIL))
	{
		$_SESSION['msg'] = '<br /><font style="Cooper Black" color="#FF0000">Please enter a valid e-mail. </font>';
		header("Location: ./../html/signup.php?login=invalid2");
		exit();
	}
	elseif (strlen($upwd) < 8)
	{
		$_SESSION['msg'] = '<br /><font style="Cooper Black" color="#FF0000">Password is too short. Please enter a password of at least 8 characters. </font>';
		header("Location: ./../html/signup.php?login=Pass2Short");
		exit();
	}
	else
	{
		$sql = "SELECT * FROM customers WHERE user_id ='$uid'";
		$result = mysqli_query($conn, $sql);
		$rCheck = mysqli_num_rows($result);
		
		if ($rCheck > 0)
		{
			$_SESSION['msg'] = '<br /><font style="Cooper Black" color="#FF0000">Username already exists. Please choose another.</font>';
			header("Location: ./../html/signup.php?login=error1");
			exit();
		}
		else
		{
			if (!preg_match('/^[0-9]{5}$/',$zip))
			{
				$_SESSION['msg'] = '<br /><font style="Cooper Black" color="#FF0000">Invalid ZIP format. Please enter a valid 5-digit ZIP code.</font>';
				header("Location: ./../html/signup.php?login=error");
				exit();
			}
			// This is our function for hashing in a seperate file because we use it on several pages. 
			include 'pwhashS_inc.php'; 
			$salt = openssl_random_pseudo_bytes(40, $cstrong); 
			$saltPW = habadasher($upwd, $salt);
			
			// Our SQL statement for inserting into table. 
			$sql = "INSERT INTO customers (user_id, password, email, city, state, zip_code, salt) VALUES ('$uid', '$saltPW', '$uemail', '$city', '$state', '$zip' ,'$salt')";
			
			if(!mysqli_query($conn,$sql))
			{
				$_SESSION['msg'] = '<br /><font style="Cooper Black" color="#FF0000">Unable to connect to database. Please try again later. </font>';
				header("Location: ./../html/signup.php?signup=fail");
				exit();
			}	
			else
			{
				header("Location: ./../html/signup.php?signup=success");
				exit();
			}
		}
	}
	{
	$_SESSION['msg'] = '<br /><font style="Cooper Black" color="#FF0000">Unable to connect to database. Please try again later. </font>';
	header("Location: ./../html/signup.php?signup=error");
	exit();
	}
}
else 
	header("Location: ./../html/signup.php");
	exit();

?>