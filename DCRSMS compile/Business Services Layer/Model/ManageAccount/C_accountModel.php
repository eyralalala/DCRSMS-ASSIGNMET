<?php
require_once '../../libs/database.php';

class C_accountModel{

  public $account_id, $name, $phone_no, $email, $password, $address, $status;

  function C_createAccount(){
    $sql = "insert into Account values (:account_id, 'Customer', :name, :phone_no, :email, :password, :address)";
    $args = [':account_id'=>$this->account_id, ':name'=>$this->name, ':phone_no'=>$this->phone_no, ':email'=>$this->email, ':password'=>$this->password, ':address'=>$this->address];
    $stmt = DB::run($sql, $args);
    $count = $stmt->rowCount();
    return $count;
    //$stmt = DB::run($sql, $args);
    //$count = $stmt->rowCount();
    //return $count;
  }
  
  function check_email(){
    $sql = "select * from Account where email = :email";
    $args = [':email'=>$this->email];
    $stmt = DB::run($sql, $args);
    $count = $stmt->rowCount();
    return $count;
    //$stmt = C_accountModel::connect()->prepare($sql);
    //$stmt->execute($args);
    //return $stmt->rowCount();
  }

  function get_end_C_ID(){
    $sql = "select account_id from Account where account_type = 'Customer' order by account_id desc limit 1";
    $stmt = DB::run($sql, $args);
    $count = $stmt->rowCount();
    return $count;
    //$stmt = C_accountModel::connect()->prepare($sql);
    //$stmt->execute();
    //$count = $stmt->rowCount();

    if ($count > 0) {

      foreach ($stmt as $row)
        return $row['account_id'];

    } else return "0";
  }
  
  function check_C_Account(){
    $sql = "select * from Account where account_type = 'Customer' and email = :email and password = :password and address = :address";
    $args = [':email'=>$this->email, ':password'=>$this->password, ':address'=>$this->address];

    $stmt = DB::run($sql, $args);
    $count = $stmt->rowCount();
    return $count;
    //$stmt = C_accountModel::connect()->prepare($sql);
    //$stmt->execute($args);
    //return $stmt->rowCount();
  }

  function get_C_ID(){
    $sql = "select account_id, name from Account where account_type = 'Customer' and email = :email and password = :password";
    $args = [':email'=>$this->email, ':password'=>$this->password];

    $stmt = DB::run($sql, $args);
    $count = $stmt->rowCount();
    return $count;
  }

}
?>