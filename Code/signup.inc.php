<?php

if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$uname = mysqli_real_escape_string($conn, $_POST['uname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);
	$repass = mysqli_real_escape_string($conn, $_POST['repass']);

	if (empty($name) || empty($uname) || empty($email) || empty($pass) || empty($repass)) {
		header("Location: ../signup.php?signup=empty");
		exit();

	} else {
		//check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $name) ) {
			header("Location: ../signup.php?signup=name");
			exit();
		} else {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=email");
				exit();

			} else {
				$hashedPass = password_hash($pass, PASSWORD_DEFAULT);
			}if ($_GET["hashedPass"] != $_GET["repass"]) {
   				header("Location: ../signup.php?signup=password");
				exit();
				} 
				//insert the user into database
				$sql = "INSERT INTO customer (customer_name, customer_uname, customer_email, customer_pass, customer_repass) VALUES ('$name', '$uname', '$email', '$hashedPass', '$repass');";
				mysqli_query($conn, $sql);
				header("Location: ../signup.php?signup=success");
				exit(); 
				}
		}

	}

 else {
	header("Location: ../signup.php");
	exit();
}