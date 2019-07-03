<?php  
	$connect = mysqli_connect("localhost", "QPortal", "FRIENDS", "QPortal");
	$sql = "DELETE FROM Questions WHERE Qid ='".$_POST["Qid"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	} 
	else
	{
		echo 'error';
	} 
 ?>