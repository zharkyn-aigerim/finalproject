<?php
	session_start();
	if($_SESSION['id']==1){
		mysql_connect("localhost","root","");
		mysql_select_db("site");
		if($_GET['id']==1)header("Location: http://localhost/helloRetake/admin.php");
		$sql="delete from user where id=".$_GET['id'];
		mysql_query($sql);
		header("Location: http://localhost/helloRetake/admin.php");
	}
	header("Location: http://localhost/helloRetake");
?>