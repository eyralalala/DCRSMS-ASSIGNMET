<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dcrsms";

// Create connection
$conn = new mysqli($localhost, $username, $password, $dcrsms);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM customer WHERE account_id = '$account_id'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in delete.php");

if($result){
echo "<script type= 'text/javascript'> window.location='staffhomepage.php'</script>";
}

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>