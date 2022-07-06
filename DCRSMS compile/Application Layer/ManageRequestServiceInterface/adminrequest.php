
<html>
<head>


<style>
.container {  
 display: flex;
  align-items: center;
  justify-content: center;
} 

h1 {
  text-align: center;
}
table

{

border-style:solid;

border-width:3px;

border-color:black;
margin-left: auto;
margin-right: auto;
 font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
   padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #C1DAE1;
  color: black;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #2C6373 ;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

</style>

</head>
<body style = "background: #e6f2ff" >
<h1>Request Lists</h1>

<br>
<form name="frmRegistration" method="post" action="">

<?php

//Connect to the database server.
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "request") or die(mysqli_error($link));

//SQL query
$strSQL = "SELECT * FROM request_details WHERE status = 'Pending'";

echo "<table border='1'>

<tr>

<th>Customer ID</th>
<th>Name</th>
<th>Date</th>
<th>Time</th>
<th>Email</th>
<th>Phone Number</th>
<th>Damage</th>
<th>Status</th>
<th>Action</th>

</tr>";

//Execute the query (the recordset $rs contains the result)
$rs = mysqli_query($link, $strSQL);

//Loop the recordset $rs 
//Each row will be made into an array ($row) using mysql_fetch_array 

while ($row=mysqli_fetch_array($rs)){

//Write the value of the column FirstName (which is now in the array ($row)

  

                                    echo "<tr>";
									    echo "<td>" . $row['requestid'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['date'] . "</td>";
                                        echo "<td>" . $row['time'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
										echo "<td>" . $row['phone_number'] . "</td>";
                                        echo "<td>" . $row['damage'] . "</td>";
										echo "<td>" . $row['status'] . "</td>";
										echo '<td width=250>';
                                echo '<a  href="adminacceptedstatus.php?id='.$row['id'].'"><button type="button">View<img src="view.png" width="20" height="20" ></button></a></a>';
                                echo ' ';
								echo '<a  href="delete2.php?id='.$row['id'].'"><button type="button">Delete<img src="delete.png" width="20" height="20" ></button></a></br></a>';
                                echo ' ';
                               
								
                                  
								
                                echo '</tr>';


  
}
echo "</table>";


 
//Close the database connection
mysqli_close($link);
?>

</head>		
</html>

