<?php
require_once '../../Business Services Layer/Controller/ManagePaymentInterface/PaymentController.php';

$account_id = $_GET['account_id'];
$customer = new PaymentController();
$data = $customer->viewDetails(); 

//call controller viewDetails function//
if(isset($_POST['viewDetails'])){
    $customer->viewDetails();
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>COD REQUEST</title>
</head>
<body>
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

  <center><h2>Request COD Request</h2><br>

        <table>
          <?php
          foreach($info as $row){
          ?>

        <tr>
          <td>Order ID</td>
          <td><?=$row['order_id']?></td>
        </tr>

        <tr>
          <td>Customer Name</td>
          <td><?=$row['name']?></td>
        </tr>

        <tr>
          <td>COD Adress</td>
          <td><?=$row['address']?></td>
        </tr>

        <tr>
          <td>Total Payment</td>
          <td><?=$row['totalpayment']?></td>
        </tr>

         <tr>
            <td>Requested Item</td>
            <td>

              <table border="1px solid black">

            <?php
            }
            foreach ($items as $row){
            ?>
            
            <tr>
              <td><?=$row['item_name']?></td>
              <td><?=$row['quantity']?></td>
            </tr>
     
            <?php
            }
            ?>
              </table>
            </td>
          </tr>

        </table>

        <br>

        <form action="" method="POST">
          <input type="hidden" name="order_id" value="<?=$order_id?>">
          <button type="button" onclick="location.href='R_Home.php'">Back</button>&nbsp
          <input type="submit" name="accept_btn" value="Payment Received">
        </form>
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