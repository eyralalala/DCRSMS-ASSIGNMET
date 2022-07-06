<html>
  <head>
    <title>Choose Your Payment Method</title>
  <link rel="stylesheet" href="../../../css/bootstrap.css">
  <script src="../../../js/jquery_library.js"></script>
  <script src="../../../js/bootstrap.min.js"></script>
  
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Online Notice Board User Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>View Item</title>
    <style>
      table, td, tr{
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <!-- navigation bar -->
  <nav class="navbar navbar-default navbar-fixed-top" style="background:#000">
    <div class="container">

      <ul class="nav navbar-nav navbar-left">
        <li><a href="C_Home.php" style="width:200px"><strong>DCRSMS</strong></a></li>
        <li><a href=""><span class="glyphicon glyphicon-map-marker"></span> Track Delivery</a></li>
        <li><a href="C_paymentDetails"><span class="glyphicon glyphicon-list-alt"></span> Purchase History</a></li>
        <li><a href="C_payment.php"><span class="glyphicon glyphicon-credit-card"></span> Payment Method</a></li>
        <li><a href="C_Home.php?page=cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$cName?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="C_Login.php" onclick="alertMsg()">Logout</a></li>
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
  <br><br><br><br>
  <!-- end of navigation bar -->
  <div class="container-fluid">
     <div class="row">
     <div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
            <li class="active"><a>Type of Service</a></li>
            <li><a href="C_paymentDetails.php?page=fsp">Payment Summary</a></li>
            <li><a href="C_paymentDetails.php?page=gsp">Order Details</a></li>
            <li><a href="C_Home.php?page=msp"></a></li>
            <li><a href="C_Home.php?page=psp"></a></li> 
            <li><a href="C_Home.php?page=asp">All</a></li>        
  </ul>
  </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?php //include page based on selected navigation bar
    @$page=$_GET['page'];
    
    if($page!=NULL){

      if($page=="cart"){
        include('ViewCart.php');
      }else if($page=="fsp"){
        $type="Food";
        include('ViewType.php');
      }else if($page=="gsp"){
        $type="Good";
        include('ViewType.php');
      }else if($page=="msp"){
        $type="Medical";
        include('ViewType.php');
      }else if($page=="psp"){
        $type="Pet Assist";
        include('ViewType.php');
      }else if($page=="asp"){
        include('ViewAllType.php');
      }else{
        include('ViewItem.php?');
      }
    }
    else{
    ?>




    <?php
    }
    ?>
  </div>
  </div>
  </div>
      
    <center>
      <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Payment Page</title>

    <!-- Favicon -->
    <link rel="icon" href="../../libs/img/core-img/favicon1.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../libs/css/style0.css">
  <link type="text/css" href="../../libs/css/payment.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p>Welcome to DCRSMS </p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->
    
  
  
    <!-- Payment Area Start -->
  <section id="payment-css">
            <div class="single-welcome-slide bg-img" style="background-image: url(../../libs/img/bg-img/100.png);">
    <div class="method">
    <h3><b><a class="header-text">Select Payment Method</a></b></h3>
      <table border='0'>
      <tr>
        <td  valign="top">
        <div class="tab">
          <button class="tablinks" onclick="paymentMethod(event, 'creditCard')"><img src="../../libs/img/payment/creditCard.png" width=51><br>Credit/Debit Card</button>
          <button class="tablinks" onclick="paymentMethod(event, 'onlineBanking')"><img src="../../libs/img/payment/onlineBanking.png" width=48><br>Online Banking</button>
          <button class="tablinks" onclick="paymentMethod(event, 'paypal')"><img src="../../libs/img/payment/paypal.png" width=50><br>Paypal</button>
          <button class="tablinks" onclick="paymentMethod(event, 'COD')"><img src="../../libs/img/payment/COD.jpg" width=50><br>COD</button>
        </div>

        <div id="creditCard" class="tabcontent">
        <form action="PaymentCancel.php?id=<?php echo $row['bookingid']; ?>" method="POST">
          <p>
            <label for="cardNum">Card number</label><br>
            <input name="cardNum" type="text" maxlength="16" class="cardBox" required="required">
          </p><br>
          
          <p>
            <label for="cardName">Name on card</label><br>
            <input name="cardName" type="text" class="cardBox" required="required">
          </p><br>
          
          <p>
            <span style="margin-right: 46px;"><label for="expiryMM">Expiration Month</label></span>
            <span style="margin-right: 67px;"><label for="expiryYY">Expiration Year</label></span>
            <label for="cvv">CVV</label><br>
            
            <select name="cardEXPMM" class="EXPBox" required="required"> 
              <option selected="selected" value="">MM</option> 
              <option value="01">Jan (01)</option> 
              <option value="02">Feb (02)</option> 
              <option value="03">Mar (03)</option> 
              <option value="04">Apr (04)</option> 
              <option value="05">May (05)</option> 
              <option value="06">Jun (06)</option> 
              <option value="07">Jul (07)</option> 
              <option value="08">Aug (08)</option> 
              <option value="09">Sep (09)</option> 
              <option value="10">Oct (10)</option> 
              <option value="11">Nov (11)</option> 
              <option value="12">Dec (12)</option> 
            </select>       
            <select name="cardEXPYY" class="EXPBox" required="required"> 
              <option selected="selected" value="">YYYY</option> 
              <option value="2017">2017</option> 
              <option value="2018">2018</option> 
              <option value="2019">2019</option> 
              <option value="2020">2020</option> 
              <option value="2021">2021</option> 
              <option value="2022">2022</option> 
              <option value="2023">2023</option> 
              <option value="2024">2024</option> 
              <option value="2025">2025</option> 
              <option value="2026">2026</option> 
              <option value="2027">2027</option> 
              <option value="2028">2028</option> 
              <option value="2029">2029</option> 
              <option value="2030">2030</option> 
              <option value="2031">2031</option> 
              <option value="2032">2032</option> 
              <option value="2033">2033</option> 
              <option value="2034">2034</option> 
              <option value="2035">2035</option> 
              <option value="2036">2036</option> 
              <option value="2037">2037</option> 
              <option value="2038">2038</option> 
              <option value="2039">2039</option> 
              <option value="2040">2040</option> 
            </select>
            <input name="cvv" class="EXPBox" maxlength="3" type="password" required="required">
          </p>
          <br><br>
          
          <input style="margin-top:39px; margin-left:434px;" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="CreditCard"><br>
          
        </form>
        </div>
        
        <div id="paypal" class="tabcontent">
          <p>You will be re-directed to Paypal to complete payment.</p>
          <br><br>
          <input type="checkbox" name="paypalChk" value="paypalChk">Save your Paypal account for future use!<br>

          <form class="paypal" action="../../controller/PaymentController/PaypalController.php" method="POST" id="paypal_form">
            <input type="hidden" name="cmd" value="_xclick" />
            <input type="hidden" name="no_note" value="1" />
            <input type="hidden" name="lc" value="UK" />
            <input type="hidden" name="Event_Title" value="<?php echo $Event_Title; ?>" />
            <input type="hidden" name="item_number" value="<?php echo $bookingid; ?>" />
            <input type="hidden" name="Payment_Amount" value="<?php echo $Payment_Amount; ?>" />
            <input type="hidden" name="Payment_Method" value="Paypal" />
            <input type="hidden" name="ICno" value="<?php echo $ICno; ?>" />
            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
            <input type="hidden" name="first_name" value="Customer's First Name" />
            <input type="hidden" name="last_name" value="Customer's Last Name" />
            <input type="hidden" name="payer_email" value="customer@example.com" />
            <input type="hidden" name="return_url" value="http://www.localhost/ems/view/PaymentInterface/PaymentSuccess.php?id=<?php echo $row['bookingid']; ?>"/>
            <input type="hidden" name="cancel_url" value="http://www.localhost/ems/view/home.html" />

            <input class="payNowBTN" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><br>
          </form>
        </div>
        
        <div class="onlineBanking">
        <div id="onlineBanking" class="tabcontent">
          <p>Please ensure you have the following:</p>
          <p>1. Active online banking account and password</p>
          <p>2. Updated mobile registered with the bank</p>
          <p>3. Sufficient bank balance</p>
          <p>You will be re-directed to the bank's website for payment</p>
          <table action="">
          <tr>
            <td><div class="box">
            <p><input type="radio" name="bankBTN"><img src="../../libs/img/payment/icon-Maybank.png" width="50">Maybank</p>
            </div></td>
          
            <td><div class="box">
            <p><input type="radio" name="bankBTN"><img src="../../libs/img/payment/icon-CIMB.png" width="35">CIMB Bank</p>
            </div></td>
          
            <td><div class="box">
            <p><input type="radio" name="bankBTN"><img src="../../libs/img/payment/icon-Public_Bank.png" width="35">Public Bank</p>
            </div></td>
          </tr> 
          <tr> 
            <td><div class="box">
            <p><input type="radio" name="bankBTN"><img src="../../libs/img/payment/icon-RHB_Bank.png" width="55">RHB Bank</p>
            </div></td>
            <td><div class="box">
            <p><input type="radio" name="bankBTN"><img src="../../libs/img/payment/icon-HL_Bank.png" width="30">Hong Leong Bank</p>
            </div></td>
          </tr>
          </table>
        <div>
          <p class="verified">
          <img src="../../libs/img/payment/master_card.png" width="30">
          <img src="../../libs/img/payment/american_express.png" width="30">
          <img src="../../libs/img/payment/visa.png" width="30">
          <img src="../../libs/img/payment/veri_sign.png" width="30">
          </p>
        </div>  
          <input class="payNowBTN" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="OnlineBanking"><br>
        </div>  
        </div>
        </td>
        
      <!--Right Side summary-->
      <div class="summary_container">
        <div class="summary-text">Summary</div>
        <div id="time" class="time-css" name="payTime"></div>
        <form><br><br><br>
          Order ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
          <div class="div2"><?php echo $bookid; ?></div><br><br>
          Repair details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
          <div class="div2"><?php echo $Event_Title; ?></div><br><br>
          Name&nbsp;&nbsp;&nbsp;&nbsp;: 
          <div class="div2"><?php echo $Package_Type; ?></div><br><br>
          Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
          <div class="div2"><?php echo $Venue; ?></div><br><br>
          Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
          <div class="div2"><?php echo $End_Time; ?></div><br><br>
          <hr color="black">
          Total Amount <div class="div2">RM <?php echo $Payment_Amount; ?></div><br>
        </form>
        </div>
      </tr>
      </table>
      
      <br><button name="backBTN" class="btn btn-danger" onclick="location.href='Bill.php?id=<?php echo $row['bookingid']; ?>'">Back</button>
    </div>
    </div>
  </section>      
    <!-- Payment Area End -->
      <div class="container">
        <form name="form" action="" method="_POST">
          <button class="button button3" formaction="C_payment.php">PROCEED TO PAYMENT<img src="payment.png" width="300" height="150"></button>


        </form>
      </div>

        <table>

          <tr>
            <td colspan="2">Payment Method</td>
          </tr>
          
        </table>
        <br>
        

        <br><button onclick="window.close()">Close</button>
          


    </center>
  </body>
</html>

