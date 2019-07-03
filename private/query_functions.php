<?php
session_start();
?>
<?php
function SignUp(){
	global $db;
	$errors=[];
	if(isset($_POST['register']))
	{
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	$name=mysqli_real_escape_string($db,$_POST['fullname']);
	$confirm_password=mysqli_real_escape_string($db,$_POST['confirm_password']);
	if(empty($username))
	{
		array_push($errors,"Username is required");
	}
	if(empty($password))
	{
		array_push($errors,"Password is required");
	}
	if(empty($name))
	{
		array_push($errors,"Name field is required");
	}
	if($password!=$confirm_password)
	{
		array_push($errors,"Passwords are not same");
	}
	if(count($errors)==0)
	{
		$password1=md5($password);
	$query="INSERT INTO USERS (Username,Password,Name) VALUES ('$username','$password1','$name')";
	$flag=mysqli_query($db,$query);
	if($flag)
	{
		$_SESSION['user']=$username;
		$_SESSION['username']=$username;
		$_SESSION['status']='LOGOUT';
		header('Location:questions.php');
	}
	else
	{
		echo "Username already exists";
	}

}
else
{
	for($x=0;$x<count($errors);$x++)
		echo $errors[$x];
}
}
else
{
	echo "Error";
}
}

function LogIn()
{
	global $db;
	$errors=array();
	if(isset($_POST['login']))
	{
		$username=mysqli_real_escape_string($db,$_POST['username']);
		$password=mysqli_real_escape_string($db,$_POST['password']);
	if(empty($username))
	{
		array_push($errors,"Username is required");
	}
	if(empty($password))
	{
		array_push($errors,"Password is required");
	}

	if(count($errors)==0)
	{
		$password1=md5($password);
		$query="SELECT * FROM USERS WHERE Username='$username' AND Password='$password1'";
		$result=mysqli_query($db,$query);
		if(mysqli_num_rows($result)==1)
		{
			$_SESSION['user']=$username;
			$_SESSION['username']=$username;
			$_SESSION['status']='LOGOUT';
			header('Location:user.php');
		}
		else
		{
			echo '<script>alert("wrong password or username")</script>';
		}
		
	}
}
	
}

function uploadQuest()
{
	global $db;
	$errors=array();
	if(isset($_POST['upload']))
	{
		$question=mysqli_real_escape_string($db,$_POST['ques']);
		$answer=mysqli_real_escape_string($db,$_POST['answer']);
		$subjects=mysqli_real_escape_string($db,$_POST['subjects']);
		$user=$_SESSION['user'];

		if(empty($question))
		{
			array_push($errors,'please fill the question');
		}
		if(empty($answer))
		{
			array_push($errors,'please fill the ans');
		}
		if(empty($subjects))
		{
			array_push($errors,'please select subject category');
		}
		if(count($errors)==0)
		{
			$query="INSERT INTO Questions(Question,Ans,Category,Username) VALUES('$question','$answer','$subjects','$user')";
			$flag=mysqli_query($db,$query);
			if($flag)
			{
				echo "Question uploaded";
			}
			else
			{
				if (empty($_SESSION['user']))
				{
					echo "Error";
				}
				
			}
		}
		else
		{
			for($i=0;$i<count($errors);$i++)
				{
					echo $errors[$i]."<br>";
				}
		}
	}
}



?>