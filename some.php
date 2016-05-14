<?php
	session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("site");
	if(isset($_SESSION['id'])){
		if(isset($_POST['name'])){
			$s="";
			$a=$_POST['name'];
			if($a==1)$s="Rags";
			else if($a==2)$s="Car parts";
			else if($a==3)$s="Oil";
			else $s="Battery";
			$sql="select * from now where name='".$s."' and user_id=".$_SESSION['id'];
			$result=mysql_query($sql);
			if(mysql_num_rows($result)>0){
				$row=mysql_fetch_assoc($result);
				$sql="update `now` set `countt`=".($row['countt']+1).",`price`=".($row['price']+2).",`date`=now() 
							where id=".$row['id'];
				mysql_query($sql);
				echo "update";
			}
			else {
				echo "sess";
				$sql="INSERT INTO `now`(`user_id`, `name`, `date`, `countt`, `price`) VALUES (".$_SESSION['id'].",'".$s."',now(),1,2)";
				mysql_query($sql);
				echo "succes";
			}
		}
		else echo "pidar";
	}
	else echo "tigr";
?>