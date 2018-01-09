




<?php

	include 'header.php';
	session_start();	


?>


<html>

<head>

<title>Register,login,logout</title>
</head>

<body>
<div class="header">

<h1>login & register<h1>
</div>

<h1>Home<h1>
<div><h4>welcome <?php  echo $_SESSION['username']; ?></h4> </div>

</body>

</html>