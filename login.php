<?php

	if(isset($_POST['name'])){
		mysql_connect("localhost","root","");
		mysql_select_db("site");
		if(!isset($_POST['email']) && isset($_POST['username']) 
			&& isset($_POST['password'])) {
		
			$sql="select * from user where username='".$_POST['username']."' and password='".$_POST['password']."'";
			$result=mysql_query($sql);
			if(mysql_num_rows($result)>0){
				$row=mysql_fetch_assoc($result);
				session_start();
				$_SESSION['id']=$row['id'];
				$_SESSION['username']=$row['username'];
				$_SESSION['email']=$row['email'];
				
			}
			header("Location: http://localhost/helloRetake/");
		
		}
		else if(isset($_POST['email']) && isset($_POST['username']) 
			&& isset($_POST['password']) && isset($_POST['rpassword'])){
			
			if($_POST['password']!=$_POST['rpassword']){
				header("Location: http://localhost/helloRetake/");
			}
		
			$sql="select * from user where username='".$_POST['username']."' or email='".$_POST['email']."'";
			$result=mysql_query($sql);
			if (mysql_num_rows($result) == 0) {
        		$sql="insert into user(username,email,password) 
					values('".$_POST['username']."','".$_POST['email']."','".$_POST['password']."')";
				mysql_query($sql);
				header("Location: http://localhost/helloRetake/"); 
				
    		}	
		
		
		}
	}
	header("Location: http://localhost/helloRetake/");
	
?>