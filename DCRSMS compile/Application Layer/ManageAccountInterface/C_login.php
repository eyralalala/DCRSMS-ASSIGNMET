<?php
require_once '../../Business Services Layer/Controller/ManageAccount/C_accountController.php';

$customer = new C_accountController();

if(isset($_POST['login_btn'])){
  $customer->C_accountLogin();
}

?>
<html>
<head>
  <title>Log In</title>
  <link rel="stylesheet" href="../../css/bootstrap.css">
  <script src="../../js/jquery_library.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <style>
    .box{
      border-radius: 25px;
      width: 400px;
      border: 1px solid black;
      padding: 30px;
      margin: 70px;
    }

  </style>
</head>

<body style = "background: #e6f2ff" >

<!-- navigation bar -->
  <nav class="navbar navbar-default navbar-fixed-top" style="background:#b3d9ff">
    <div class="container">

      <ul class="nav navbar-nav navbar-left">

        <li><a href="../../index.php"><img src="../../images/catstarcraft.jpg" alt="Dercs Logo" style="width:180px;height:60px;"><strong>  Dercs Computer Repair Shop</strong></a></li>

      </ul>

    </div>
  </nav>
  <br><br><br>
  <!-- end of navigation bar -->


    <center >
      <div class="box"style="background:#b3d9ff">
      <img src="../../images/catstarcraft.jpg" alt="Dercs Logo" style="width:128px;height:128px;">
      <h2>Welcome to Dercs Computer Repair Shop</h2><br>

      <form action="" method="POST">
        
        <table>
          <tr>
            <td width="80px">Email<br><br></td>
            <td><input type="text" name="c_email" required><br><br></td>
          </tr>

          <tr>
            <td>Password <br><br></td>
            <td><input type="password" name="c_password" required minlength="8" maxlength="15"><br><br></td>
          </tr>

          <tr>
            <td colspan="2" style="text-align: center"><br><input type="submit" name="login_btn" value="Login"></td>
          </tr>

        </table>

      </form>

      </div>
    </center>

  <!-- footer -->
  <nav class="navbar navbar-default navbar-fixed-bottom" style="background:#b3d9ff">
    <ul class="nav navbar-nav navbar-left">
      <li><a> Developed by DCRSMS Sdn Bhd</a></li>
    </ul>
  </nav>
  <!-- end of footer -->

  </body>
</html>
