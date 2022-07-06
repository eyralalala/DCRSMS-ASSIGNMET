<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$requestid = $name = $date = $time = $email = $phone_number = $damage = $status = "";
$requestid_err = $name_err = $date_err = $time_err = $email_err = $phone_number_err = $damage_err = $status_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } else{
        $name = $input_name;
    }
    
    // Validate date
    $input_date = trim($_POST["date"]);
    if(empty($input_date)){
        $date_err = "Please enter an date.";     
    } else{
        $date = $input_date;
    }
    
    // Validate time
    $input_time = trim($_POST["time"]);
    if(empty($input_time)){
        $time_err = "Please enter time.";     
    } else{
        $time = $input_time;
    }
	
	// Validate email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter email.";     
    } else{
        $email = $input_email;
    }
	
	// Validate phone_number
    $input_phone_number = trim($_POST["phone_number"]);
    if(empty($input_phone_number)){
        $phone_number_err = "Please enter phone_number.";     
    } else{
        $phone_number = $input_phone_number;
    }
	
	// Validate damage
    $input_damage = trim($_POST["damage"]);
    if(empty($input_damage)){
        $damage_err = "Please enter damage.";     
    } else{
        $damage = $input_damage;
    }
	
	// Validate status
    $input_status = trim($_POST["status"]);
    if(empty($input_status)){
        $status_err = "Please enter status.";     
    } else{
        $status = $input_status;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($date_err) && empty($time_err) && empty($email_err) && empty($phone_number_err)
		&& empty($damage_err) && empty($status_err) ){
        // Prepare an update statement
        $sql = "UPDATE request_details2 SET name=?, date=?, time=?, email=?, phone_number=?, damage=?, status=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssi", $param_name, $param_date, $param_time, $param_email, $param_phone_number, $param_damage, $param_status, $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_date = $date;
            $param_time = $time;
			$param_email = $email;
            $param_phone_number = $phone_number;
            $param_damage= $damage;
			$param_status = $status;
			$param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
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
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM request_details2 WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
					$requestid = $row["requestid"];
                    $name = $row["name"];
                    $date = $row["date"];
                    $time = $row["time"];
					$email = $row["email"];
                    $phone_number = $row["phone_number"];
                    $damage = $row["damage"];
					$status = $row["status"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>

    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }


table

{

border-style:solid;

border-width:2px;

border-color:black;

 background-color: #C1DAE1;

}

</style>

</head>
<body style = "background: #e6f2ff" >
<body>
    <div class="wrapper">
            <div class="row">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
				
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
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
						</tr>
					    </td>
						<tr>
					    <td>
                        <div class="form-group <?php echo (!empty($time_err)) ? 'has-error' : ''; ?>">
                            <label>Time</label>
							<td>
                            <input type="time" name="time" class="form-control" value="<?php echo $time; ?>">
                            <span class="help-block"><?php echo $time_err;?></span>
                        </div>
						</tr>
					    </td>
						<tr>
					    <td>
						<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
							<td>
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                            <span class="help-block"><?php echo $email_err;?></span>
                        </div>
                         </tr>
					    </td>
						<tr>
					    <td>
						 <div class="form-group <?php echo (!empty($phone_number_err)) ? 'has-error' : ''; ?>">
                            <label>Phone Number</label>
							<td>
                            <input type="text" name="phone_number" class="form-control" value="<?php echo $phone_number; ?>">
                            <span class="help-block"><?php echo $phone_number_err;?></span>
                        </div>
						 </tr>
					    </td>
					    <tr>
					    <td>
						<div class="form-group <?php echo (!empty($damage_err)) ? 'has-error' : ''; ?>">
                            <label>Damage</label>
							<td>
                            <input type="text" name="damage" class="form-control" value="<?php echo $damage; ?>">
                            <span class="help-block"><?php echo $damage_err;?></span>
                        </div>

						</td> 
						</tr>
						<tr>
					    <td>
						<div class="form-group <?php echo (!empty($status_err)) ? 'has-error' : ''; ?>">
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
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
						</td>
						<td>
                        <input type="submit" class="btn btn-primary" value="Submit">
						  <a href="coorindex.php" ><button type="button">Cancel</button></a>
						</td>
						
						
						
						</tr>
                    </form>
					</table>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
