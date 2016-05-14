<?php

  session_start();
  if(isset($_SESSION['id'])){
    if($_SESSION['id']==1){

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
    <!-- navbar-->
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
        <li><a href="shop.php">Shop</a></li>

        <li><a href="sto.php">STO</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="carwash.php"><span class="glyphicons glyphicons-shopping-cart"></span></a></li>
        <li><a href="#">I'm admin</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
    <!-- navbar-->
    <div id="wrapper" class="row" style="margin-bottom:100px">
				
        <div id="main" class="col-md-12">
					<h2 style="text-align:center">Admin</h2>
					<div id="items-block">
						<table class="table table-inverse">
						  <thead>
						    <tr>
						      <th>ID</th>
						      <th>Name</th>
						      <th>Email</th>
                  <th>Password</th>
						      <th>Edit</th>
						      <th>Delete</th>
						    </tr>
						  </thead>
						  <tbody>
                <?php
                mysql_connect("localhost","root","");
                mysql_select_db("site");
                $sql="select * from user";
                $result=mysql_query($sql);
                while($row=mysql_fetch_assoc($result)){
                ?> 
						    <tr>
						      <th scope="row"><?php echo $row['id']; ?></th>
						      <td><?php echo $row['username']; ?></td>
						      <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['password']; ?></td>
						      <td><a href="update.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
						      <td><a href="delete.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
						    </tr>
						    <?php
						  }?>
            </tbody>
              
						</table>
						
					</div>
				</div>
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
                  <th>Aprove</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql="select * from `check` where user_id=".$_SESSION['id'];
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
                  <td><a href="deleteI.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                  <td><a href="addhistory.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></td>
                </tr>
                <?php } ?>
                
              </tbody>
            </table>
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
</body>
</html>
<?php
    }
    else header("Location: http://localhost/helloRetake/");
  }else header("Location: http://localhost/helloRetake/");
?>