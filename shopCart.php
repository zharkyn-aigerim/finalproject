<?php
  session_start();
  mysql_connect("localhost","root","");
  mysql_select_db("site");
  if(isset($_SESSION['id'])){

?>

<html>
<head>
	<title></title>
	 <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-inverse" style="border-radius:0px">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="carwash.php">Car Wash</a></li>
        <li><a href="sto.php">STO</a></li>
        <li><a href="shop.php">Shop</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="shopCart.php">Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
        <li><a href="logout.php">Logout</a></li>
        <?php 
            if($_SESSION['id']==1){
              ?>
              <li><a href="admin.php">Admin</a></li>        
              <?php
            }
        ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
    <!-- navbar-->

<div id="wrapper" class="row" style="margin-bottom:100px">
		<div id="main" class="col-md-12">
					<h2 style="text-align:center">Your cart</h2>
					<div id="items-block">
						<table class="table table-inverse">
						  <thead>
						    <tr>
						      <th>#</th>
						      <th>Name</th>
						      <th>Price per unit</th>
						      <th>Count</th>
						      <th>Total</th>
						      <th>Delete</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php
						  	$sql="select * from `now` where user_id=".$_SESSION['id'];
						  	$result=mysql_query($sql);
						  	$i=0;
						  	while($row=mysql_fetch_assoc($result)){
						  		$i++;
						  	?>
						    <tr>
						      <th scope="row"><?php echo $i; ?></th>
						      <td><?php echo $row['name']; ?></td>
						      <td><?php echo 2; ?>$</td>
						      <td><?php echo $row['countt']; ?></td>
						      <td><?php echo $row['price']; ?>$</td>
						      <td><a href="deleteItem.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
						    </tr>
						    <?php } ?>
						    
						  </tbody>
						</table>
						<div class="col-md-10"></div>
						<div class="col-md-2"> <a href="buy.php"><button type="button" class="btn btn-success">BUY <span class="glyphicon glyphicon-credit-card"></span></button></a></div>
					</div>

					<div id="main" class="col-md-12">
					<h2 style="text-align:center">History cart</h2>
					<div id="items-block">
						<table class="table table-inverse">
						  <thead>
						    <tr>
						      <th>#</th>
						      <th>Name</th>
						      <th>Price per unit</th>
						      <th>Count</th>
						      <th>Total</th>
						      <th>Date</th>
						    </tr>
						  </thead>
						  <tbody>
						  <?php
						  $sql="select * from history where user_id=".$_SESSION['id']." order by date desc";
						  $result=mysql_query($sql);
						  $i=0;
						  while($row=mysql_fetch_assoc($result)){
						  		$i++;

						  ?>
						    <tr>
						      <th scope="row"><?php echo $i; ?></th>
						      <td><?php echo $row['name']; ?></td>
						      <td>$2</td>
						      <td><?php echo $row['countt']; ?></td>
						      <td><?php echo $row['price']; ?></td>
						      <td><?php echo $row['date']; ?></td>
						    </tr>
						    <?php } ?>
						  </tbody>
						</table>
					</div>
				</div>
      </div>

<div id="footer">
        <ul class="footer-links">
            <li class="active">Specials</li>
              <li>|</li>
            <li>New Products</li>
            <li>|</li>
            <li>Top Sellers</li>
            <li>|</li>
            <li>Contacts</li>
            <li>|</li>
            <li>About us</li>
        </ul>
        <p>Copyright 2010 Mobile Store</p>
        <p>|</p>
        <p id="line">Privacy Police</p>
        <p>|</p>
        <p id="line">Conditions of Users</p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
    document.getElementById('window').style.display = 'none';
    document.getElementById('wrap').style.display = 'none';
    xxx=document.getElementsByClassName('image');

    </script>
</body>
</html>
<?php
  }
  else header("Location: http://localhost/helloRetake/");
?>
