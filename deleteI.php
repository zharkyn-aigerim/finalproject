<?php
	session_start();
	if($_SESSION['id']==1){
		mysql_connect("localhost","root","");
		mysql_select_db("site");
		if(isset($_GET['id'])){
			$sql="delete from `check` where id=".$_GET['id'];
			mysql_query($sql);
			header("Location: http://localhost/helloRetake/admin.php");
		}
		else header("Location: http://localhost/helloRetake/");
	}
	else header("Location: http://localhost/helloRetake");
?>