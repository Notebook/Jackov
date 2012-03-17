<?php

/**
 * Database related functions including:
 * SQL Connection, Selection of Database
 *
 * @author Notebook
 * @version 1.0.0
 * 
 */

class database 
{
	function connect ($host, $user, $pass)
	{	
		$conn = mysql_connect($host, $user, $pass);
		if (!$conn)
			echo "Please make sure all database information is given and correct before proceeding.";
	}
	
	function selectDB($dbase)
	{
		$db = mysql_select_db('$dbase');
	}
}

$database = new database;
$database->connect('localhost', 'root', '');
$database->selectDB('dbase');