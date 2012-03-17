<?php

/**
 * User related functions including:
 * SQL Queries
 *
 * @author Notebook
 * @version 1.0.0
 * 
 */

include_once "connect.inc.php";
 
class register extends database 
{
	function addUser($user, $pass, $email)
	{
		$user = mysql_real_escape_string(htmlentities($user));
		$pass = sha1($pass);
		$email = mysql_real_escape_string(htmlentities($email));
	
		mysql_query("INSERT INTO `users` (username, password, email) VALUES ('$user', '$pass', '$email')") or die(mysql_error());
	}
	
	function validateUser($user, $email)
	{
		$sql = "SELECT * FROM users WHERE user='". $user ."' && email='". $email ."'";
		
	}
}