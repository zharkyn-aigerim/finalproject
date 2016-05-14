<!DOCTYPE html>
<?php
  session_start();
  if(isset($_SESSION['id'])){

?>

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
        <li><a href="sto.php">STO</a></li>
        <li><a href="shop.php">Shop</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="shopCart.php">Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>

    </div>
  </div>
  </nav>
    <!-- navbar-->
    <script type="text/javascript">
      var zz=1;
      var xxx=document.getElementsByTagName('img');
      function change(x) {
        if(x==1){
          document.getElementById('window').innerHTML="<img class=\"close\" onclick=\"show('none')\" src=\"http://sergey-oganesyan.ru/wp-content/uploads/2014/01/close.png\"><br><br><br><center><input type=\"text\" name=\"username\" placeholder=\"username\"><br><input type=\"email\" name=\"email\" placeholder=\"Email\"><br><input type=\"password\" name=\"password\" placeholder=\"password\"><br><input type=\"password\" name=\"rpassword\" placeholder=\"Repeat password\"><br><input type=\"submit\" name=\"name\" value=\"Enter\"><table class=\"regLog\"><tr><td onclick='change(1)'>Registration</td><td onclick='change(2)'>Login</td></tr></table></center>";

        }
        if(x==2){
          document.getElementById('window').innerHTML="<img class=\"close\" onclick=\"show('none')\" src=\"http://sergey-oganesyan.ru/wp-content/uploads/2014/01/close.png\"><br><br><br><center><input type=\"text\" name=\"username\" placeholder=\"username\"><br><br><input type=\"password\" name=\"password\" placeholder=\"password\"><br><br><input type=\"submit\" name=\"name\" value=\"Enter\"><table class=\"regLog\"><tr><td onclick='change(1)'>Registration</td><td onclick='change(2)'>Login</td></tr></table></center>";
        }
      }
      function changes(x) {

      h1=document.getElementsByTagName('h1');
        for(var i=0;i<xxx.length;i++){
          xxx[i].src='img/'+x+'.jpg';
          if(x==1)h1[i].innerHTML="Rags";
          if(x==2)h1[i].innerHTML="Car parts";
          if(x==3)h1[i].innerHTML="Oil";
          if(x==4)h1[i].innerHTML="Battery";
        }
        zz=x;
      }
      function superAjax(){
        console.log("press"+zz);
        $.ajax({
          type: "POST",
          url: "some.php",
          data: "name="+zz,
          success: function(msg){
              alert( "Saved ok "+ msg );
          }
        });
      }
    </script>

      
      <div id="wrapper" class="row">
				<div id="sidebar" class="col-md-3">
          <div class="sidebar-item bordered">
						<h2 style="text-align:center">Bestsellers</h2>
						<ul>
							<li onclick="changes(1)">Rags</li>
							<li onclick="changes(2)">Car parts</li>
							<li onclick="changes(3)">Oil</li>
							<li onclick="changes(4)">Battery</li>
						</ul>
					</div>
        </div>
        <div id="main" class="col-md-9">
					<h2 style="text-align:center">New pruducts</h2>
					<div id="items-block">
						<div class="main-items col-md-3">
							<h1>Accessible icon</h1>
							<div class="items-img">
								<img class='image' src="img/1.jpg">
							</div>
							<div class="items-button" onclick="superAjax()">
								<span>Add</span>
							</div>
						</div>
						<div class="main-items col-md-3">
							<h1>Accessible icons</h1>
							<div class="items-img">
								<img class='image' src="img/1.jpg">
							</div>
							<div class="items-button" onclick="superAjax()">
								<span>Add</span>
							</div>
						</div>
						<div class="main-items col-md-3">
							<h1>Accessible icons</h1>
							<div class="items-img">
								<img class='image' src="img/1.jpg">
							</div>
							<div class="items-button" onclick="superAjax()">
								<span>Add</span>
							</div>
						</div>
						<div class="main-items col-md-3">
							<h1>Accessible icons</h1>
							<div class="items-img" >
								<img class='image' src="img/1.jpg">
							</div>
							<div class="items-button" onclick="superAjax()">
								<span>Add</span>
							</div>
						</div>
						<div class="main-items col-md-3">
							<h1>Accessible icons</h1>
							<div class="items-img">
								<img class='image' src="img/1.jpg">
							</div>
							<div class="items-button" onclick="superAjax()">
								<span>Add</span>
							</div>
						</div>
						<div class="main-items col-md-3">
							<h1>Accessible icons</h1>
							<div class="items-img">
								<img class='image' src="img/1.jpg">
							</div>
							<div class="items-button" onclick="superAjax()">
								<span>Add</span>
							</div>
						</div>
						<div class="main-items col-md-3">
							<h1>Accessible icons</h1>
							<div class="items-img">
								<img class='image' src="img/1.jpg">
							</div>
							<div class="items-button" onclick="superAjax()">
								<span>Add</span>
							</div>
						</div>
						<div class="main-items col-md-3">
							<h1>Accessible icons</h1>
							<div class="items-img">
								<img class='image' src="img/1.jpg">
							</div>
							<div class="items-button" onclick="superAjax()">
								<span>Add</span>
							</div>
						</div>
						<div class="col-md-12"></div>
					</div>
				</div>
      </div>
      <br><br><br>
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
      h1=document.getElementsByTagName('h1');
      for(var i=0;i<h1.length;i++){
          h1[i].innerHTML="Rags";
         }
    </script>
  
</body>
</html>

<?php
  }
  else header("Location: http://localhost/helloRetake/index.php");
?>
