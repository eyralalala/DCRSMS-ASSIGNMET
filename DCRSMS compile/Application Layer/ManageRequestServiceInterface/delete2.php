
<?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once "config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM request_details WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: adminindex.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
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

}
    </style>
</head>
<body style = "background: #e6f2ff" >
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
					<table border='1'>
                        <h1>Delete Record</h1>
						
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
							<td>
                            <p>Delete this record?</p><br>
                            
                                <input type="submit" value="Yes" class="btn btn-danger">
                              <button><a href="adminindex.php" class="btn btn-default">No</a></button>
                            
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

