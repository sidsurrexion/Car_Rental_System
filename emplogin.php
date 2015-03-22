<?php 
 session_start();
 ?>
<html>
<head>
	<title>Employee Login Page</title>
	<link href="car.css" type="text/css" rel="stylesheet"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="reserve.js"></script>
</head>
<body>
	<div class="top"> 
		<img class ="myimage" src="rent.jpg" alt="name" >
		<p class="phone"> CONTACT: 999-999-9999 </p>
	</div>
	
	<div>
			<ul class="options">
				<li class="left"><a href="home.html" class="optns">Home</a></li>
				<li class="left"><a href="service.html" class="optns" >Services</a></li> 
				<li class="left"><a href="FAQ.html" class="optns" >FAQ</a></li> 
				<li class="left"><a href="contact.html" class="optns" >Contact</a></li> 
			</ul>
	</div>
	
	
	<section class="container">
		<div class="login">
			<h1>Employee Login</h1>
				<p class="err" id="error">
			 	<?php 
			 	if (isset($_SESSION['errmessage'])) {
			 		echo $_SESSION['errmessage'];
			 		if ($_SESSION['a'] == "") {
			 			  $_SESSION['a'] = "1";
			 			}				 				 	  	
			 	}			 	
			 	if ($_SESSION['a'] == "2") {
			 	  session_destroy();
			 	} elseif ($_SESSION['a'] == "1") {
			 		$_SESSION['a'] = "2";
			 	}
				?>
			 </br></br>
			 </p>	
				<form method="post" action="emplogin_signin.php" name='reg_form' onSubmit="return validation();">
					<p><input type="text" name="login" value="" placeholder="Username or Email"></p>
					<p><input type="password" name="password" value="" placeholder="Password"></p>
					<p class="submit"><input type="submit" name="commit" value="Login"></p>
				</form>
		</div>

	</section>	
</body>
</html>