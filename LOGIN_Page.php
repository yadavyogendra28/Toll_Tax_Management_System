<!doctype html>

<?php include("DBConnection.php"); ?>

<html>
<head>
<meta charset="utf-8">
<title>LOGIN</title>	
<link rel="stylesheet" type="text/css" href="LOGIN_Page_Style.css">
</head>
<body>
	<div class="loginbox">  
	  <img src="photos/user.png" class="user" width="512" height="512" alt=""/>
<h2>Log In </h2>
		<form method="post">
			<p>Select User </p>
			<select name="select_user">
			<option>ADMIN</option>
			<option>USER</option>
			</select>
			<p>User Name</p>
			<input type	="text" name="username" placeholder="Enter Username "required>
			<p>Password</p>
			<input type	="password" name="password" placeholder="Enter password "required>
		   <input type	="submit" name="login" value="Sign In">
			<a href="#">Change password</a>
	</form>	
</div>
<?php  	  
	

	
 if(isset($_POST['login']))
 {
	 $type=$_POST['select_user'];
	$user=$_POST['username'];
	 $password=$_POST['password'];
	 
	
	 
	
	
	 
	$query="select * from login where select_user='$type' and user_name='$user' and password='$password'";
	 $result=mysqli_query($Con,$query);
	
	  
		 
	 
	 while($row=mysqli_fetch_row($result)){
		
		
		 
		 if($row[0]=='Admin' && $row[1]=='Admin123' && $row[2]=='Admin12345')
		 {
			 
			 header("location:AdminPage.php");
			 
		 }
		 
	
		  
		 if($row[0]=='User' && $row[1]=='User123' && $row[2]=='User12345')
		 {
			 header("location:UserPage.php");
			 
		 }
		
		 
	 }
	 
	 
 }
	  	
	
	
?>
	

	
	
</body>
</html>