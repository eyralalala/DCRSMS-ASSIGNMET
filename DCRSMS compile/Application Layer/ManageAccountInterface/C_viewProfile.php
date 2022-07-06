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
      width: 50%;
      height: 50%;
      border: 1px solid black;
      padding: 100px;
      margin: 100px;

    }
    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }

    table {
  border-collapse: collapse;
  border: 2px solid black;
  width: 80%;
  margin-left:auto; 
  margin-right:auto;
}

th, td {
  text-align: center;
  border: 2px solid black;
  padding: 10px;
}


th {
  background-color: #09224E;
  color: white;
}
  </style>
</head>

<body style = "background: #e6f2ff" >

    <!-- header -->
 <?php include ('header.php')?>
  <!-- end of header -->

    <br>
    <br>
    <br>
    <br>
      <h1 style = "text-align: center;"id="myDIV"><img src="../../images/accountIcon.png" alt="editProfile" style="width:80px;height:80px;">My Account Profile</h1>
    <br>
<center>    
      <div class="box"style="background:#b3d9ff">
<td>
<table>

<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "dcrsms");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM account WHERE account_id='1'";
$result = $conn->query($sql);

$count=1;
if (mysqli_num_rows($result) > 0){
  foreach($result as $row){
  ?>
  
 <tr>
 <?php   foreach($result as $row){  
        ?>
    
  <th>Customer's ID</th>
    <td style = "background: white"><?=$row["account_id"]?></td>
  </tr>
  <br>
  <br>

  <tr>
    <th>Customer's Name</th>
    <td style = "background: white"><?=$row["name"]?></td>
  </tr>

  
  <tr>
    <th>Phone Number</th>
    <td style = "background: white"><?=$row["phone_no"]?></td>
  </tr>

    <tr>
    <th>Address</th>
    <td style = "background: white"><?=$row["address"]?></td>
  </tr>

  <tr>
    <th>Email</th>
    <td style = "background: white"><?=$row["email"]?></td>
  </tr>

</table>

 <br>
 <br>
<center><button onclick="editProfileButton()">Edit Profile</button></center>

  </center>
</tr>
      <?php $count=$count+1;
          echo "</tr>";
          }
         ?>
  
  </tbody>
<br>
<br>

  <?php
    } }
else {
    echo "0 results";
}
?>


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

    <script>
function editProfileButton() {
  var txt;
  var r = confirm("Edit Profile?");
  if (r == true) {
    txt =   window.open("C_EditProfile.php", "_blank");;
  } else {
    txt = "Notify cancelled";
  }
  document.getElementById("demo").innerHTML = txt;
}
  </script>

  </body>
</html>