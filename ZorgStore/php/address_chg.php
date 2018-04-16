<?php

if(isset($_POST['addy_chg']))
{
	include 'dbconnect.php';
	session_start();

	$newCity = mysqli_real_escape_string($conn, $_POST["city"]);
	$newState = mysqli_real_escape_string($conn, $_POST["state"]);
	$newZip = mysqli_real_escape_string($conn, $_POST["zip"]);
	$uid= $_SESSION['user_id'];
	
	if (empty($newCity) && empty($newState) && empty($newZip))
	{
		header("Location: ./../html/address_edit.php?all_empty");
		exit();
	}
	else
	{
		if (empty($newCity))
		{
			$newCity = $_SESSION['city'];
		}
		if (empty($newState))
		{
			$newState = $_SESSION['state'];
		}
		if (empty($newZip))
		{
			$newZip= $_SESSION['zip'];
		}
		
		if (!preg_match('/^[a-zA-Z]{2}$/',$newState))
			{
				$_SESSION['msg'] = '<br /><font style="Cooper Black" color="#FF0000">Invalid State, please enter your states two-letter identifier. </font>';
				header("Location: ./../html/address_edit.php?invalid_state");
				exit();
			}
		if (!preg_match('/^[0-9]{5}$/',$newZip) && !empty($newZip))
			{
				$_SESSION['msg'] = '<br /><font style="Cooper Black" color="#FF0000">Invalid ZIP code. Please enter your ZIP code.</font>';
				header("Location: ./../html/address_edit.php?invalid_zip");
				exit();
			}
		
		$sql="UPDATE customers SET city='$newCity', state='$newState', zip_code='$newZip' WHERE user_id ='$uid'";
		
		if(!mysqli_query($conn,$sql))
		{
			$_SESSION['msg'] = '<br /><font style="Cooper Black" color="#FF0000">Unable to connect to database. Please try again later.</font>';
			header("Location: ./../html/address_edit.php?update_add=fail");
			exit();
		}	
		else
		{
				$_SESSION['city']= $newCity;
				$_SESSION['state']=$newState;
				$_SESSION['zip']=$newZip;
				$_SESSION['msg'] = '<br /><font style="Cooper Black">Address successfully changed.</font>';
				header("Location: ./../html/profile.php?update_add=success");
				exit();
		}
	}
}
?>