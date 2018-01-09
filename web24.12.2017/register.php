



<?php

include'header.php';
include'LOGO_HOMEPAGE.php';
include'navigation.php';



//INSERT INTO guests(Guest_FName,Email_ID,REG_Date,Guest_pass)values('$username', '$email', '2017-2-10', '$password');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();
//connect to db
$db= mysqli_connect("localhost:3306","root","","k_bunglow");

 if(isset($_POST['register_btn'])) {
	 
	
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$password2 = mysqli_real_escape_string($db,$_POST['password2']);
	
	if ($password == $password2) {
			
		//create user
		$password = md5($password); //hash password before storing for security purpose
		
		$sql = "INSERT INTO guests(Guest_FName,Email_ID,REG_Date,Guest_pass)values('$username', '$email', '2017-2-10', '$password')";
		mysqli_query($db,$sql);
		$_SESSION['message'] = "YOUARE NOW LOGED IN";
		$_SESSION['username'] = $username;
		header("location: home.php"); //redirect to home page
	}else{
		$_SESSION['message'] = "The two passwords do not match";
		// failed
	}	
}
//login formstrs here
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//connect to db
$db= mysqli_connect("localhost:3306","root","","k_bunglow");

 if(isset($_POST['login_btn'])) {
	 session_start();
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		
		$password = md5($password);
		$sql = "SELECT * FROM guests WHERE Guest_FName='$username' AND Guest_pass='$password'";
		
		if (mysqli_num_rows($result) ==1) {
			$_SESSION['message'] = "YOU ARE NOW LOGED IN";
			$_SESSION['username'] = $username;
			header("location:home.php");//redirect to home pg
		}else{
			$_session['message'] = "username or password incorrect";

		}
		}












?>
<html>

<head>
<link href="css/nav.css" rel='stylesheet' type='text/css' />
<title>Register,login,logout</title>
</head>

<body>
<div class='login_register_form'>
<form method="post" action=register.php>
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="username" Class="textInput" required></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="email" name="email" Class="textInput" required></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" Class="textInput" required></td>
</tr>
<tr>
<td>Password again:</td>
<td><input type="password" name="password2" Class="textInput" required></td>
</tr>



</table>
<div class='registerbtn'>

<input type="submit" name="register_btn" value="    register   " >
</div>

</form>

</div>
<div>


<div class='login_login_form'>
<form method="post" action=home.php>
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="username" Class="textInput" required></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" name="password" Class="textInput" required></td>
</tr>




</table>
<div class='loginbtn'>

<input type="submit" name="login_btn" value="    login   " >
</div>


</body>

</html>