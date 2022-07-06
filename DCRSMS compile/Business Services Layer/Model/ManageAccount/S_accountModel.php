<?php
require_once '../../libs/database.php';

class S_accountModel{

  public $S_account_id, $S_name, $S_phone, $S_email, $S_address, $S_password, $status;

  function S_createAccount(){
    $sql = "insert into S_account values (:S_account_id, 'Staff', :S_name, :S_address, :S_phone, :S_email, :S_password)";
    $args = [':S_account_id'=>$this->S_account_id, ':S_name'=>$this->S_name, ':S_address'=>$this->S_address, ':S_phone'=>$this->S_phone, ':S_email'=>$this->S_email, ':S_password'=>$this->S_password];
    $stmt = DB::run($sql, $args);
    $count = $stmt->rowCount();
    return $count;
    //$stmt = DB::run($sql, $args);
    //$count = $stmt->rowCount();
    //return $count;
  }

  function check_email(){
    $sql = "select * from S_account where S_email = :S_email";
    $args = [':S_email'=>$this->S_email];
    $stmt = DB::run($sql, $args);
    $count = $stmt->rowCount();
    return $count;
  }


  function get_end_S_ID(){
    $sql = "select account_id from S_account where account_type = 'Staff' order by S_account_id desc limit 1";
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

  
  function check_S_Account(){
    $sql = "select * from S_account where account_type = 'Staff' and S_email = :S_email and S_password = :S_password";
    $args = [':S_email'=>$this->S_email, ':S_password'=>$this->S_password];

    $stmt = DB::run($sql, $args);
    $count = $stmt->rowCount();
    return $count;
    //$stmt = C_accountModel::connect()->prepare($sql);
    //$stmt->execute($args);
    //return $stmt->rowCount();
  }
  
  function get_S_ID(){
    $sql = "select S_account_id, S_name from S_account where account_type = 'Staff' and S_email = :S_email and S_password = :S_password";
    $args = [':S_email'=>$this->S_email, ':S_password'=>$this->S_password];

    $stmt = DB::run($sql, $args);
    $count = $stmt->rowCount();
    return $count;
  }

  function deleteCustomer(){
        $sql = "delete from Account where account_id=:account_id";
        $args = [':account_id'=>$this->account_id];
        return DB::run($sql,$args);
    }

}
?>