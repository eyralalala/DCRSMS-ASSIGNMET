<?php
require_once '../../../Business Services Layer/Model/PaymentModel.php';

class PaymentController{

  function checkout(){
    $group = new PaymentModel();
    $pdo_result=$group->getGroup($_SESSION['account_id']);

    foreach ($pdo_result as $row) {
    $cust_id=$row['cust_id'];
    $payment = new PaymentModel();
    $payment->c_account_id = $_SESSION['account_id'];
// $payment->dropoff_location = $_POST['dropoff_location'];
    $payment->pay_method = "Paypal";
    //$payment->totalprice = $_POST['total']+10;
    $payment->pay_method = "COD"

    $result = $payment->getItemID();
    foreach ($result as $row)
        $itemID = $row['item_id'];

    $order_id = $payment->getLastOrder();
    $order_id++;
    $payment->order_id = $order_id;

    $payment->setOrder();
    }
    $message = "Please fill this COD Form";
    echo "<script type='text/javascript'>alert('$message');
    window.location = '../ManagePaymentInterface/C_View/C_paymentCOD';</script>";
  }
  function calculateSubtotal($item_id, $quantity){
    $result = $cart->getItemPrice($item_id);
    foreach($result as $row)
      $price = $row['item_price'];
    return $price * $quantity;
  }
  function calculateTotalPrice(){
    $total_price = 0;
    $cart->c_account_id = $_SESSION['account_id'];
    $result = $cart->getSubtotal();

    foreach($result as $row){
      $total_price += $row['subtotal'];
    }
    return $total_price;
  }

}
?>
