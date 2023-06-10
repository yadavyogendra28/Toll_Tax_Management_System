<!doctype html>

<?php include("DBConnection.php"); ?>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<style>
	
	body{
    margin: 0;
    padding: 0;
	background-image:url("photos/toll-road.jpg");
	background-size: cover;
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
	visibility: 0.2px;
	
}
	
	
	</style>
	
	
</head>

<body>
	
	
	<?php 
	
		
 if(isset($_POST['Pticket']))
 {
	 $Vtype=$_POST['vh'];
	 $fare=$_POST['fare'];
	 $Vnumber=$_POST['vnt'];
	 
	 session_start();
	$da3= $_SESSION['da2'];
	 $day3= $_SESSION['day2'];
	$dt2= $_SESSION['dt2'];
    
	
	 $sql = "INSERT INTO tmsuser (Vtype, fare, Vnumber, CDate, CTime, CDay)
VALUES ('$Vtype', '$fare','$Vnumber','$da3','$dt2','$day3')";

if ($Con->query($sql) === TRUE) 
{
  echo "New record created successfully";
	
	echo '<script>alert("Print Ticket Sussedfully ")</script>';
	
}
	 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


	 
	$Con->close(); 
	 
	 
	 
	 

 }
	

	
	
	?>
	
	
	
	
</body>
</html>