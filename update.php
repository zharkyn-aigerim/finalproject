<?php
	session_start();
	if($_SESSION['id']==1){
		mysql_connect("localhost","root","");
		mysql_select_db("site");
		$sql="select * from user where id=".$_GET['id'];
		$result=mysql_query($sql);
		if(mysql_num_rows($result)>0){
			$row=mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title></title>
</head>
<body>
    <form action="upd.php" method="post">
  		<input type="text" value="<?php echo $row['username']; ?>" placeholder="username" name="username"><br>
  		<input type="email" value="<?php echo $row['email']; ?>" placeholder="email" name="email"><br>
  		<input type="text" value="<?php echo $row['password']; ?>" placeholder="password" name="password"><br>
  		<input type="hidden" value="<?php echo $row['id']; ?>" name="id">	
  		<input type="submit">
  	</form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
		}
	}
	else header("Location: http://localhost/helloRetake/");
?>