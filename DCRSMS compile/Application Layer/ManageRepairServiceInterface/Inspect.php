<?php
require_once '../../Business Services Layer/Controller/ManageRepairService/RepairController.php';
session_start();

$repair = new RepairController();
if (!isset($_SESSION['username'])) {
  $message = "You must log in first";
  header('refresh:5; url=login.php');
  echo "<script type='text/javascript'>alert('$message');
  window.location = '../view';</script>";
}

if(isset($_POST['add'])){
  $inspect->add();
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

    <div class="card-body">
          <form action="" method="POST">
            <div class='form-row'>
              <div class='name'>Time: </div>
              <div class='value'>
                <div class='input-group'>
                  <input type="text" name="time" class="input--style-5" required>
                </div>
              </div>
            </div>
            <div class='form-row'>
              <div class='name'>Inspect Details: </div>
              <div class='value'>
                <div class='input-group'>
                  <input type="text" name="inspect_detail" class="input--style-5" required>
                </div>
              </div>
            </div>
            <div class='form-row'>
              <div class='name'>Status Update: </div>
              <div class='value'>
                <div class='input-group'>
                  <input type="text" name="status" class="input--style-5" required>
                </div>
              </div>
            </div>
            <div>
              <center>
                <button class="btn btn--radius-2 btn--red" type="submit" name="add" value="ADD"> Update Inspection</button>
                
              </center>
            </div>

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
