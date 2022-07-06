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
      width: 80%;
      height: 20%;
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
      <h1 style = "text-align: center;"id="myDIV"><img src="../../images/search.png" alt="editProfile" style="width:80px;height:80px;">SEARCH CUSTOMER PROFILE</h1>
    <br>
<center>
  <form method="post">
  <div class="box"style="background:#b3d9ff">
  <label> Search</label>
  <input type="text" name="search">
  <input type="submit" name="submit">
</div>
</form>
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

<?php

$con = new PDO("mysql:host=localhost;dbname=dcrsms",'root','');

if (isset($_POST["submit"])) {
  $str = $_POST["search"];
  $sth = $con->prepare("SELECT * FROM `account` WHERE name = '$str'");

  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth -> execute();

  if($row = $sth->fetch())
  {
    ?>
    <br><br><br>
    <table>
      <tr>
        <th>Customer's ID</th>
        <th>Name </th>    
        <th>Phone Number </th>
      </tr>
      <tr>
        <td><?php echo $row->account_id; ?></td>
        <td><?php echo $row->name; ?></td>
        <td><?php echo $row->phone_no; ?></td>
      </tr>

    </table>
<?php 
  }
    
    
    else{
      echo "Name Does not exist";
    }


}

?>