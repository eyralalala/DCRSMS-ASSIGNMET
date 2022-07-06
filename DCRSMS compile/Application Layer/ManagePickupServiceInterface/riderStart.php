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
  padding: 8px;
}


th {
  background-color: #09224E;
  color: white;
}</style>
</head>

<body style = "background: #e6f2ff" >

  <!--navbar-->
  <nav class="navbar navbar-default navbar-fixed-top" style="background:#b3d9ff">
    <div class="container">

      <ul class="nav navbar-nav navbar-left">
        <li><a href="../../index.php"><img src="../../images/logo.jpg" alt="Dercs Logo" style="width:100px;height:60px;"><strong>  Dercs Computer Repair Shop</strong></a></li>
        <li><a href="C_homepage.php"><span class="glyphicon glyphicon-list-alt"></span> About</a></li>
        <li><a href="C_payment.php"><span class="glyphicon glyphicon-list-alt"></span> Payment</a></li>
        <li><a href="C_services.php"><span class="glyphicon glyphicon-list-alt"></span> Services</a></li>
        <li><a href="riderHomepage.php"><span class="glyphicon glyphicon-list-alt"></span> Pickup</a></li>
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
<style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
      }
    </style>
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Kuantan
        const kuantan = { lat: 3.8078, lng: 103.3100 };
        // The map, centered at Kuatan
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: kuantan,
        });
        // The marker, positioned at kuantan
        const marker = new google.maps.Marker({
          position: kuantan,
          map: map,
        });
      }
    </script>
  </head>
  <body>
    <!--The div element for the map -->
    <div id="map"></div
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->

<!-- test table baru -->
<br>
<br>
<table border="5px" style = "background: lightblue">
<tr>
<td>
<table border="5px">
<h4 align="center">CUSTOMER INFO</h4>

<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "dcrsms");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM customer WHERE account_id='C01'";
$result = $conn->query($sql);

$count=1;
if (mysqli_num_rows($result) > 0){
  foreach($result as $row){
  ?>
  
 <tr>
 <?php   foreach($result as $row){  
        ?>

    <th>Customer's Name</th>
    <td style = "background: white"><?=$row["custName"]?></td>
  </tr>
  <tr>
    <th>Address</th>
    <td style = "background: white"><?=$row["custAddress"]?></td>
  </tr>
  <tr>
    <th>Phone Number</th>
    <td style = "background: white"><?=$row["custNo"]?></td>
  </tr>
</table>
</td>
<tr>
<td><center><button onclick="startPickup()">START</button></center></td>
</tr>
      <?php $count=$count+1;
          echo "</tr>";
          }
         ?>
  
  </tbody>
    </table>

  <?php
    } }
else {
    echo "0 results";
}
?>
</table>


    </center>
  </div>
</div>
<br>
<br>
<br>
<br>
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
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOqs1SGKrjGhLafnIwG1LzLOFXyP__5i4&callback=initMap&libraries=&v=weekly"
      async
    ></script>
    <script>
      function startPickup() {
    var txt;
    var r = confirm("Start pickup?");
    if (r == true) {
      txt =   window.open("riderArrived.php", "_blank");;
    } else {
      txt = "Notify cancelled";
    }
  document.getElementById("demo").innerHTML = txt;
}
  </script>

  </body>
</html>

</html>