

<html>
  <head>
    <title>Successfully place order!</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
  <script src="../../../js/jquery_library.js"></script>
  <script src="../../../js/bootstrap.min.js"></script>

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
     
  	
    <!--<center><br>
      <span class="iconify" data-icon="emojione-v1:smiling-face-with-heart-eyes" data-height="75"data-inline="false"></span>
      <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script><span class="iconify" data-icon="emojione-v1:raising-hands" data-height="50" data-inline="false"></span>

    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <br><br><br>
    	<h2>Thank you for ordering with us, we'll contact you by email with your order details. </h2><br>
    		<h2>Kindly wait for our delivery partner to deliver your parcel  </h2><br>
     
    </center> -->

    <!--new code-->

    <!DOCTYPE html>
<center>
    <div class="box">
<html>
<head>
  <title></title>

  <h1>Cash On Delivery Form</h1>
<p>Note: This note is for COD purpose<br>
</p>

<p><label>First Name
<span class="small"></span>
</label>
<input type="text" name="fname" id="name" /><br></p>

<p><label>Last Name
<span class="small"></span>
</label>
<input type="text" name="lname" id="name" /><br></p>

<p><label>Contact No.
<span class="small"></span>
</label>
<input type="text" name="cnum" id="name" /><br></p>

<p><label>Email
<span class="small"></span>
</label>
<input type="text" name="email" id="email" /><br></p>

<p><label>Address
<span class="small"></span>
</label>
<input type="text" name="paddress" id="name" /><br></p>
<p><label>City
<input type="text" name="city" id="name" /></label><br></p>

<p><label for="Delivery">Delivery address is same as billing</label><br><br>
  <input type="submit" value="Submit"><br></p>
   </div>
  </center>
<!--<input type="submit" value="Confirm" style="margin-left: 150px;">
<div class="spacer"></div>-->

</form>
</div>
</head>
<body>

</body>
</html>

    <!--end of new code-->
    <!-- footer -->

  </body>
</html>
