<?php

	include 'db_login.php';
	session_start();

	$oldPass =  mysqli_real_escape_string($conn, $_POST["old"]);
	$newPass1 =  mysqli_real_escape_string($conn, $_POST["new1"]);
	$newPass2 =  mysqli_real_escape_string($conn, $_POST["new2"]);
	$uid = $_SESSION['user_id'];
	
	if ($newPass1 != $newPass2)
	{
		header("Location: ../pass_edit.php?error");
		exit();
	}
	else
	{
		include 'pwhashS_inc.php';
		
		$sql = "SELECT * FROM customers WHERE user_id='$uid'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		
		$pwHash = habadasher($oldPass, $row['salt']);
		
		if ($pwHash == $row['password'])
		{
			$salt = openssl_random_pseudo_bytes(40, $cstrong);
			$hashTest = habadasher($newPass1, $row['salt']);
			$hashWord = habadasher($newPass1, $salt);
			
			if ($hashTest != $pwHash)
			{
				$sql="UPDATE customers SET password='$hashWord', salt='$salt' WHERE user_id ='$uid'";
		
				if(!mysqli_query($conn,$sql))
				{
					header("Location: ../address_edit.php?update_add=fail");
					exit();
				}	
				else
				{
					header("Location: ../profile.php?pass_chg=success");
					exit();
				}
			}
			else
			{
				header("Location: ../pass_edit.php?error3");
				exit();
			}
					
		}
		else
		{
			header("Location: ../pass_edit.php?error2");
			exit();
		}
	}
?>