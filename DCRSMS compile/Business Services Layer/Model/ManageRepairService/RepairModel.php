<?php
require_once '../../libs/database.php';

class RepairModel{
    public $requestid,$model,$damage,$status;
    
    
    function viewallRepair(){
        $sql = "select * from request_details";
        return DB::run($sql);
    }
    
    function viewRepair(){
        $sql = "select * from request_details where requestid=:requestid";
        $args = [':requestid'=>$this->requestid];
        return DB::run($sql,$args);
    }
    
    function addStatus(){
        $sql = "insert into inspect(time, inspect_detail, status) values(:time, :inspect_detail, :status)";
        $args = [':time'=>$this->time, ':inspect_detail'=>$this->inspect_detail, ':status'=>$this->status];
        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();
        return $count;
    }

    function getAllRequest(){ 
    $sql = "select `request_details`.*, `inspect`.status, `account`.name from `request_details` inner join `inspect` on `request_details`.requestid = `account`.account_id inner join `account` on `request_details`.requestid = `account`.account_id where `request_details`.status='PENDING'";
    $stmt = RepairModel::connect()->prepare($sql);
    $stmt->execute();
    return $stmt;
  }
    }
?>
