<?php 

	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "phptutorial";

	// Create connection
	$con = new mysqli($server, $username, $password, $dbname);

	// Check connection
	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	} 
	

?>