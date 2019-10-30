<!--Student ID: 17485602 
	Student Name: Joanne Reilly
	Date: 25/04/2018
	Document has been validated.-->
<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Membership - East Coast Surf Club</title>
	<meta charset="UTF-8">
	<meta name="description" content="Membership page for East Coast Surf Club">
	<meta name="keywords" content="Surfing, Dublin, Waves, Club">
	<meta name="author" content="Joanne Reilly">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href ="./Images/waveicon.png" rel="icon">
	<link href="./CSS/assignment2.css" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
</head>
<body>
	<img src="./Images/surfing.png" class="logo" alt="logo" id="logo" style="padding-top: 0px;">
	<a href="#logo"><img src="./Images/back-to-top.png" class="top" alt="top"></a>
	
	<ul class="topbar">
		<li class="links"><a href="./Blog.html">Blog</a></li>
		<li class="links"><a class="active">Membership</a></li>
		<li class="links"><a href="./Aboutus.html">About us</a></li>
		<li class="links"><a href="./index.html">Welcome</a></li>
	</ul>
	<div class="bar"></div>
	
	<div class="container6">
		<h1 class="form">Membership.</h1>
		<h2 class="form">With a ECSC membership you can go on trips, recieve lessons, have access to equipment and participate in competitions.</h2>
	</div>
	
	<div class="container5">
	
		<p class="about_us">
		Welcome <?php echo $_POST["firstname"]; ?> to East Coast Surf Club!<br><br>
		
		We have been sent your details and will email you within the next two work days to confirm your place at our club and your membership.<br>
		You can come to our next meeting at Bray Beach, Bray on Monday, 
		<?php date_default_timezone_set('UTC');
		echo date('Y-m-d', strtotime('next week Monday')); ?>.<br><br>
		
		Your email address is: <?php echo $_POST["email"]; ?><br>
		If this email is incorrect, please submit form again using your correct email, thank you.<br>
		</p>
	</div>
	
	<footer>&copy; 2017 ECSC&trade;. All rights reserved.</footer>
</body>
</html>