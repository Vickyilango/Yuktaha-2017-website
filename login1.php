<?php session_start();
include("config.php");
if(isset($_POST['login']))
{
	$email = secure($_POST['email'], $mysqli);
	$pass =  secure($_POST['password'], $mysqli);

	
	$q = "SELECT * FROM register WHERE email = '$email' AND password = '$pass'";
	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			$_SESSION['email'] = $email;
			header("Location:welcome1.php");
			exit;
		}
		else
		{
			echo'<script>alert("INVALID EMAIL ID OR PASSWORD");</script>';
			header("Location:index.html");
			exit;
		}
	}
}
?>