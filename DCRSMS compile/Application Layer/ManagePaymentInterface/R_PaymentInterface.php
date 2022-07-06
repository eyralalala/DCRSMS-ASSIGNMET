<!DOCTYPE html>
<html>
<head>
	<title>Runner Payment Homepage</title>
</head>
<body>
	<!--navbar-->
  <nav class="navbar navbar-default navbar-fixed-top" style="background:#b3d9ff">
    <div class="container">

      <ul class="nav navbar-nav navbar-left">
        <li><a href="../../index.php"><img src="../../images/catstarcraft.jpg" alt="Dercs Logo" style="width:180px;height:60px;"><strong>  Dercs Computer Repair Shop</strong></a></li>
        <li><a href=""><span class="glyphicon glyphicon-list-alt"></span> About</a></li>
        <li><a href=""><span class="glyphicon glyphicon-list-alt"></span> COD Request List</a></li>
        <li><a href=""><span class="glyphicon glyphicon-list-alt"></span> Record</a></li>
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

	<center><h2>COD Request List</h2><br>


		<table id="table1" border="1px solid black">

			<tr>
				<th>No.</th>
				<th>Customer Name</th>
				<th>Customer Address</th>
				<th>Total Payment</th>
				<th>Action</th>
			</tr>
			
			<?php
			$i=0;
			foreach ($list as $row) {
				$i++;
				   echo "<tr>
            <td>".$i."</td>
            <td>".$row['name']."</td>
            <td>".$row['address']."</td>
            <td>".$row['totalpayment']."</td>
            <td><input type=\"button\" onclick=\"location.href='ViewCodRequest.php?orderID=".$row['order_id']."&spID=".$row['sp_account_id']."'\" value=\"View Detail\"><input type=\"button\" onclick=\"location.href='ViewCodRequest.php'?orderID=".row['order_id']."&cust_id=".$row['cust_id']."'\" value=\"Reject\"></td>
          </tr>";
          }
			?>
		</table>
	</center>

</body>
</html>