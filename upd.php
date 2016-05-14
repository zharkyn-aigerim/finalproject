<?php
	session_start();
	if($_SESSION['id']==1){
		mysql_connect("localhost","root","");
		mysql_select_db("site");
		if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
			$sql="select * from user where (username='".$_POST['username']."' or email='".$_POST['email']."') and not id=".$_POST['id'];
			$result=mysql_query($sql);
			if(mysql_num_rows($result)==0){
				$sql="update user set username='".$_POST['username'].
								   "',email='".$_POST['email'].
								   "',password='".$_POST['password']."' where id=".$_POST['id'];
				mysql_query($sql);
				header("Location: http://localhost/helloRetake/admin.php");
			}
			else header("Location: http://localhost/helloRetake/update.php?id=".$_POST['id']);
		}
		else header("Location: http://localhost/helloRetake/update.php?id=".$_POST['id']);
	}
	else header("Location: http://localhost/helloRetake/");
?>