
<html>
<head>
<title>PHP Programme Registration Form</title>
<style>
.wrapper{
            width: 500px;
            margin: 0 auto;
        }


table

{

border-style:solid;

border-width:2px;

border-color:black;

}
.help-block {color: #FF0000;}
</style>
</head>
<body style = "background: #e6f2ff" >
<body>
    <form name="frmRegistration" method="post" action="">
        <div class="demo-table">
<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$requestid = $name = $date = $time = $email = $phone_number = $damage  = $status ="";
$requestid_err =$name_err = $date_err = $date_err = $time_err = $email_err = $phone_number_err = $damage_err = $status_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	 // Validate requestid
    $input_requestid = trim($_POST["requestid"]);
    if(empty($input_requestid)){
        $requestid_err = "*Please enter a requestid.";
    } else{
        $requestid = $input_requestid;
    }
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "*Please enter a name.";
    } else{
        $name = $input_name;
    }
    
    // Validate date
    $input_date = trim($_POST["date"]);
    if(empty($input_date)){
        $date_err = "*Please enter  date.";     
    } else{
        $date = $input_date;
    }
    
    // Validate time
    $input_time = trim($_POST["time"]);
    if(empty($input_time)){
        $time_err = "*Please enter time.";     
    } else{
        $time = $input_time;
    }
	
	// Validate email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "*Please enter email.";     
    } else{
        $email = $input_email;
    }
	
	// Validate phone_number
    $input_phone_number = trim($_POST["phone_number"]);
    if(empty($input_phone_number)){
        $phone_number_err = "*Please enter phone_number.";     
    } else{
        $phone_number = $input_phone_number;
    }
	
	// Validate damage
    $input_damage = trim($_POST["damage"]);
    if(empty($input_damage)){
        $damage_err = "*Please enter damage.";     
    } else{
        $damage = $input_damage;
    }
	
	
	// Validate status
    $input_status = trim($_POST["status"]);
    if(empty($input_status)){
        $status_err = "*Please enter status.";     
    } else{
        $status = $input_status;
    }
    
    // Check input errors before inserting in database
    if(empty($requestid_err) && empty($name_err) && empty($date_err) && empty($time_err) && empty($email_err) && empty($phone_number_err)
		&& empty($damage_err)  && empty($status_err) ){
        // Prepare an insert statement
        $sql = "INSERT INTO request_details2  (requestid, name, date, time, email, phone_number, damage, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
               
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssss", $param_requestid, $param_name, $param_date, $param_time, $param_email
			, $param_phone_number, $param_damage, $param_status);
            
            // Set parameters
			$param_requestid = $requestid;
            $param_name = $name;
            $param_date = $date;
            $param_time = $time;
			$param_email = $email;
            $param_phone_number = $phone_number;
            $param_damage= $damage;
			$param_status = $status;
			
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: coorindex.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
  
</head>

<body>
    <div class="wrapper">
            <div class="row">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add request record to the database.</p>
					<img src="is.jpg" alt="Italian Trulli" class="center" width="310" height="190">
					<br><br>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<table border='1'>
					<tr>
					<td>
                        <div class="form-group <?php echo (!empty($requestid_err)) ? 'has-error' : ''; ?>">
                            <label>Request ID</label>
							<td>
                            <input type="text" name="requestid" class="form-control" value="<?php echo $requestid; ?>">
                            <span class="help-block"><?php echo $requestid_err;?></span>
                        </div>
						</td>
					    </tr> 
					<tr>
					<td>
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
							<td>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
						</td>
					    </tr> 
						<tr>
					   <td>
                        <div class="form-group <?php echo (!empty($date_err)) ? 'has-error' : ''; ?>">
                            <label>Date</label>
							 <td>
                            <input type="date" name="date" class="form-control" value="<?php echo $date; ?>">
                            <span class="help-block"><?php echo $date_err;?></span>
                        </div>
						</td>
					    </tr> 
						<tr>
					   <td>
                        <div class="form-group <?php echo (!empty($time_err)) ? 'has-error' : ''; ?>">
                            <label>Time</label>
							 <td>
                            <input type="time" name="time" class="form-control" value="<?php echo $time; ?>">
                            <span class="help-block"><?php echo $time_err;?></span>
                        </div>
						</td>
					    </tr> 
						<tr>
					   <td>
						<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
							 <td>
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                            <span class="help-block"><?php echo $email_err;?></span>
                        </div>
						</td>
					    </tr>
						<tr>
					   <td>
                        <div class="form-group <?php echo (!empty($phone_number_err)) ? 'has-error' : ''; ?>">
                            <label>Phone Number</label>
							 <td>
                            <input type="text" name="phone_number" class="form-control" value="<?php echo $phone_number; ?>">
                            <span class="help-block"><?php echo $phone_number_err;?></span>
                        </div>
						</td>
					    </tr>
						<tr>
					   <td>
						 <div class="form-group <?php echo (!empty($damage_err)) ? 'has-error' : ''; ?>">
                            <label>Damage/Symptom</label>
							 <td>
                            <input type="text" name="damage" class="form-control" value="<?php echo $damage; ?>">
                            <span class="help-block"><?php echo $damage_err;?></span>
                        </div>
						</td>
					    </tr>
						<tr>
					   <td>
						 <div class="dropdown <?php echo (!empty($status_err)) ? 'has-error' : ''; ?>">
						  
                            <label>Status:</label>
							<p style="color:red;"><small>*verify by admin. </small></p>
							 <td>
                               <select name="status" id="">
							  
                               <option value="Pending">Pending</option>

                            <span class="help-block"><?php echo $status_err;?></span>
                        </div>
						</td>
					    </tr>
						<tr>
					   <td>
                        <input type="submit" class="btn btn-primary" value="Submit">
						<td>
                        <a href="tryja.php" class="btn btn-default">Cancel</a>
						</td>
					    </tr>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
