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
	<body>

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">SOLEX MARITIME<br><br>INCORPORATED</a></h1>
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
				<div class="row">

					<!-- Sidebar -->
						<div id="sidebar" class="4u">
							<section>
								<header>
									<h2>Job Posting</h2>
<br><table border="25">
       
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
                                echo"<td> <a href ='view.php?BookID=$id'>Edit&nbsp&nbsp&nbsp</a>";
                                echo"<td> <a href ='del.php?BookID=$id'><center>Delete</center></a>";
                                                                       
                                echo "</tr>";
                            }
                        }
                       }
 
 
 
                        $mysqli->close();
                        ?>
</table>
<form method="post">
<table>
 
        <tr>
                <td>Position</td>
                <td><input type="text" name="title" /></td>
        </tr>
        <tr>
                <td>Contract type</td>
                <td><input type="text" name="author" /></td>
        </tr>
        <tr>
                <td>Job Posting</td>
                <td><input type="text" name="name" /></td>
        </tr>
        <tr>
                <td>Date Created</td>
                <td><input type="text" name="copy" /></td>
        </tr>
        <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="add" /></td>
        </tr>
</table>
<?php
if (isset($_POST['submit']))
        {          
        include 'db.php';
       
                                        $title=$_POST['title'] ;
                                        $author= $_POST['author'] ;                                    
                                        $name=$_POST['name'] ;
                                        $copy=$_POST['copy'] ;
                 $mysqli->query("INSERT INTO `books`(Title,Author,PublisherName,CopyrightYear)
                VALUES ('$title','$author','$name','$copy')") or die('Failed: ('.$conn->errno.') '.$conn->error);;                                                                      
                               
                }
?>
</form>
<br>								</header>
								</section>
						</div>
					<!-- Sidebar -->
				

						
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