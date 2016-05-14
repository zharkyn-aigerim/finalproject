<?php
	session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("site");
	if(isset($_SESSION['id'])){
		$sql="select * from `check` where id=".$_GET['id'];
		$result=mysql_query($sql);
		while($row=mysql_fetch_assoc($result)){
			$sqll="insert into `history`(user_id,date,name,countt,price) 
					values(".$row['user_id'].",now(),'".$row['name']."',".$row['countt'].",".$row['price'].")";
			mysql_query($sqll);
		}
		$sql="delete from `check` where id=".$_GET['id'];
		mysql_query($sql);
		header("Location: http://localhost/helloRetake/admin.php");
	}
	else header("Location: http://localhost/helloRetake");
?>