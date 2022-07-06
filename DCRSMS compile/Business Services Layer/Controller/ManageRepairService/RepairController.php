<?php
require_once '../../Business Services Layer/Model/ManageRepairService/RepairModel.php';

class RepairController{
    
    
    function viewAll(){
        $request_details = new RepairModel();
        return $request_details->viewallRepair();
    }
    
    function viewRepair($repair_id){
        $request_details = new RepairModel();
        $request_details->requestid = $request_id;
        return $request_details->viewRepair();
    }
    
    function add(){
        $inspect = new RepairModel();
        $inspect->time = $_POST['time'];
        $inspect->inspect_details = $_POST['inspect_detail'];
        $inspect_details->status = $_POST['status'];
        if($request_details->addStatus() > 0){
             $message = "Inspection Successfully Added!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../ApplicationLayer/ManageMedicalInterface/medicineList.php';</script>";
        }
    }

    function viewRequestList(){ 

    $customer = new RepairModel();
    return $customer->getAllRequest();
  }

    

}
?>
