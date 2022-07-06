

<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'request');

	 
		  
if (isset($_POST['accept'])) {
		$requestid = $_POST['requestid'];
		$name = $_POST['name'];
		$time = $_POST['time'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
		$damage = $_POST['damage'];
		$status = $_POST['status'];
		
		

		mysqli_query($db, "Update request_details SET status='accepted' WHERE requestid = 1  ");
		 
		header('location: adminindex.php');
	}

if (isset($_POST['reject'])) {
		$requestid = $_POST['requestid'];
		$name = $_POST['name'];
		$time = $_POST['time'];
		$email  = $_POST['email '];
		$phone_number = $_POST['phone_number'];
		$damage = $_POST['damage'];
		$status = $_POST['status'];
		
		

		mysqli_query($db, "Update request_details SET status='rejected' WHERE requestid = 1 ");
		 
		header('location: adminindex.php');
	}
if (isset($_POST['accept'])) {
		$requestid = $_POST['requestid'];
		$name = $_POST['name'];
		$time = $_POST['time'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
		$damage = $_POST['damage'];
		$status = $_POST['status'];
		
		

		mysqli_query($db, "Update request_details2 SET status='accepted' WHERE requestid = 1  ");
		 
		header('location: adminindex.php');
	}

if (isset($_POST['reject'])) {
		$requestid = $_POST['requestid'];
		$name = $_POST['name'];
		$time = $_POST['time'];
		$email  = $_POST['email '];
		$phone_number = $_POST['phone_number'];
		$damage = $_POST['damage'];
		$status = $_POST['status'];
		
		

		mysqli_query($db, "Update request_details2 SET status='rejected' WHERE requestid = 1 ");
		 
		header('location: adminindex.php');
	}
