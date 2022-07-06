<?php
require_once '../../Business Services Layer/Model/ManageAccount/S_accountModel.php';

session_start();
session_destroy();

class S_accountController{

  function S_signup(){

    $staff = new S_accountModel();

    $staff->S_email = $_POST['S_email'];

    if($staff->check_email()>0){
      return true;
    } 

    //$ID = $staff->get_S_ID();
    //$ID++;

    //$staff->account_id = $ID;
    $staff->S_name = $_POST['S_name'];
    $staff->S_phone = $_POST['S_phone'];
    $staff->S_password = $_POST['S_password'];
    $staff->S_address = $_POST['S_address'];
    $staff->status = "Active";  

    if($staff->S_createAccount() > 0){
      $message = "Registration Complete!";
      echo "<script type='text/javascript'>alert('$message');
      window.location = 'S_Login.php';</script>";
    }
    
  }//end function

  function S_accountLogin(){

    $staff = new S_accountModel();
    $staff->S_email = $_POST['S_email'];
    $staff->S_password = $_POST['S_password'];

    if ($staff->check_S_Account() > 0) {

      $result = $staff->get_S_ID();

      foreach ($result as $row){
        $S_account_id = $row['S_account_id'];
        $S_name = $row['S_name'];
      }

      session_start();
      $_SESSION['S_account_id'] = $S_account_id;
      $_SESSION['S_name'] = $S_name;

     	$message = "Login Successful!";
      echo "<script type='text/javascript'>alert('$message');
      window.location = '../../../Application Layer/ManageAccountInterface/S_Homepage.php';</script>";

    }else{

        $message = "Incorrect email/password!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../../Application Layer/ManageAccountInterface/C_Login.php';</script>";
    }
  }//end function

  function viewAll(){
       $customer = new S_accountModel();
        $customer->account_id = $_SESSION['account_id'];
       return $customer->viewAllItem();
    }

  function delete(){
        $customer = new S_accountController();
        $customer->account_id = $_POST['account_id'];
        if($customer->deleteCustomer()){
            $customer = "Success Delete!";
      echo "<script type='text/javascript'>alert('$message');
      window.location = '../../ApplicationLayer/ManageAccountInterface/S_viewCustList.php?account_id=".$_SESSION['account_id']."';</script>";
        }
    }

}
?>
