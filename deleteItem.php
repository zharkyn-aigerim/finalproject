<?php
	session_start();
	if(isset($_SESSION['id']) && isset($_GET['id'])){
		mysql_connect("localhost","root","");
		mysql_select_db("site");
		$sql="delete from now where id=".$_GET['id'];
		mysql_query($sql);
		header("Location: http://localhost/helloRetake/shopCart.php");
	}
	else header("Location: http://localhost/helloRetake/");
?>