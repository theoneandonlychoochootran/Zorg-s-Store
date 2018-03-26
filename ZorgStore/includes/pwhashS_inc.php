<?php
// Generates a salted SHA-1 password. 

function habadasher($pwd, $salt)
{
	// Appends our salt to our password
	$pwd .= $salt;
	
	// Hashes password.
	$saltPW = sha1($pwd);

	// Returns array. 
	return $saltPW;
}
?>