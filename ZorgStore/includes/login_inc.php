<?php

session_start();

if (isset($_POST['login']))
{
	include 'db_login.php';
	
	$uid = mysqli_real_escape_string($conn, $_POST["username"]);
	$pwd = mysqli_real_escape_string($conn, $_POST["password"]);
	
	 
	if (empty($uid) == true || empty($pwd) == true)
	{
		$_SESSION['msg'] ='<br /><font style="Cooper Black" color="#FF0000">Please enter a username and password. </font>';
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
			
			$_SESSION['msg'] = '<br /><font style="Cooper Black" color="#FF0000">Invalid psername and/or password. </font>';
			include('login.php');
			header("Location: ../login.php?login=error");
			exit();
		}
		else
		{
			include 'pwhashS_inc.php';
			$row = mysqli_fetch_assoc($result);
			
			$pwHash = habadasher($pwd, $row['salt']);
			
			if ($pwHash == $row['password'])
			{
				unset ($_SESSION['msg']);
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
				$_SESSION['msg'] = '<br /><font style="Cooper Black" color="#FF0000">Invalid psername and/or password. </font>';
				header("Location: ../login.php?login=error");
				exit();
			}
			
		}
	}
	
}

else 
	header("Location: ../index.php?login=error");
	exit();

?>