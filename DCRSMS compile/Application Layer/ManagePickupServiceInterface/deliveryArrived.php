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
<h2 align="center">ARRIVED</h2>
    <p><b> J&t Express Indera Mahkota, Kuantan, Pahang. </b></p>
    <p>09-572 3210</p>
    <center><button onclick="doneDeliver()">DONE</button></center>
</table>
</table>
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
      function doneDeliver() {
        var txt;
        var r = confirm("End delivery?");
    if (r == true) {
        txt =   window.open("trackingDone.php", "_blank");;
    } else {
      txt = "Notify cancelled";
    }
  document.getElementById("demo").innerHTML = txt;
}
  </script>

  </body>
</html>

</html>