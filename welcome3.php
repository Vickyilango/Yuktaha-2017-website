<?php session_start();
	 if(isset($_SESSION['email']))
	 {
		 echo '<script>alert("you have logged in");
		 window.location= "workshop1.html";
		 </script>';
		
		
	 } 
	 else
	 {
	 	echo 'You are not logged In <br>';
		echo'<a href="index.php">LOGIN</a>';
		
	 }
?>i