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
   #myDIV {
      border: 1px solid black;
      animation: mymove 5s infinite;
      border: 5px;
      font-size: 45px;
      color:#f7f7f7;
      background: #083b5f;
        }

    .box{
      float: center;
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

    <!-- header -->
 <?php include ('header.php')?>
  <!-- end of header -->

    <br>
      <h1 style = "text-align: center;"id="myDIV">Account</h1>
    <br>

    <div class="clearfix">
      <center><div class="box"style="background:#b3d9ff">     
       <img src="../../images/viewProfileIcon.png" alt="ProfileIcon" style="width:128px;height:128px;">
      <h2>View Profile</h2>
      <h3>To view your account profile, kindly click on this button</h3>
      <br><br>
  
        <table>
          <tr>
            <td></td>
            <td><a href="C_viewProfile.php"><button>View Profile</button></td>
          </tr>
        </table>
        </center>

   
      <center><div class="box"style="background:#b3d9ff">
      <img src="../../images/editIcon.png" alt="editIcon" style="width:128px;height:128px;">
      <h2>Edit Profile</h2>
      <h3>To check your devices repair status, kindly click this button:</h3>
      <br><br>

        <table>
          <tr>
            <td></td>
            <td><a href="C_EditProfile.php"><button>Edit Profile</button></td>
          </tr>

        </table>
        </center>

    <!-- footer -->
 <?php include ('footer.php')?>
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
