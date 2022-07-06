<?php
require_once '../../Business Services Layer/Controller/ManageAccount/S_accountController.php';

$staff = new S_accountController();

if(isset($_POST['signup_btn'])){
  $exist = $staff->S_signup();
}

?>
<html>
<head>
  <title>Sign Up</title>
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

        <li><a href="../../index.php"><img src="../../images/logo1.jpg" alt="Dercs Logo" style="width:180px;height:100px;"><strong>  Dercs Computer Repair Shop</strong></a></li>

      </ul>

    </div>
  </nav>
  <br><br><br>
  <!-- end of navigation bar -->


 <center>

    <div class="box">

      <h2>Staff Registration</h2><br>

      <form action="" method="POST" onsubmit="return verifyPassword()">
        <script>
          function verifyPassword(){
            $password1 = document.getElementById("pass1").value;
            $password2 = document.getElementById("pass2").value;

            if($password1 == $password2)
              return true;
            else {
              document.getElementById("ifDiff").innerHTML = "password not match!";
              return false;
            }
          }
        </script>

        <table>

          <tr>
            <td width="150px">Name<br><br></td>
            <td width="185px"><input type="text" name="S_name" value="<?php echo isset($_POST['S_name']) ? htmlspecialchars($_POST['S_name'], ENT_QUOTES) : ''; ?>" required><br><br></td>
          </tr>
            
          <tr>
            <td>Phone Number<br><br></td>
            <td><input type="text" name="S_phone" value="<?php echo isset($_POST['S_phone']) ? htmlspecialchars($_POST['s_phone'], ENT_QUOTES) : ''; ?>" required><br><br></td>
          </tr>

          <tr>
            <td width="150px">Address<br><br></td>
            <td width="185px"><input type="text" name="S_address" value="<?php echo isset($_POST['S_address']) ? htmlspecialchars($_POST['S_address'], ENT_QUOTES) : ''; ?>" required><br><br></td>
          </tr>

          <tr>
            <td>Email Address<br></td>
            <td><input type="email" name="S_email" value="<?php echo isset($_POST['S_email']) ? htmlspecialchars($_POST['S_email'], ENT_QUOTES) : ''; ?>" required><br></td>
          </tr>

          <tr>
            <td></td>
            <td><font color='red'><p id="msg"><br></p></font></td>
          </tr>

          <script>
            if(<?=$exist?>==true){
              document.getElementById("msg").innerHTML = "This email has been used";
            }
          </script>

          <tr>
            <td>Create Password<br><br></td>
            <td><input type="password" id = "pass1" name="S_password" placeholder="8 to 15 characters" minlength="8" maxlength="15" value="<?php echo isset($_POST['S_password']) ? htmlspecialchars($_POST['S_password'], ENT_QUOTES) : ''; ?>" required><br><br></td>
          </tr>

          <tr>
            <td>Reenter Password<br><br></td>
            <td><input type="password" id = "pass2" name="verify" minlength="8" maxlength="15" value="<?php echo isset($_POST['S_password']) ? htmlspecialchars($_POST['S_password'], ENT_QUOTES) : ''; ?>" required><br><br></td>
          </tr>

          <tr>
            <td></td>
            <td><font color='red'><p id="ifDiff"><br></p></font></td>
          </tr>

          <tr>
            <td colspan="2" style="text-align: center"><br><input type="submit" name="signup_btn" value="Signup"></td>
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