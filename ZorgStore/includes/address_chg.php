<?php

if(isset($_POST['addy_chg']))
{
	include 'db_login.php';
	session_start();

	$newCity = mysqli_real_escape_string($conn, $_POST["city"]);
	$newState = mysqli_real_escape_string($conn, $_POST["state"]);
	$newZip = mysqli_real_escape_string($conn, $_POST["zip"]);
	$uid= $_SESSION['user_id'];
	
	if (empty($newCity) && empty($newState) && empty($newZip))
	{
		header("Location: ../address_edit.php?all_empty");
		exit();
	}
	else
	{
		if (!preg_match('/^[a-zA-Z]{2}$/',$newState))
			{
				header("Location: ../address_edit.php?invalid_state");
				exit();
			}
		if (!preg_match('/^[0-9]{5}$/',$newZip) && !empty($newZip))
			{
				header("Location: ../address_edit.php?invalid_zip");
				exit();
			}
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
		
		$sql="UPDATE customers SET city='$newCity', state='$newState', zip_code='$newZip' WHERE user_id ='$uid'";
		
		if(!mysqli_query($conn,$sql))
		{
			header("Location: ../address_edit.php?update_add=fail");
			exit();
		}	
		else
		{
				$_SESSION['city']= $newCity;
				$_SESSION['state']=$newState;
				$_SESSION['zip']=$newZip;
				header("Location: ../profile.php?update_add=success");
				exit();
		}
	}
}
?>