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
	
	<table align="center" border="1px" style="width: 600px; line-height: 50px;">
	
	<tr>
		<th colspan="6" bgcolor="rgba(226,34,231,1.00)"> <h2> Report</h2></th>
		</tr>
	
		<t>
		<th bgcolor="rgba(0,0,0,1.00)"> Vechicle Type </th>
		<th bgcolor="rgba(0,0,0,1.00)"> Vechicle Number</th>
		<th bgcolor="rgba(0,0,0,1.00)"> Fare </th>
			<th bgcolor="rgba(0,0,0,1.00)"> Date </th>
			<th bgcolor="rgba(0,0,0,1.00)"> Time </th>
			<th bgcolor="rgba(0,0,0,1.00)"> Day </th>
		</t>
	
	
	<?php
	if(isset($_POST['Vd123']))
 {
	 $Vdate12=$_POST['Vdate'];
		
	}	
	?>

	
	<?php 
	
	$sql = "SELECT Vtype, fare, Vnumber, CDate, CTime, CDay FROM tmsuser WHERE CDate='$Vdate12'";
$result = $Con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
	?>
		<tr> 
		<td bgcolor="rgba(209,43,45,1.00)" align="center"> <?php echo  $row["Vtype"]; ?> </td>
		<td bgcolor="rgba(209,43,45,1.00)"align="center"> <?php echo  $row["Vnumber"]; ?> </td>
		<td bgcolor="rgba(209,43,45,1.00)"align="center"> <?php echo $row["fare"]; ?> </td>
			<td bgcolor="rgba(209,43,45,1.00)"align="center"> <?php echo $row["CDate"]; ?> </td>
			<td bgcolor="rgba(209,43,45,1.00)"align="center"> <?php echo $row["CTime"]; ?> </td>
			<td bgcolor="rgba(209,43,45,1.00)"align="center"> <?php echo $row["CDay"]; ?> </td>
	</tr>
	  
		<?php 
	  
  }
} else {
  echo "0 results";
}
	?>
	
	</table>
	
	
	
	
</body>
</html>