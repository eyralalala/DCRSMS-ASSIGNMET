<?php

session_start();
$CAccountID = $_SESSION['account_id'];
$CName = $_SESSION['name'];

if(isset($_POST['search_btn'])){
  $value=$_POST['search_value'];
  header('Location: C_homepage.php?');
}
?>

<html>
<head>
  <title>Welcome to Dercs Repair Shop!</title>
  <link rel="stylesheet" href="../../css/bootstrap.css">
  <script src="../../js/jquery_library.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <style>
	
table {
  border-collapse: collapse;
  border: 2px solid #ddd;
  width: 80%;
  margin-left:auto; 
  margin-right:auto;
}

th, td {
  text-align: center;
   border: 2px solid #ddd;
  padding: 8px;
}


th {
  background-color: #09224E;
  color: white;
}
  </style>
</head>

<body style = "background: #e6f2ff" >

  <!--navbar-->
  <nav class="navbar navbar-default navbar-fixed-top" style="background:#b3d9ff">
    <div class="container">

      <ul class="nav navbar-nav navbar-left">
        <li><a href="../../index.php"><img src="../../images/logo.jpg" alt="Dercs Logo" style="width:100px;height:60px;"><strong>  Dercs Computer Repair Shop</strong></a></li>
        <li><a href="C_homepage.php"><span class="glyphicon glyphicon-list-alt"></span> About</a></li>
        <li><a href="C_payment.php"><span class="glyphicon glyphicon-list-alt"></span> Payment</a></li>
        <li><a href="C_services.php"><span class="glyphicon glyphicon-list-alt"></span> Services</a></li>
        <li><a href="riderHomepage.php"><span class="glyphicon glyphicon-list-alt"></span> Pickup</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?=$CAccountID?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="R_Login.php" onclick="alertMsg()">Logout</a></li>
          </ul>
        </li>
      </ul>

      <script>
        function alertMsg(){
          alert("Logout Successful");
        }
      </script>

    </div>
  </nav>
  <br><br><br>
  <!-- end of navigation bar -->
    <br><br>
    <h1><center>PICK UP REQUEST</center></h>
<br>

<table>
  <tr>
    <th>#</th>
	<th>Customer's Name</th>
    <th>Address</th>
    <th>Phone Number</th>
	<th>Action</th>
  </tr>

<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "dcrsms");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT account_id, custName, custAddress, custNo FROM customer";
$result = $conn->query($sql);

$count=1;
if (mysqli_num_rows($result) > 0){
	foreach($result as $row){
	?>
<tr>
        <?php   foreach($result as $row){  
        ?>
				<td><?=$row["account_id"]?></td> 
				<td><?=$row["custName"]?></td>
				<td><?=$row["custAddress"]?></td>
				<td><?=$row["custNo"]?></td>
				
				<td><form method="post" action="staffRequest.php"><input type="submit" name="View" value="View">
        <button type="button" data-id="<?php echo $row['account_id'] ?>"><a href="staffNotified.php?account_id=<?=$row['account_id']?>">Notified</button>
        </td>

</tr>

			
			<?php $count=$count+1;
        	echo "</tr>";
        	}
   			 ?>
	
	</tbody>
    </table>

	<?php
    } }
else {
    echo "0 results";
}
?>

    </center>
    <!-- footer -->
  <nav class="navbar navbar-default navbar-fixed-bottom" style="background:#b3d9ff">
    <ul class="nav navbar-nav navbar-left">
      <li><a> Developed by DCRSMS</a></li>
    </ul>
  </nav>
  <!-- end of footer -->
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
