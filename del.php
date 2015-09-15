<?php
  include("db.php");  

	$id =$_REQUEST['BookID'];
	
	
	// sending query
	$mysqli->query("DELETE FROM books WHERE BookID = '$id'")
	or die(mysql_error());  	
	
	header("Location: edit.php");
?>