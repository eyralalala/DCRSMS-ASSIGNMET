
<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM request_details WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row['name'];
                $date = $row['date'];
                $time = $row['time'] ;
				$email = $row['email'];
                $phone_number = $row['phone_number'];
                $damage = $row['damage'] ;
				$status= $row['status'] ;
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: coerror.php");
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
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    
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


    <div class="wrapper">
            <div class="row">
                    <div class="page-header">
                        <h1>View Record</h1>
                    </div>
						<table border='1'>
						<tr>
					<td>
                    <div class="form-group">
                        <label>Request ID</label>
						<td>
                        <p class="form-control-static"><?php echo $row["requestid"]; ?></p>
                    </div>
					</td>
					</tr>
						<tr>
					<td>
                    <div class="form-group">
                        <label>Name</label>
						<td>
                        <p class="form-control-static"><?php echo $row["name"]; ?></p>
                    </div>
					</td>
					</tr>
					<tr>
					<td>
                    <div class="form-group">
                        <label>Date</label>
						<td>
                        <p class="form-control-static"><?php echo $row["date"]; ?></p>
                    </div>
					</td>
					</tr>

					<tr>
					<td>
						<div class="form-group">
                        <label>Email</label>
						<td>
                        <p class="form-control-static"><?php echo $row["email"]; ?></p>
                    </div>
					</td>
					</tr>
					<tr>
					<td>
                    <div class="form-group">
                        <label>Phone Number</label>
						<td>
                        <p class="form-control-static"><?php echo $row["phone_number"]; ?></p>
                    </div>
					</td>
					</tr>
					<tr>
					<td>
                    <div class="form-group">
                        <label>Damage</label>
						<td>
                        <p class="form-control-static"><?php echo $row["damage"]; ?></p>
                    </div>
					</td>
					</tr>
					<tr>
					<td>
					<div class="form-group">
                        <label>Status</label>
						<td>
                        <p class="form-control-static"><?php echo $row["status"]; ?></p>
                    </div>
					</td>
					</tr>
                     <tr>
					    <td>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
						</td>
						<td>
             
						 <body>
                            <form method="post" action="code.php">
							
	                <button class="btn" type="submit" name="accept" >Accept<img src="accept.png" width="20" height="20" ></button>
					<button class="btn" type="submit" name="reject" >Reject<img src="reject.png" width="20" height="20" ></button>


		</div>
                  
        </form>
		
    </body>
	</td>
</html>
					
						
						

						
     