<?php
session_start();
if($_SESSION['i']!=1)
{
	echo "<script>location='../../index.php'</script>";
}
else{
if($_SESSION['findcollege']==1)
{
	if(isset($_POST['submit']))
		{		
	
	$mark=mysql_real_escape_string($_POST['mark']);
	$rank=mysql_real_escape_string($_POST['rank']);
	
	$gender=mysql_real_escape_string($_POST['gender']);

	$category=mysql_real_escape_string($_POST['category']);

	$university=mysql_real_escape_string($_POST['university']);
	
		$_SESSION['direct']=1;
		$_SESSION['mark']=$mark;
		$_SESSION['rank']=$rank;		
		$_SESSION['university']=$university;

	if($gender=="male")
	{

		
		switch($category) 
		{
		
			case "OPEN" :
			echo "<script>location='male/open.php'</script>";
			break;					
				
			case "OBC" :
			echo "<script>location='male/obc.php'</script>";
			break;
					
			case "SC" :
			echo "<script>location='male/sc.php'</script>";
			break;
					
			case "ST" :
			echo "<script>location='male/st.php'</script>";
			break;
					
			case "VJ" :
			echo "<script>location='male/vj.php'</script>";
			break;
					
			case "NT1" :
			echo "<script>location='male/nt1.php'</script>";
			break;
					
			case "NT2" :
			echo "<script>location='male/nt2.php'</script>";
			break;
					
			case "NT3" :
			echo "<script>location='male/nt3.php'</script>";
			break;

		
		}
	
	
	}
	else
	{

	
	switch($category) 
		{	
		
			case "OPEN" :
			echo "<script>location='female/open.php'</script>";
			break;					
				
			case "OBC" :
			echo "<script>location='female/obc.php'</script>";
			break;
					
			case "SC" :
			echo "<script>location='female/sc.php'</script>";
			break;
					
			case "ST" :
			echo "<script>location='female/st.php'</script>";
			break;
					
			case "VJ" :
			echo "<script>location='female/vj.php'</script>";
			break;
					
			case "NT1" :
			echo "<script>location='female/nt1.php'</script>";
			break;
					
			case "NT2" :
			echo "<script>location='female/nt2.php'</script>";
			break;
					
			case "NT3" :
			echo "<script>location='female/nt3.php'</script>";
			break;
			
			}
	}
}
}
else{

echo "<script>location='../findcollege.php'</script>";

}


}


?>