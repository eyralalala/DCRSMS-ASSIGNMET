<?php
    require_once '../../Business Services Layer/Controller/ManageAccount/S_accountController.php';
    require_once '../../Business Services Layer/Controller/ManageAccount/C_accountController.php';

    session_start();

    $customer = new S_accountController();
    $result = $customer->viewAll();


    if(isset($_POST['delete'])){
        $customer->delete();
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
  width: 50%;
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
      <h1 style = "text-align: center;"id="myDIV"><img src="../../images/accountIcon.png" alt="editProfile" style="width:80px;height:80px;">Customer Account List</h1>
    <br>
<table>

    
                  <table border="1">
                    <tr>
                        <th width="10"><center><b>Customer's ID</b></center></th>
                        <th ><center><b>Customer's Name</b></center></th>
                        <th><center><b>Customer's Email</b></center></th>
                        <th><center><b>Action</b></center></th>
                    </tr>

                    <tr>
                        <td><?=$row['account_id']?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['email']?></td>
                        <form action="" method="POST">
                            <td style="text-align: center;">
                                &nbsp;<button type="button" onclick="location.href='./S_EditProfile.php?account_id=<?=$row['account_id']?>'">EDIT</i></button>
                                <button><a href="delete.php?account_id=<?=$row['account_id']?>">Delete</a><br>&nbsp;</button>
                                <button type="submit" name="delete" onclick="return confirm('Are you sure to delete?');"></button>
                            </td>
                        </form>
            
                    </tr>
                </table>
            </div>
  
    </body>
  </tbody>
    </table>
</table>

</table>


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