<?php
	session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("site");
	if(isset($_SESSION['id'])){
		$sql="select * from now where user_id=".$_SESSION['id'];
		$result=mysql_query($sql);
		while($row=mysql_fetch_assoc($result)){
			$sqll="insert into `check`(user_id,date,name,countt,price) 
					values(".$row['user_id'].",now(),'".$row['name']."',".$row['countt'].",".$row['price'].")";
			mysql_query($sqll);
		}
		$sql="delete from `now` where user_id=".$_SESSION['id'];
		mysql_query($sql);
		header("Location: http://localhost/helloRetake/shopCart.php");
	}
	else header("Location: http://localhost/helloRetake");
?>