<!DOCTYPE HTML>
<!--
	Monochromed by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>SOLEX MARITIME</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">


	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">SOLEX MARITIME <br><br>INCORPORATED</a></h1>
						<span>Your Future Begins With Solex</span>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="threecolumn.html">Company Profile</a></li>
							<li><a href="twocolumn1.php">Job Posting</a></li>
							<li><a href="twocolumn2.html">Requirements</a></li>
							<li><a href="onecolumn.html">Contact Us</a></li>
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
			
	<!-- Main -->
		<div id="main">
			<div class="container">
				<?php
session_start();
?>
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	echo '<ul style="padding:0; color:red;">';
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<li>',$msg,'</li>'; 
	}
	echo '</ul>';
	unset($_SESSION['ERRMSG_ARR']);
}
?>
<form action="reg.php" method="POST">
Username<br>
<input type="text" name="uname" /><br>
Password<br>
<input type="password" name="pword" /><br>
<input type="submit" value="Login" />
</form>						
		</header>
				
				<div class="divider">&nbsp;</div>
				<div class="row">
				
					<!-- Content -->
						
					<!-- /Content -->
						
			
				</div>
			
			</div>
		</div>
	<!-- Main -->
	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					
					
					<div class="6u">
						<section>
							<header>
								<h2>SOLEX MARITIME <br><br>INCORPORATED</h2>
							</header>
							<p>Your Future Begins At SOLEX!</p>
						</section>
					</div>
				</div>
			</div>
		</div>
	<!-- Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
Copyright @2015
			</div>
		</div>

	</body>
</html>