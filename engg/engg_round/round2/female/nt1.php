<?php require_once('config.php');
		session_start();
		if($_SESSION['direct']==2)
		{
			$_SESSION['nt1']=1;		
		$mark=$_SESSION['mark'];
		$rank=$_SESSION['rank'];
		$gender="FEMALE";
		$category="nt1";
		$university=$_SESSION['university'];
		}

else{
echo "<sccript>location='../../../capround.php'</script>";

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
	<script>
	$(document).ready(function(){
	$('#country').change(function(){
		var country_id = $('#country').val();
		if(country_id != 0)
		{
			$.ajax({
				type:'post',
				url:'getvalue.php',
				data:{id:country_id},
				cache:false,
				success: function(returndata){
					$('#city').html(returndata);
				}
			});
		}
	})
})
	</script>

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
				<div class="alert alert-info">
               		<h1 class="b2"><b>Important points :</b></h1><hr>              
               		<p class="b1"> The Cap round 1 consists of 50 options out of which <b>First 3 options are complusory </b> 
               		<br><hr>
               	<p class="b1"> Please Select the Apporpriate Branch from the colleges given below <br><hr>
               	<p class="b1"> You may use the given<b> Serach Engine </b> for seraching the <b>college</b> and its <b> Respective Branches </b> <br><hr>
               		
               		
                </div>
					
					<div class="row">
							<div class="col-md-6">
								<div class="panel panel-primary">
                     		<div class="panel-heading ">
                        		<h1 class="a3">Hello, <?php echo "$fname $lname" ?>
                        		<br> Your details are </h1>
                    			 </div>
                     		<div class="panel-body">
                            <p class="b1"> Rank : <?php echo " $mark "?><hr></p>
                            <p class="b1">  University : <?php echo " $university "?> <hr> </p>
                            <p class="b1">  Gender : <?php echo " $gender "?> <hr> </p>
                            <p class="b1">  Category : <?php echo " $category "?> </p><br></p>
                     		</div>
                     		</div>
                     	</div>
	
	<div class="col-md-6">
                     		<div class="panel panel-red">
                            <div class="panel-heading">
                                <h1 class="a3">College and Respective Branches </h1>	
                     		</div>
                     		<div class="panel-body">
                     	<form>
									<div class="form-group">
		
							<select id="country" class="form-control input-lg" name="college" >
	    							
	    	<option value="0">Please Select a College</option>
	    							
	    		<?php $sql = mysql_query('SELECT * FROM `colleges`'); ?>
	        						
	        		<?php while($row = mysql_fetch_array($sql)){ ?>
	    						
	    				<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
	        						
	        				<?php } ?>
	    						
	    						</select>
	 </div>

		<div class="form-group">
  						 			
  			 <select id="city" class="form-control input-lg" name="branch">
	    							
	    			<option value="0">Branches available are </option>
	        						
	        			<option></option>
	    							
	    	</select>
	    							
	    	</div>
	    	</form>
	    	</div>
                     		</div>
                  		 </div>
							</div>
							<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-primary">
								<div class="panel-heading ">
                        		<h1 class="a3"> Option Form : For CAP ROUND1 </h1>		
								</div>
								<div class="pannel pannel-body">
								<br><br>
							&nbsp;&nbsp;&nbsp;		<input type="button" value="Add More" onClick="addRow('dataTable')" class="btn btn-md btn-primary a4" /> &nbsp;
				&nbsp;&nbsp;&nbsp;	<input type="button" value="Remove Option" onClick="deleteRow('dataTable')" class="btn btn-md btn-danger a4" />
					 
					 <br><br><br>
		<form method="post" action="rnt1.php" role="form" class="a4">
			 <table   class="table table-bordered table-striped a4">
			     <thead>
    <tr class="danger" >
	<th> Add / Remove</th>
	<th> College Name</th>
	<th> College Branch</th>
</tr>
</thead>
                  <tbody id="dataTable">
                    <tr>
                      <p>
						<td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td>
						<td>
							
								<select class="form-control" name="college[]">
								<option value="" > -: SELECT College :- </option>
								<?php
									$state=mysql_query("SELECT DISTINCT `name` FROM `colleges`");
									while($rec= mysql_fetch_row($state))
									{
										echo "<option value='$rec[0]'> $rec[0] </option>";									
									}
								?>
								</select>
							
							
						</td>
						<td>
						
								<select class="form-control" name="branch[]">
								<option value="" > -: SELECT Branch :- </option>
								<?php
									$state=mysql_query("SELECT DISTINCT `name` FROM `branch`");
									while($rec= mysql_fetch_row($state))
									{
										echo "<option value='$rec[0]'> $rec[0] </option>";									
									}
								?>
								</select>
							
	
						</td>
							</p>
                    </tr>
                    </tbody>
                </table>
                <br><br>
                 <div class="form-group">
	<center>
	<input type="submit" class="btn btn-danger btn-lg" name="submit">
	<button type="reset" class="btn btn-primary btn-lg" name="reset">RESET</button>
	</center>
    </div>
    <br><br><br>
							</form>						
								
								
								
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