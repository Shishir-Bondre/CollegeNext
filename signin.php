<?php
session_start();
if($_SESSION['i']==1)
{
include "connect_user.php";
if(isset($_POST['signin']))
{
	$email=mysql_real_escape_string($_POST['email']);
	$password=mysql_real_escape_string($_POST['password']);
	$check =mysql_query("SELECT * FROM `user_details` WHERE `email_id` = '$email' AND `password` = '$password'");
	
		if(mysql_num_rows($check)!=0)
		{	
			$_SESSION['s']=1;
			$check2=mysql_query("SELECT * FROM `user_details` WHERE `email_id`= '$email' AND `password`= '$password'");
			while($rec2=mysql_fetch_row($check2))
			{
				$_SESSION['fname']=$rec2[1];
				$_SESSION['lname']=$rec2[2];
			}
			echo "<script>location='engg/findcollege.php'</script>";
		}
		else{
			
			echo "<script>alert( 'OOPS Sorry Your Entered Email or Password is wrong..! ')</script>";
		}

}
elseif(isset($_POST['submit'])){
	$email=mysql_real_escape_string($_POST['email']);
	$check=mysql_query("SELECT * FROM `user_details` WHERE `email`= '$email'");
		if(mysql_query($check))
	{
		while($rec=mysql_fetch_row($check))
		{
			if($rec[6]!=NULL)
			{
		$password=$rec[6];
		break;
		}
		
		}	
		$to = "$email";
		$subject = "Password recovery";
		$txt = "Your Password is $password ";
		$headers = "From: admin@collegenext.in" ;
		mail($to,$subject,$txt,$headers);
	
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
  		
		<title>CollegeNeXT | Sign-IN</title>
  		<meta charset="UTF-8"> 
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Sign-IN : Sig-IN yourself ">
		<meta name="keywords" content=" Email-Id , Password etc ">
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
                        	<center>	<h1 class="a5"> Sign-IN  </h1> <center>
                    			 </div>
                    			 <div class="panel-body">
                    			 
                    			  <form method="post" action="">
        <div class="form-group">
        	<label for="email" class="a4" style="color:rgb(239, 72, 54);font-size:1.5em"> Email Id : </label>
				<input type="email" placeholder="Enter your Email Id " class="form-control input-lg a4" name="email" required />        
        </div>
        <div class="form-group">
        	<label for="password" class="a4" style="color:rgb(239, 72, 54);font-size:1.5em"> Password : </label>
				<input type="password" placeholder="Enter your Password " class="form-control input-lg a4" name="password" required />        
        </div>
         <div class="form-group col-md-offset-8 col-md-4">
        <button class="btn btn-lg btn-danger" name="signin">Sign-IN</button>
      </div>
       </form>
       <br><br>
			<a href="#" class="a4" style="color:rgb(239, 72, 54);font-size:1.3em;font-weight:700" data-toggle="modal" data-target="#myModal"> Forgot Your password ?</a>       
       <br><br>
       <a href="signup.php" class="a4" style="color:rgb(239, 72, 54);font-size:1.3em;font-weight:700" > Create your Account </a>
       <br><br><br><br>
                    			 
                    			 
                    			 
                    			 </div>
			
			
			
			</div>
					<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content a4">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Forgot your Password</h4>
        </div>
        <div class="modal-body">
               <form method="post" action="">
        <div class="form-group">
        	<label for="email" style="color:rgb(239, 72, 54);font-size:1.5em" class="a4"> Email Id : </label>
				<input type="email" placeholder="Enter your Email Id " class="form-control input-lg a4" name="email" required />        
        </div>
       
         <div class="form-group col-md-offset-6 col-md-6">
         <button class="btn btn-lg btn-danger" name="submit">Submit</button>
      </div>
       </form>
       <br><br><br><br><br><br>
        </div>
       
      </div>
      
    </div>
  </div>
		</div>
		</div>
		</div>
<br><br>
		</body>
		</html>	