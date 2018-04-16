<?php

if(isset($_POST['email_chg']))
{
	include 'dbconnect.php';
	session_start();

	$email1= mysqli_real_escape_string($conn, $_POST["new_email"]);
	$email2= mysqli_real_escape_string($conn, $_POST["new_2"]);
	$uid= $_SESSION['user_id'];
	
	if ($email1 != $email2)
	{
		header("Location: ./../html/edit_email.php?diff_emails");
		exit();
	}
	elseif(!filter_var($email1,FILTER_VALIDATE_EMAIL))
	{
		header("Location: ./../html/edit_email.php?bad_emails");
		exit();
	}
	else
	{
		$sql="UPDATE customers SET email='$email1' WHERE user_id ='$uid'";
		
		if(!mysqli_query($conn,$sql))
		{
			header("Location: ./../html/edit_email.php?signup=fail");
			exit();
		}	
		else
		{
				$_SESSION['email']= $email1;
				header("Location: ./../html/profile.php?signup=success");
				exit();
		}
	}
	
}
?>