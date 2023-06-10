<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<link rel="stylesheet" type="text/css" href="ReportCss.css">
	
	
	
</head>

<body>
	
	<h1 class="ad1"> Toll Report</h1>
	
	<form action="SerchByVeh.php.php" method="post">
		
	<input class="btn" id="rd1" type="submit" name="vh"  value="Search By Vehicle">
	<input class="btnS" type="text" name="SbV" value="MP04A0000">
	
		</form>
	
	<form action="SerchByVehTYPE.php.php" method="post">
	<input class="btn" id="rd2" type="submit" name="vh"  value="Search By Vehicle Type">

		
		 <select name="SbvT" class="btnS1">
	 
    <option>Select Search Vehicle:</option>
    <option value="CAR / JEEP">CAR / JEEP</option>
    <option value="LCV / PICKUP">LCV / PICKUP</option>
    <option value="TRUCK / BUS">TRUCK / BUS</option>
    <option value="3 AXLE">3 AXLE</option>
    <option value="4 TO 6 AXLE">4 TO 6 AXLE </option>
    <option value="OSV">OSV</option>
   
  </select>	
	</form>
	
	<form action="serchByDelete.php" method="post">
		
	<input class="btn" id="rd1" type="submit" name="Vd123"  value="Search By Date">
	<input class="btnS" type="text" name="Vdate" value="01/01/2022">
	
		</form>
	
	<form action="SerchByEXPT.php.php" method="post">
	
	 <input class="btn" id="rd3" type="submit" name="vh"  value="Exempt">
		
	</form>
   
	 	
	<form action="SerchByAllDATA.php" method="post">
	
	 <input class="btn" id="rd4" type="submit" name="vh"  value="ALL DATA">
		
	</form>
	
	 
	
	
	
	

	 
	
	
	
	
	
</body>
</html>