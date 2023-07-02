<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DB Connection code </title>
</head>

<body>
	 
	<?php
	
	$Servername = "localhost:3308";
	$Username= "root";
	$Password="";
	$Dbname="tms";
	
	
	$Con =mysqli_connect($Servername,$Username,$Password,$Dbname);
/*	
	if($Con==true)
	{
		echo"connect";
	}
	else
	{
		echo"not connect";
	}
	*/
	?>
	
	
	
	
	
	
</body>
</html>
