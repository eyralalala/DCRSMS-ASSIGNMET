<?php
require_once '../../Business Services Layer/Model/ManageAccount/C_accountModel.php';

session_start();
session_destroy();

class C_accountController{

  function C_signup(){

    $customer = new C_accountModel();

    $customer->email = $_POST['c_email'];

    if($customer->check_email()>0){
      return true;
    } 

   // $ID = $customer->get_C_ID();
   // $ID++;

   // $customer->account_id = $ID;
    
    $customer->name = $_POST['c_name'];
    $customer->phone_no = $_POST['c_phone'];
    $customer->password = $_POST['acc_password'];
    $customer->address = $_POST['c_address'];

    if($customer->C_createAccount() > 0){
      $message = "Customer successfully registered!";
      echo "<script type='text/javascript'>alert('$message');
      window.location = 'C_login.php';</script>";
    }
    
  }//end function

  function C_accountLogin(){

    $customer = new C_accountModel();
    $customer->email = $_POST['c_email'];
    $customer->password = $_POST['c_password'];

    if ($customer->check_C_Account() > 0) {

      $result = $customer->get_C_ID();

      foreach ($result as $row){
        $account_id = $row['account_id'];
        $name = $row['name'];
      }

      session_start();
      $_SESSION['account_id'] = $account_id;
      $_SESSION['name'] = $name;

     	$message = "Login Successful!";
      echo "<script type='text/javascript'>alert('$message');
      window.location = '../../Application Layer/ManageAccountInterface/C_homepage.php';</script>";

    }else{

        $message = "Incorrect email/password!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../Application Layer/ManageAccountInterface/C_login.php';</script>";
    }
  }//end function

}
?>
