<html>
<head>
  <title>Homepage</title>
  
  <style>
    th, td{
      padding: 10px;
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

    <center><h2>Payment details</h2><br>

        <table id="table1" border="1px solid black">

          <tr>
            <th>No.</th>
            <th>Date</th>
            <th>Payment by</th>
            <th>Payment Made (RM)</th>
          </tr>

          <?php
          $i=0;
          foreach ($data as $row){
            $i++;
            echo "<tr>
            <td>".$i."</td>
            <td>".$row['date']."</td>
            <td>".$row['name']."</td>
            <td>".$row['totalprice']."</td>
          </tr>";
          }
          
          ?>
        </table>
    </center>
    <!-- footer -->
  <nav class="navbar navbar-default navbar-fixed-bottom" style="background:black">
    <ul class="nav navbar-nav navbar-left">
      <li><a> Developed by ASPIRE Sdn Bhd</a></li>
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
