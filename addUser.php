<?php 
	
	include "dbconnect.php";

	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$middlename = $_POST['mname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	$hashPassword = password_hash($password, PASSWORD_BCRYPT);

	$sql = "INSERT INTO users (id, lastname, firstname, middlename, email, password, role) VALUES (NULL, '$lastname', '$firstname', '$middlename', '$email', '$hashPassword', '$role')";

	if ($con->query($sql) === TRUE) {
	    header("location: dashboard");
	} else {
	    echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();

?>