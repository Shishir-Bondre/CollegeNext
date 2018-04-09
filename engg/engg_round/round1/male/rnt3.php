<?php
session_start();
if($_SESSION['nt3']!=1)
{
	echo "<script>location='nt3.php'</script>";

}

?>



<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="../img/profile.png" class="img-cricle">
  <title>CollegeNext | Mock Rounds </title>'
  <link rel="shortcut icon" href="../img/profile.png">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/bootstrap1.min.css" rel="stylesheet">
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
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
									
								$fname=$_SESSION['fname'];
								$lname=$_SESSION['lname'];
								echo " <li class='dropdown'>
                    <a href='#' class='dropdown-toggle a3' data-toggle='dropdown'><i class='fa fa-user'></i> $fname $lname <b class='caret'></b></a>
                    <ul class='dropdown-menu'>
                        <li>
                            <a href='../../../logout.php' class='a3'><i class='fa fa-fw fa-logout'></i> Logout</a>
                        </li>
                                                                    </ul>
              			  </li>";
								
								}
								else{			
                       echo"<script>location='../../../../signin.php'</script>";
                           }               
							?>




            </ul>

                
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="../../../findcollege.php" class="a3"><i class="fa fa-fw fa-dashboard"></i> Find College</a>
                    </li>
                    <li class="active">
                        <a href="../../../capround.php" class="a3"><i class="fa fa-fw fa-bar-chart-o"></i> Cap Rounds</a>
                    </li>
                    <li>
                        <a href="../../../topcolleges.php" class="a3"><i class="fa fa-fw fa-table"></i> Top Colleges</a>
                    </li>
                    <li>
                        <a href="../../../contactus.php" class="a3"><i class="fa fa-fw fa-edit"></i> For Queries</a>
                    </li>
                    <li>
                        <a href="../../../../index.php" class="a3"><i class="fa fa-fw fa-home"></i> Home </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
            
					<div class="row">'
						<div class="col-lg-12">
							<h1 class="a4"> CAP ROUND Pratice</h1><hr>						
						</div>
										
					</div>
					<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">	
                     		<div class="panel-heading">
								    <h1 class="a3">Hello..., <?php echo "$fname $lname" ?>     		
										              		
                     		
                     		</div>
                     		<div class="panel-body">
                     		<div class="panel panel-red">	
                     		<div class="panel-heading">
      							<?					               		
											if(isset($_POST['submit']))
											{

												$mark=$_SESSION['mark'];
												$gender="MALE";
												$category="nt3";
												$university=$_SESSION['university'];
												$college=$_POST['college'];
												$branch=$_POST['branch'];
												include "connect.php";
												$i =0;
												$j =1;
 												foreach($college as $college_name){
 												$home=mysql_query("SELECT * FROM `home_m_nt3` WHERE  `college_name`='$college_name' AND `branch`= '$branch[$i]'  AND `round_1m_s` <= '$mark'");
												while($rec=mysql_fetch_row($home))
												{
													if($rec[1]!=NULL)
												{
	  											echo "<h1 class='a3'> College Name : $rec[1]</h1>";
	  											echo "<h1 class='a3'> Branch : $rec[7] </h1>";
	  											echo "<h1 class='a3'> Option No : $j </h1> <br><br>";
	  											exit;
	  											}
												}
												$state=mysql_query("SELECT * FROM `state_m_nt3` WHERE `college_name`='$college_name' AND `branch`='$branch[$i]' AND `round_1m_s` <= '$mark'");
												while($rec1=mysql_fetch_row($state))
												{	
													if($rec1[1]!=NULL)
												{
	  												echo "<h1 class='a3'> College Name : $rec1[1]</h1>";
	  												echo "<h1 class='a3'> Branch : $rec1[7]</h1>";
	  												echo "<h1 class='a3'> Option No : $j </h1> <br><br>";
	  												exit;
	  											}
												}
												$j++;
												}
												if($rec[1]==NULL && $rec1[1]==NULL)
												{
												echo "<h1 class='a3'> College Name : OOP'S  No College is being Alloted to You Please Try Round2</h1>";
	  												echo "<h1 class='a3'> Branch : NILL</h1>";
	  												echo "<h1 class='a3'> Option No : NILL </h1> <br><br>";
												
												}
												
												}
												?>                     			
                     			
                     			
                     			
                           
                     		</div>
                     		</div>
                     		
                     	
                     				
                     		
                     		</div>
                     		
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

        
        <!-- /#page-wrapper -->
			</div>
    </div>
    <!-- /#wrapper -->
 
	 <script src="../js/script.js"></script>
    <!-- jQuery -->
	
	</body>
	</html>