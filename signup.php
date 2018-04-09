<?php
session_start();
if($_SESSION['i']==1)
{
include "connect_user.php";
if(isset($_POST['signup']))
{	
	$gender=mysql_real_escape_string($_POST['gender']);
	$fname=mysql_real_escape_string($_POST['fname']);
	$lname=mysql_real_escape_string($_POST['lname']);
	$contact=mysql_real_escape_string($_POST['contact']);
	$email=mysql_real_escape_string($_POST['email']);
	$password=mysql_real_escape_string($_POST['password']);
	$check="INSERT INTO `user_details` (`sr.no`, `first_name`, `last_name`, `gender`, `contact_no`, `email_id`, `password`)
	 VALUES (NULL, '$fname', '$lname', '$gender', '$contact', '$email', '$password')";
		if(mysql_query($check))
		{
			$_SESSION['s']=1;
			$_SESSION['fname']=$fname;
			$_SESSION['lname']=$lname;
			echo "<script>location='engg/findcollege.php'</script>";
		
		}
		else{
			
			echo "<script>alert( 'OOPS Sorry Your  Entered Email or Password is wrong..! ')</script>";
		}

}
}
else 
{
echo "<script>location='index.php'</script>";

}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
  		
		<title>CollegeNeXT | Sign-UP</title>
  		<meta charset="UTF-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Sign-UP : Register With CollegeNext ">
		<meta name="keywords" content=" First Name , last Name , Email-Id etc ">
		<meta name="author" content="root" >
		
		<link rel="shortcut icon" href="img/profile.png" class="img-cricle">
  		<link rel="stylesheet" href="css/bootstrap.min.css">
   	<link rel="stylesheet" href="css/style.css">
  		<script src="js/jquery.min.js"></script>
  		<script src="js/bootstrap.min.js"></script>

	</head>

	<body style="background-color:#222;">
<br><br>
<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6 col-md-offset-3">
								<div class="panel panel-info">
                     		<div class="panel-heading ">
                        	<center>	<h1 class="a5"> Sign-Up : </h1>   <center>
                    			 </div>
                    			 <div class="panel-body">
                    			 
                    			  <form method="post" action="">
                    			  <div class="form-group">
        	<label for="first name" style="color:rgb(239, 72, 54);font-size:1.5em" class="a4"> First Name : </label>
				<input type="text" placeholder="Enter your  First Name " class="form-control input-lg a4" name="fname"  required />        
        </div>
        <div class="form-group">
        	<label for="Last name" style="color:rgb(239, 72, 54);font-size:1.5em" class="a4"> Last Name : </label>
				<input type="text" placeholder="Enter your  Last Name " class="form-control input-lg a4" name="lname"  required />        
        </div>
        <div class="form-group">
        <label for="gender" style="color:rgb(239, 72, 54);font-size:1.5em" class="a4" > Gender : </label>
  <select class="form-control input-lg a4" name="gender" required >
    <option value="male" > Male </option>
    <option value="female"> Female </option>
  </select>       
        </div>
        <div class="form-group">
        	<label for="contact" style="color:rgb(239, 72, 54);font-size:1.5em" class="a4"> Contact No : </label>
				<input type="text" placeholder="Enter your Contact No " class="form-control input-lg a4" name="contact" min="10"  maxlength="10" required />        
        </div>
        <div class="form-group">
        	<label for="email" class="a4" style="color:rgb(239, 72, 54);font-size:1.5em" > Email Id : </label>
				<input type="email" placeholder="Enter your Email Id " class="form-control input-lg a4" name="email" required />        
        </div>
        <div class="form-group">
        	<label for="password" class="a4" style="color:rgb(239, 72, 54);font-size:1.5em"> Password : </label>
				<input type="password" placeholder="Enter your Password " class="form-control input-lg a4" name="password" required />        
        </div>
         <div class="form-group col-md-offset-8 col-md-4">
        <input type="submit" class="btn btn-lg btn-danger" name="signup" value="Sign-UP">
      </div>
       </form>
       <br><br>
			
       <a href="signin.php" class="a4" style="color:rgb(239, 72, 54);font-size:1.3em;font-weight:700" > Already have the Account </a>
       <br><br><br><br>
                    			 
                    			 
                    			 
           </div>
			
			
			
			</div>
		
 
		</div>
		</div>
		</div>
<br><br>
		</body>
		</html>	