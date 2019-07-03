<?php  
$connect = mysqli_connect("localhost", "QPortal", "FRIENDS", "QPortal");
$pass=md5($_POST['password']);
$sql = "INSERT INTO USERS(Username,Password,Name) VALUES('".$_POST["username"]."','".$pass."','".$_POST["name"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}
else{
  	echo"Error";
  }  
?>