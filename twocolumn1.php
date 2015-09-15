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
				<header><center>									<h2>Job Posting</h2>
<br><table border="3">
       
                        <?php
                        include("db.php");  
echo "<tr>";
echo "<th><b>Position&nbsp&nbsp&nbsp</th>";
echo  "<th><b>Contract Type&nbsp&nbsp&nbsp</th>";
echo "<th><b>Job(s) Available(s)&nbsp&nbsp&nbsp</th>";
echo "<th><b>Date Created&nbsp&nbsp&nbsp</th>";
echo  "</tr>";		
					   $result = $mysqli->query("SELECT * FROM books") or die('Failed: ('.$conn->errno.') '.$conn->error);;
                       
                       if ($result) {
                        if ($result->num_rows > 0) {
                            while ($test = $result->fetch_assoc()) {
                                         $id = $test['BookID'];
                                echo "<tr align='center'>";  
								echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                echo"<td><font color='black'>" .$test['Title']."</font></td>";
                                echo"<td><font color='black'>". $test['Author']. "</font></td>";
                                echo"<td><font color='black'>". $test['PublisherName']. "</font></td>";
                                echo"<td><font color='black'>". $test['CopyrightYear']. "</font></td>";
                                                                       
                                echo "</tr>";
                            }
                        }
                       }
 
 
 
                        $mysqli->close();
                        ?>		<center><a href="loginpage.php"><button type="button">Log in</button></a></center>
</table>						
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