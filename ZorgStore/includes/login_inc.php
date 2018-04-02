<?php

session_start();

if (isset($_POST['login']))
{
	include 'db_login.php';
	
	$uid = mysqli_real_escape_string($conn, $_POST["username"]);
	$pwd = mysqli_real_escape_string($conn, $_POST["password"]);
	
	 
	if (empty($uid) == true || empty($pwd) == true)
	{
		header("Location: ../login.php?login=empty");
		exit();
	}
	else
	{
		$sql = "SELECT * FROM customers WHERE user_id='$uid'";
		$result = mysqli_query($conn,$sql);
		$rCheck = mysqli_num_rows($result);
		
		if ($rCheck < 1)
		{
			header("Location: ../login.php?login=error1");
			exit();
		}
		else
		{
			include 'pwhashS_inc.php';
			$row = mysqli_fetch_assoc($result);
			
			$pwHash = habadasher($pwd, $row['salt']);
			
			if ($pwHash == $row['password'])
			{
				header("Location: ../index.php?login=yes");
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['city'] = $row['city'];
					$_SESSION['state'] = $row['state'];
					$_SESSION['zip'] = $row['zip_code'];
				exit();
			}
			else
			{
				header("Location: ../login.php?login=error3");
				exit();
			}
			
		}
	}
	
}

else 
	header("Location: ../index.php?login=error");
	exit();

?>