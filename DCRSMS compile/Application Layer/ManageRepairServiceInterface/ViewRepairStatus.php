<?php
require_once '../../Business Services Layer/Controller/ManageRepairService/RepairController.php';
session_start();
$request = new RepairController;

$CName = $_SESSION['name'];

  if (!isset($_SESSION['name'])) {
    $message = "You must log in first";
        header('refresh:5; url=../../../Application Layer/ManageAccountInterface/C_login.php');
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../view';</script>";
  }
//if(isset($_POST['search_btn'])){
  //$value=$_POST['search_value'];
 // header('Location: C_homepage.php?');
//}
$list = $request->viewRequestList();
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
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> 
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
      
      <br><br>

        <table id="table1" border="1px solid black">

          <tr>
            <th>Model</th>
            <th>Damage</th>
            <th>Status</th>
          </tr>

          <?php
          $i=0;
          foreach($data as $row){
            
            echo "<tr>
            <td>".$i."</td>
            <td>".$row['model']."</td>
            <td>".$row['damage']."</td>
            <td>".$row['status']."</td>
            <td><input type=\"button\" onclick=\"location.href='ViewRequest.php?orderID=".$row['order_id']."&spID=".$row['sp_account_id']."'\" value=\"View Detail\"></td>
          </tr>";
               }  
               ?>
                 <td></td>
          </tr>";
          }
          
          ?>
          <?php
              $i++;
             echo "</tr>";
            
            ?>
        </table>

      </form>


      <li><input type="submit" name="view_btn" value="View"></li>
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
