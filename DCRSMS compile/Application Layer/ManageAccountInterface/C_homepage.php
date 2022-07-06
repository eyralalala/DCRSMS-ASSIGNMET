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
    .box{
      float: left;
      border-radius: 25px;
      width: 23%;
      height: 50%;
      border: 1px solid black;
      padding: 50px;
      margin: 100px;

    }
    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }

  </style>
</head>

<body style = "background: #e6f2ff" >

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
    <br><br>
    <h2>Services</h2><br>

    <div class="clearfix">
      <div class="box"style="background:#b3d9ff">
      <img src="../../images/req.png" alt="request" style="width:128px;height:128px;">
      <h2>Service request</h2>
      <h3>We provide a variety of repairing services for all brand from computer to mobile devices that need to be repaired as soon as possible.</h3>
      <h3>Click this button to request service</h3>
      <br><br>

        <table>
          <tr>
            <td></td>
            <td><a href="Application Layer/ManageRequestInterface/requestService.php"><button>Request Service</button></td>
          </tr>
        </table>

      </form>

      </div>

      <div class="clearfix">
      <div class="box"style="background:#b3d9ff">
      <img src="../../images/chec.png" alt="checkreq" style="width:128px;height:128px;">
      <h2>Check My Repair Status</h2>
      <h3>To check your devices repair status, kindly click this button:</h3>
      <br><br>

        <table>
          <tr>
            <td></td>
            <td><a href="Application Layer/ManageRepairServiceInterface/ViewRepairStatus.php"><button>View Repair Status</button></td>
          </tr>

        </table>

      </form>

      </div>

        <!--<table id="table1" border="1px solid black">

          <tr>
            <th>No.</th>
            <th>Service Provider</th>
            <th>Pickup Location</th>
            <th>Dropoff Location</th>
            <th>Action</th>
          </tr>

          <?php
          $i=0;
          foreach ($list as $row){
            $i++;
            echo "<tr>
            <td>".$i."</td>
            <td>".$row['name']."</td>
            <td>".$row['address']."</td>
            <td>".$row['dropoff_location']."</td>
            <td><input type=\"button\" onclick=\"location.href='ViewRequest.php?orderID=".$row['order_id']."&spID=".$row['sp_account_id']."'\" value=\"View Detail\"></td>
          </tr>";
          }
          
          ?>
        </table>
    </center>
        -->
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
