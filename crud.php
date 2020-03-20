<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud_data');

	// initialize variables
	$data = "";

	if (isset($_POST['data'])) {
		$data = $_POST['data'];
	

		mysqli_query($db, "INSERT INTO crud (data) VALUES ('$data')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
	}