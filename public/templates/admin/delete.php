<?php  
	$connect = mysqli_connect("localhost", "QPortal", "FRIENDS", "QPortal");
	$sql = "DELETE FROM USERS WHERE Username = '".$_POST["username"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>