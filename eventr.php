<?php  session_start();
		
  
        $a = $_GET['name'];
		include("config.php");
     $mail = $_SESSION['email'];
	 $pass = $_SESSION['pass'];
	 
	 	if($a == "codeblitz")
	{
	
	$q="UPDATE  register SET codeblitz='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}

	if($a == "carbine")
	{
	$q="UPDATE  register SET carbine='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	if($a == "androxus")
	{
	$q="UPDATE  register SET androxus='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	if($a == "web")
	{
	$q="UPDATE  register SET web='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	if($a == "renior")
	{
	$q="UPDATE  register SET renior='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "carbine")
	{
	$q="UPDATE  register SET carbine='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "android")
	{
	$q="UPDATE  register SET android='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "workshop1.html";</script>';
		exit;
	}
	}
	
	if($a == "innovia")
	{
	$q="UPDATE  register SET innovia='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "paper1.html";</script>';
		exit;
	}
	}
	
	if($a == "circuit")
	{
	$q="UPDATE  register SET circuit='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "digital")
	{
	$q="UPDATE  register SET digital ='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "eadapt")
	{
	$q="UPDATE  register SET eadapt='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "diffuse")
	{
	$q="UPDATE  register SET diffuse='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "perilouspath")
	{
	$q="UPDATE  register SET perilouspath='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "arm")
	{
	$q="UPDATE  register SET arm='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "workshop1.html";</script>';
		exit;
	}
	}
	
	if($a == "technotalk")
	{
	$q="UPDATE  register SET technotalk='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "paper1.html";</script>';
		exit;
	}
	}
	
	if($a == "circbuzz")
	{
	$q="UPDATE  register SET circbuzz='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "edoodle")
	{
	$q="UPDATE  register SET edoodle='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "electro")
	{
	$q="UPDATE  register SET electro='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "volttackle")
	{
	$q="UPDATE  register SET volttackle='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "eexplore")
	{
	$q="UPDATE  register SET eexplore='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "workshop1.html";</script>';
		exit;
	}
	}
	
	if($a == "robotrix")
	{
	$q="UPDATE  register SET robotrix='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "workshop1.html";</script>';
		exit;
	}
	}
	if($a == "energeia")
	{
	$q="UPDATE  register SET energia='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "contraption")
	{
	$q="UPDATE  register SET contraption='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "techquiz")
	{
	$q="UPDATE  register SET techquiz='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "dimension")
	{
	$q="UPDATE  register SET dimension='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "machinist")
	{
	$q="UPDATE  register SET machinist='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "festo")
	{
	$q="UPDATE  register SET festo='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "workshop1.html";</script>';
		exit;
	}
	}
	if($a == "mechanider")
	{
	$q="UPDATE  register SET mechanider='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "paper1.html";</script>';
		exit;
	}
	}
	if($a == "zenith")
	{
	$q="UPDATE  register SET zenith='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	if($a == "virtuoso")
	{
	$q="UPDATE  register SET virtuoso='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	if($a == "enroute")
	{
	$q="UPDATE  register SET enroute='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	if($a == "cad")
	{
	$q="UPDATE  register SET cad='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	if($a == "micropiling")
	{
	$q="UPDATE  register SET micropiling='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "workshop1.html";</script>';
		exit;
	}
	}
	if($a == "trussure")
	{
	$q="UPDATE  register SET trussure='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "workshop1.html";</script>';
		exit;
	}
	}
	
	if($a == "techvibes")
	{
	$q="UPDATE  register SET techvibes='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "paper1.html";</script>';
		exit;
	}
	}
	
	if($a == "spell")
	{
	$q="UPDATE  register SET spell='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "fight")
	{
	$q="UPDATE  register SET fight='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	if($a == "coadjuvancy")
	{
	$q="UPDATE  register SET coadjuvancy='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "brand")
	{
	$q="UPDATE  register SET brand='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "gabfest")
	{
	$q="UPDATE  register SET gabfest='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	if($a == "phineas")
	{
	$q="UPDATE  register SET phineas='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "manex")
	{
	$q="UPDATE  register SET manex='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	
	if($a == "hindi")
	{
	$q="UPDATE  register SET hindi='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "event1.html";</script>';
		exit;
	}
	}
	if($a == "exploring")
	{
	$q="UPDATE  register SET exploring='1' WHERE email= '$mail' AND password='$pass'";
		if($mysqli->query($q)=== TRUE)

	{
		echo'<script>alert("You have successfully registered");	window.location= "workshop1.html";</script>';
		exit;
	}
	}
	
	

	
	
		
?>