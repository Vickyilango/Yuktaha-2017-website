<?php session_start();
include("config.php");

if(isset($_POST['signup']))
{
	$userName = secure($_POST['username'],$mysqli);
	$email = secure($_POST['email'],$mysqli);
	$pass = secure($_POST['password'],$mysqli);
	$college = secure($_POST['college'],$mysqli);
	$department = secure($_POST['department'],$mysqli);
	$year = secure($_POST['year'],$mysqli);
	$mobile = secure($_POST['mobile'],$mysqli);
	
	$q = "INSERT INTO register(name,email,password,college,department,year,mobile) VALUES('$userName','$email','$pass','$college','$department','$year','$mobile')";
	if($mysqli->query($q) === TRUE)

	{
		
		$_SESSION['userName'] = $userName;
		$_SESSION['email'] = $email;
		$_SESSION['pass'] = $pass;
		
		
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'yuktaha.2k17@gmail.com';                 // SMTP username
$mail->Password = 'Psgitech123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('yuktaha.2k17@gmail.com', 'Yuktaha2k17');
$mail->addAddress($_SESSION['email'],$_SESSION['userName'] );     // Add a recipient      
$mail->addReplyTo('yuktaha.2k17@gmail.com', 'Yuktaha2k17');
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Re: YUKTAHA 2K17 | Registration Successful';
$mail->Body    = '<b>Greetings from Team Yuktaha</b><p>You have registered successfully.</p><br>Your Email Id is'.$_SESSION["email"]'</br><br>Your Password is'.$_SESSION["pass"]'<br><b>Best Wishes</b><br>Team Yuktaha';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
		
		//header("Location:welcome.php");
		echo'<script>alert("You have successfully registered");
		window.location= "event1.html";
		</script>';
		exit;
		
	}
	else
	{
		echo'<script>alert("You are already registered");
		
		</script>';
	
		exit;
	}
}

?>
