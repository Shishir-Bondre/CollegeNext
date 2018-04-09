<?php

session_start();
if($_SESSION['i']==1)
{
	if($_SESSION['g']==1)
	{
		session_destroy();	
		echo  "<script>location='../index.php'</script>";	
	}

}
else {
echo  "<script>location='../index.php'</script>";	
}