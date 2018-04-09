<?php
session_start();
if($_SESSION['i']!=1)
{
	echo "<script>location='../../index.php'</script>";
}
else{
if($_SESSION['capround']==1)
{
	$_SESSION['direct']=2;
	if(isset($_POST['round1']))
	{
					
	
	$mark=mysql_real_escape_string($_POST['mark']);
	
	
	$gender=mysql_real_escape_string($_POST['gender']);

	$category=mysql_real_escape_string($_POST['category']);

	$university=mysql_real_escape_string($_POST['university']);
	
		
		$_SESSION['mark']=$mark;
		$_SESSION['rank']=$rank;		
		$_SESSION['university']=$university;

	if($gender=="male")
	{

		
		switch($category) 
		{
		
			case "OPEN" :
			echo "<script>location='round1/male/open.php'</script>";
			break;					
				
			case "OBC" :
			echo "<script>location='round1/male/obc.php'</script>";
			break;
					
			case "SC" :
			echo "<script>location='round1/male/sc.php'</script>";
			break;
					
			case "ST" :
			echo "<script>location='round1/male/st.php'</script>";
			break;
					
			case "VJ" :
			echo "<script>location='round1/male/vj.php'</script>";
			break;
					
			case "NT1" :
			echo "<script>location='round1/male/nt1.php'</script>";
			break;
					
			case "NT2" :
			echo "<script>location='round1/male/nt2.php'</script>";
			break;
					
			case "NT3" :
			echo "<script>location='round1/male/nt3.php'</script>";
			break;

		
		}
	
	
	}
	else
	{

	
	switch($category) 
		{	
		
			case "OPEN" :
			echo "<script>location='round1/female/open.php'</script>";
			break;					
				
			case "OBC" :
			echo "<script>location='round1/female/obc.php'</script>";
			break;
					
			case "SC" :
			echo "<script>location='round1/female/sc.php'</script>";
			break;
					
			case "ST" :
			echo "<script>location='round1/female/st.php'</script>";
			break;
					
			case "VJ" :
			echo "<script>location='round1/female/vj.php'</script>";
			break;
					
			case "NT1" :
			echo "<script>location='round1/female/nt1.php'</script>";
			break;
					
			case "NT2" :
			echo "<script>location='round1/female/nt2.php'</script>";
			break;
					
			case "NT3" :
			echo "<script>location='round1/female/nt3.php'</script>";
			break;
			
			}
	}
}
else{

$mark=mysql_real_escape_string($_POST['mark']);
	
	
	$gender=mysql_real_escape_string($_POST['gender']);

	$category=mysql_real_escape_string($_POST['category']);

	$university=mysql_real_escape_string($_POST['university']);
	
		
		$_SESSION['mark']=$mark;
		$_SESSION['rank']=$rank;		
		$_SESSION['university']=$university;

	if($gender=="male")
	{

		
		switch($category) 
		{
		
			case "OPEN" :
			echo "<script>location='round2/male/open.php'</script>";
			break;					
				
			case "OBC" :
			echo "<script>location='round2/male/obc.php'</script>";
			break;
					
			case "SC" :
			echo "<script>location='round2/male/sc.php'</script>";
			break;
					
			case "ST" :
			echo "<script>location='round2/male/st.php'</script>";
			break;
					
			case "VJ" :
			echo "<script>location='round2/male/vj.php'</script>";
			break;
					
			case "NT1" :
			echo "<script>location='round2/male/nt1.php'</script>";
			break;
					
			case "NT2" :
			echo "<script>location='round2/male/nt2.php'</script>";
			break;
					
			case "NT3" :
			echo "<script>location='round2/male/nt3.php'</script>";
			break;

		
		}
	
	
	}
	else
	{

	
	switch($category) 
		{	
		
			case "OPEN" :
			echo "<script>location='round2/female/open.php'</script>";
			break;					
				
			case "OBC" :
			echo "<script>location='round2/female/obc.php'</script>";
			break;
					
			case "SC" :
			echo "<script>location='round2/female/sc.php'</script>";
			break;
					
			case "ST" :
			echo "<script>location='round2/female/st.php'</script>";
			break;
					
			case "VJ" :
			echo "<script>location='round2/female/vj.php'</script>";
			break;
					
			case "NT1" :
			echo "<script>location='round2/female/nt1.php'</script>";
			break;
					
			case "NT2" :
			echo "<script>location='round2/female/nt2.php'</script>";
			break;
					
			case "NT3" :
			echo "<script>location='round2/female/nt3.php'</script>";
			break;
			
			}
	}

}
}
}





?>