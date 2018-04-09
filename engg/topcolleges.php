<?php
session_start();
if($_SESSION['i']!=1)
{
	echo "<script>location='index.php'</script>";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

   	<title>CollegeNext | Top Colleges </title>
 		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="CollegeNeXT Top Colleges : Top-colleges with all the Information ">
		<meta name="keywords" content=" College-Name , Branch-wise , Placement-Wise  etc ">
		<meta name="author" content="root" >

   <link rel="shortcut icon" href="img/profile.png" class="img-cricle">
   
<link href="css/style.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap1.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
 			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand a1" href="index.html">College<span style="color:rgb(239, 72, 54)" class="a2">NEXT</span></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              
				<?php
				error_reporting($level = null);
								if($_SESSION['s']==1)
								{
									$_SESSION['g']=1;
								$fname=$_SESSION['fname'];
								$lname=$_SESSION['lname'];
								echo " <li class='dropdown'>
                    <a href='#' class='dropdown-toggle a3' data-toggle='dropdown'><i class='fa fa-user'></i> $fname $lname <b class='caret'></b></a>
                    <ul class='dropdown-menu'>
                        <li>
                            <a href='logout.php' class='a3'><i class='fa fa-fw fa-logout'></i> Logout</a>
                        </li>
                                                                    </ul>
              			  </li>";
								
								}
								else{			
                        echo"<li>
                            <a href='#' class='a3' data-toggle='modal' data-target='#signin' ><i class='fa fa-fw fa-user'></i> Sign-IN</a>
                        </li>
                        <li>
                            <a href='#' class='a3' data-toggle='modal' data-target='#signup'><i class='fa fa-fw fa-user'></i> Sign-UP</a>
                        </li>";
                           }               
							?>




            </ul>

                
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="findcollege.php" class="a3"><i class="fa fa-fw fa-dashboard"></i> Find College</a>
                    </li>
                    <li >
                        <a href="capround.php" class="a3"><i class="fa fa-fw fa-bar-chart-o"></i> Cap Rounds</a>
                    </li>
                    <li class="active">
                        <a href="topcolleges.php" class="a3"><i class="fa fa-fw fa-table"></i> Top Colleges</a>
                    </li>
                    <li>
                        <a href="contactus.php" class="a3"><i class="fa fa-fw fa-edit"></i> For Queries</a>
                    </li>
                    <li>
                        <a href="../index.php" class="a3"><i class="fa fa-fw fa-home"></i> Home </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
						<div class="row">'
						<div class="col-lg-12">
							<h1 class="a4"> Top Colleges</h1><hr>						
						</div>
						<div class="col-lg-12">
							<p class="b1" style="text-align:justify">
								College<b>Next</b> Provides the List Of Top <b>Engineering</b> Colleges in Maharastra based on their pervious years Cut-offs <br>
								You May also look up For the college Based on the survey of Cut-off Wise, Faculty-wise, Placement-Wise , Branch-wise etc. <br><br>
								
								</p>  
								
															
							</p>						
						</div>					
					</div>
					<div class="alert alert-info">
               	<p class="b1">	Colleges Given below are provided with their Available-Branches, Website , Address , Hostel-Intake , Contact-No.</p>
               		
                </div>

					<div class="row">
					
						
								<div class="col-lg-12">
                        
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="danger b3">
                                        <th> Sr.No </th>
                                        <th> University Name </th>
                                        <th> College Status </th>
                                        <th> College Name </th>
                                        <th> No of Branches  </th>
                                        <th> Website </th>
                                         <th> College Address </th>
                                          <th> Contact-No </th>
                                           <th> Hostel-Intake </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="b1">
                                        
                                        <td>1</td>
                                        <td>Pune University</td>
                                        <td>Government Autonomus</td>
                                        <td>College Of Engineering ,Pune</td>
                                        <td>10</td>
                                        <td><a href="https://www.coep.org.in" target="_blank">www.coep.org.in</a></td>
                                        <td>Wellesly Road, Shivaji Nagar, Pune</td>
                                        <td>Fax : 25507299</td>
                                        <td>Boys : 210 <br> Girls : 100</td>
                                        
                                       
                                       
                                    </tr>
                                     <tr class="b1">
                                        
                                        <td>2</td>
                                        <td>Mumbai University</td>
                                        <td>Government-Aided Autonomus </td>
                                        <td>Veermata Jijabai Technological Institute (vjti) , Mumbai</td>
                                        <td>9</td>
                                        <td><a href="https://www.vjti.ac.in" target="_blank">www.vjti.ac.in</a></td>
                                        <td>H.R Mahajani Marg, Matunga, Mumbai</td>
                                        <td>(022)24198101</td>
                                        <td>Boys : <br>
                                        Grils : </td>
                                        
                                       
                                       
                                    </tr>                                    <tr class="b1">
                                        
                                        <td>3</td>
                                        <td>Deemed University</td>
                                        <td>Deemed-University Autonomus</td>
                                        <td>Institute Of Chemical Technology, Mumbai</td>
                                        <td>8</td>
                                        <td><a href="https://www.itcmumbai.edu.in" target="_blank">www.ictmumbai.edu.in</a>
                                        </td>
                                        <td>Nathalal Parikh Marg, Matunga, Mumbai</td>
                                        <td>(022)33611111</td>
                                        <td>Boys : 90 <br> Girls : 30</td>
                                        
                                       
                                       
                                    </tr>                                    <tr class="b3">
                                        
                                        <td><br><br></td>
                                        <td><br><br></td>
                                        <td><br><br></td>
                                        <td><br><br></td>
                                        <td><br><br></td>
                                        <td><br><br></td>
                                        <td><br><br></td>
                                        <td><br><br></td>
                                        <td><br><br></td>
                                        
                                       
                                       
                                    </tr>
                                     
                                </tbody>
                            </table>
                        </div>
                    </div>
                						
						
						
						
					
											
					
					
					
					</div>
					 </div>


<br><br>
							<div class="well" >
								<center><h1 class="b1">Contact Us at Email: <b> bondreshishir@collegenext.in</b><br><br>
								All CopyRights Reserved <b> &copy;CollegeNeXT : 2016 </b> ;<br>
								Developed and Design By <b> Shishir Bondre .</b>
									<center>					
							
													
						
						</div>
					












 
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    
        <div id="signin" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content a4">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title "> SIGN-IN :</h4>
      </div>
      <form action="../signin.php" class="form-role" method="post">
      <div class="modal-body">
        <div class="form-group ">
        	<label for="email" style="color:rgb(239, 72, 54);font-size:1.5em"> Email Id : </label>
				<input type="email" placeholder="Enter your Email Id " class="form-control input-lg" name="email" required />        
        </div>
        <div class="form-group ">
        	<label for="password" style="color:rgb(239, 72, 54);font-size:1.5em"> Password : </label>
				<input type="password" placeholder="Enter your Password " class="form-control input-lg" name="password" required />        
        </div>
      </div>
      <div class="modal-footer">
      <div class="form-group col-md-offset-6 col-md-6">
        <input type="submit" class="btn btn-lg btn-danger" name="signin" value="Sign-IN">
      </div>
      <br>
      
			
     
      </div>
      
      </form>
   <a href="#" class="col-md-offset-1 a4" style="color:rgb(239, 72, 54);font-size:1.3em;font-weight:700" data-toggle="modal" data-target="#forgot"> Forgot Your password ?</a>
    <br><br> <br><br></div>

  </div>
</div>

<div class="modal fade" id="forgot" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content a4">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Forgot your Password</h4>
        </div>
        <div class="modal-body">
               <form method="post" action="../signin.php">
        <div class="form-group">
        	<label for="email" style="color:rgb(239, 72, 54);font-size:1.5em" class="a4"> Email Id : </label>
				<input type="email" placeholder="Enter your Email Id " class="form-control input-lg a4" name="email" required />        
        </div>
       
         <div class="form-group col-md-offset-6 col-md-6">
        <input type="submit" class="btn btn-lg btn-danger" name="submit" value="Submit">
      </div>
       </form>
       <br><br><br><br><br><br>
        </div>
       
      </div>
      
    </div>
  </div>





<div id="signup" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md a4">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> SIGN-UP : Register with CollegeNext</h4>
      </div>
      <form action="../signup.php" class="form-role" method="post">
      <div class="modal-body">
      <div class="form-group">
        	<label for="first name" style="color:rgb(239, 72, 54);font-size:1.5em"> First Name : </label>
				<input type="text" placeholder="Enter your  First Name " class="form-control input-lg" name="fname"  required />        
        </div>
        <div class="form-group">
        	<label for="Last name" style="color:rgb(239, 72, 54);font-size:1.5em"> Last Name : </label>
				<input type="text" placeholder="Enter your  Last Name " class="form-control input-lg" name="lname"  required />        
        </div>
        <div class="form-group">
        <label for="gender" style="color:rgb(239, 72, 54);font-size:1.5em" > Gender : </label>
  <select class="form-control input-lg" name="gender" required >
    <option value="male" > Male </option>
    <option value="female"> Female </option>
  </select>       
        </div>
        <div class="form-group">
        	<label for="contact" style="color:rgb(239, 72, 54);font-size:1.5em"> Contact No : </label>
				<input type="text" placeholder="Enter your Contact No " class="form-control input-lg" name="contact" min="10"  maxlength="10" required />        
        </div>
        <div class="form-group">
        	<label for="email" style="color:rgb(239, 72, 54);font-size:1.5em"> Email Id : </label>
				<input type="email" placeholder="Enter your Email Id " class="form-control input-lg" name="email" required />        
        </div>
        <div class="form-group">
        	<label for="password" style="color:rgb(239, 72, 54);font-size:1.5em"> Password : </label>
				<input type="password" placeholder="Enter your Password " class="form-control input-lg" name="password" required />        
        </div>
      </div>
      <div class="modal-footer">
      <div class="form-group col-md-offset-6 col-md-6">
        <input type="submit" class="btn btn-lg btn-danger " name="siginup" value="Sign-UP">
      </div>
      <br><br><br>      
      </div>
      </form>
    </div>

  </div>
</div>


</body>

</html>
