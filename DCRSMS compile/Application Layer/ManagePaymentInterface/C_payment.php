<?php
require_once '../../Business Services Layer/Controller/ManagePaymnetInterface/PaymentController.php';

$account_id = $_GET['account_id'];
$customer = new PaymentController();
$data = $customer->viewallPayment($account_id); 

//call controller viewAllPayment function//
if(isset($_POST['viewallPayment'])){
    $customer->viewallPayment();
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
      float: left;
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
      padding: 15px;
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
  <fieldset class="spf-fs-name">
      <h2> Payment</h2>

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
    
    <!--<div id="orderlist">
      <table width="100%" border="1" cellpadding="2" cellspacing="2">
        <tr>
          <td></td>
          <td width="125"><div align="center"><strong>Order Detail</strong></div></td>
          <td width="125"><div align="center"><strong>Quantity</strong></div></td>
          <td width="150"><div align="left"><strong>Price</strong></div></td>
          <td width="25"><div align="center"><strong>Total Price</strong></div></td>
        </tr> -->

        <form action="" method="POST">

            <td colspan="5"> </td>
          </tr>
          <table border="1px" align="center" style="width:100%">
  <tr>
    <th style="width: 180px; padding-left:8px;">No</th>
    <th style="width: 199px;padding-left:8px; border-right: 0:">Order Detail</th>
    <form action="" method="POST">
      <th style="border-right: 0; width: 155px;padding-left:8px;">price per unit</th>
   <th  style="width: 155px; padding-left:8px;">Quantity</th>

   
       <th style="border-right: 0; width: 100px;padding-left:8px;">Sub Total</th>
   
    <th  style="width: 90px; padding-left:8px;">Delivery amount</th>    
  </tr>


          <?php
          $i = 0;
          foreach($data as $row){
            $i++;
          ?>
<center>
          <tr>
       <td><?=$row['item_id']?></td>
            <td><?=$row['item_name']?></td>

            <td><?=$row['item_price']?></td>
<td><?=$row['quantity']?></td>

            <form action="" method="POST">

      

              <td><?=$row['subtotal']?></td>
         <td></td>
              <input type="hidden" name="itemID" value="<?=$row['item_id']?>">

            
</center>
            </form>
          </tr>

          <?php
          }
          if($i==0)
            $btn_status = "disabled";
          else $btn_status = "NULL";
          ?>

        
<td>
              <p><td></td></p>
            <p><td></td></p>
        <p><td></td></p>
          <p><td></td></p>
          <p><td>RM 10.00</td></p>
    

         
      
           
          </td>

          
          <tr>
            <td colspan="4" style="text-align: right"><th>Total Price</th></td>
      
            <td>RM <?=$total?> + RM10</td>
          </tr>

<!--<h4>
Cart Summary <span class="price" style="color:black"><b></b></span>
</h4> -->
<p>
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      </table>
              <div class="card-body">
                <center>
                  <form action="" method="POST">
                    
  <script
    src="https://www.paypal.com/sdk/js?client-id=ARpSge3-fXwfVnzqgEu4SfxHeClMk9MR1c2CbxJ0IHtKDvEnOLMKdf8SZbOI6bPr_-adwfIb6m8lrQRI-_j&currency=MYR"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
  </script>
</body>
<!-- Add the PayPal JavaScript SDK with both buttons and marks components -->
<script src="https://www.paypal.com/sdk/js?client-id=test&components=buttons,marks"></script>

<!-- Use radio buttons for choosing between PayPal and a different payment method -->
<label>
  <input type="radio" name="payment-option" value="paypal" checked>
  Pay with PayPal
  <div id="paypal-marks-container"></div>
</label>
<label>
  <input type="radio" name="payment-option" value="alternate">
  Cash On Delivery
</label>

<div id="paypal-buttons-container"></div>
<div id="alternate-button-container">
  <input type="submit" name="confirm_btn" value="Confirm Payment">
                    </form>
  <!--<button>Cash On Delivery</button>-->
</div>

<script>
  // Render the PayPal marks
  paypal.Marks().render('#paypal-marks-container');

  // Render the PayPal buttons
  paypal.Buttons().render('#paypal-buttons-container');

  // Listen for changes to the radio buttons
  document.querySelectorAll('input[name=payment-option]')
    .forEach(function (el) {
      el.addEventListener('change', function (event) {

        // If PayPal is selected, show the PayPal button
        if (event.target.value === 'paypal') {
          document.body.querySelector('#alternate-button-container')
            .style.display = 'none';
          document.body.querySelector('#paypal-buttons-container')
            .style.display = 'block';
        }

        // If alternate funding is selected, show a different button
        if (event.target.value === 'alternate') {
          document.body.querySelector('#alternate-button-container')
            .style.display = 'block';
          document.body.querySelector('#paypal-buttons-container')
            .style.display = 'none';
        }
      });
    });

  // Hide non-PayPal button by default
  document.body.querySelector('#alternate-button-container')
    .style.display = 'none';
</script>

<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        payer:{
          email_address: '<?= $email ?>',
          name: {
            given_name: '<?= $name ?>'
          },
          address: {
            address_line_1: '<?= $address1 ?>',
            address_line_2: '<?= $address2 ?>',
            admin_area_1: '<?= $state ?>',
            admin_area_2: '<?= $city ?>',
            postal_code: '<?= $zipcode ?>',
            country_code: "MY"
          }
        },
        purchase_units: [{
          amount: {
            currency_code: 'MYR'
            value: '<?= $total ?>'
          }
        }]
      });
    },
    onError: function(error) {
                  console.log(error);                      
                },
    onApprove: function(data, actions) {
    // This function captures the funds from the transaction.
    return actions.order.capture().then(function(details) {
    // This function shows a transaction success message to your buyer.
    alert('Transaction completed by ' + details.payer.name.given_name);
        window.location.href = "../../Application Layer/view/C_View/successPay.php?cust_id=<?=$_SESSION['userid']?>"                  
          });
        }
        

  }).render('#paypal-button-container');
</script>


</form>
</center>
</div>
</table>
</div>
</fieldset>
</body>