<!DOCTYPE html>
<html>
<head>
	<title>Staff Payment Homepage</title>
</head>
<body style = "background: #e6f2ff">

	<!--navbar-->
  <nav class="navbar navbar-default navbar-fixed-top" style="background:#b3d9ff">
    <div class="container">

      <ul class="nav navbar-nav navbar-left">
        <li><a href="../../index.php"><img src="../../images/catstarcraft.jpg" alt="Dercs Logo" style="width:180px;height:60px;"><strong>  Dercs Computer Repair Shop</strong></a></li>
        <li><a href="C_homepage.php"><span class="glyphicon glyphicon-list-alt"></span> About</a></li>
        <li><a href="C_payment.php"><span class="glyphicon glyphicon-list-alt"></span> Payment</a></li>
        <li><a href="C_services.php"><span class="glyphicon glyphicon-list-alt"></span> Services</a></li>
        <li><a href="C_pickup.php"><span class="glyphicon glyphicon-list-alt"></span> Pickup</a></li>
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

	<center><h2>Customer Payment List</h2><br>


		<table id="table1" border="1px solid black">

			<tr>
				<th>No.</th>
				<th>Customer Name</th>
				<th>Customer Address</th>
				<th>Payment Date</th>
				<th>Total Payment</th>
			
			</tr>
					
			<?php
			$i=0;
			foreach ($data as $row) {
				$i++;
				echo "<tr>
				<td>".$i."</td>
				<td>".$row['name']."</td>
				<td>".$row['address']."</td>
				<td>".$row['date']."</td>
				<td>".$row['totalpayment']."</td></tr>";

			}

			?>
		</table>
	</center>

</body>
</html>
<!-- footer -->
  <nav class="navbar navbar-default navbar-fixed-bottom" style="background:#b3d9ff">
    <ul class="nav navbar-nav navbar-left">
      <li><a> Developed by DCRSMS</a></li>
    </ul>
  </nav>
  <!-- end of footer -->