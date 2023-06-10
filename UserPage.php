<!doctype html>



<html>
<head>
<meta charset="utf-8">
<title>Welcome User</title>
	
<link rel="stylesheet" type="text/css" href="UserPageCss.css">
	
<script src="UserPage.js">  </script>
	
	
</head>


	
<body>
	
<form action="PrintTicket.php" method="post">
	
<div class="Btype">  
	 <input class="btn" id="rd1" type="radio" name="vh" onclick="PrintT()" value="CAR / JEEP"><h4>CAR / JEEP </h4>		
	 <input class="btn" id="rd2" type="radio" name="vh" onclick="PrintT()" value="LCV / PICKUP"><h4>LCV / PICKUP</h4> 	
	 <input class="btn" id="rd3" type="radio" name="vh" onclick="PrintT()" value="TRUCK / BUS"><h4>TRUCK / BUS</h4> 	
	 <input class="btn" id="rd4" type="radio" name="vh" onclick="PrintT()" value="3 AXLE"><h4>3 AXLE </h4>	
	 <input class="btn" id="rd5" type="radio" name="vh" onclick="PrintT()" value="4 to 6 AXLE"><h4>4 to 6 AXLE</h4>	
	 <input class="btn" id="rd6" type="radio" name="vh" onclick="PrintT()" value="OSV"><h4>OSV</h4>	
</div>
	
	
<div class="bt1type">
	 <a href="ExemptSelect.php" target="new"> 
	<input class="btn1" id="rd22" type="button" name="vh1" onclick="" value="EXEMPT">  
		</a>			
</div>
	
	<a class="logbtn" href="LogOut.php"><img class="lgbtimg" src="photos/logoutbt3.png" alt="www.google.com"/></a>
	
	<div class="dt">
		<?php 
		
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
	 $dt1=date("d/m/Y  "); 
		echo $dt1;
	$day1=date("   - l");
		echo $day1;
		echo "<br>";
	$tm1=date("h:i:s a");
		echo $tm1;
		
		 session_start();
		$_SESSION['da2']=$dt1;
		$_SESSION['day2']=$day1;
		$_SESSION['dt2']=$tm1;
	?>
		
		
		
</div>
	
<div class="seltbox">
		<h6 class="info">Selection Info</h6>
	  <h5 class="seltboxSHOW">Vehicle Type </h5>
	  <h5 class="seltboxSHOW">Total Fare </h5>
	<textarea class=veTxt id="veTXT123" name="vtext11" ></textarea>
	<textarea class=fare name="fare" value="Fare"></textarea>
		 
	
	</div>  
	

	
<h2 class=vns> Vehicle Number</h2> 
	
	<input class=vnt type="text" name="vnt" value="MP04A1234">
	
 <input class=prtb2 type ="submit" name="Pticket" value="Print Ticket">
	
	
	</form>
	
<div class="imgV">
  <h5>Select Vehicle</h5>
<img id="image" class="imgV1" src="photos/car11.png" width="860" height="355" alt=""/> 

</div>	
	
	


	
	
	
</body>
</html>