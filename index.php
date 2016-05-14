<?php 
  session_start();
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
        <li><a href="sto.php">STO</a></li>
        <li><a href="shop.php">Shop</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="carwash.php"><span class="glyphicons glyphicons-shopping-cart"></span></a></li>
        <?php if(!isset($_SESSION['id'])){ ?>
                  <li onclick="show('block')"><a href="#">Login</a></li>
        <?php 
              } else {  ?>
                  <li><a href="logout.php">Logout</a></li>
        <?php 
            if($_SESSION['id']==1){
              ?>
              <li><a href="admin.php">Admin</a></li>        
              <?php
            }
          }
        ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
    <!-- navbar-->
    <script type="text/javascript">

					//Функция показа
			function show(state){

					document.getElementById('window').style.display = state;
					document.getElementById('wrap').style.display = state;
			}
      function change(x) {
        if(x==1){
          document.getElementById('window').innerHTML="<img class=\"close\" onclick=\"show('none')\" src=\"http://sergey-oganesyan.ru/wp-content/uploads/2014/01/close.png\"><br><br><br><center><input type=\"text\" name=\"username\" placeholder=\"username\"><br><input type=\"email\" name=\"email\" placeholder=\"Email\"><br><input type=\"password\" name=\"password\" placeholder=\"password\"><br><input type=\"password\" name=\"rpassword\" placeholder=\"Repeat password\"><br><input type=\"submit\" name=\"name\" value=\"Enter\"><table class=\"regLog\"><tr><td onclick='change(1)'>Registration</td><td onclick='change(2)'>Login</td></tr></table></center>";

        }
        if(x==2){
          document.getElementById('window').innerHTML="<img class=\"close\" onclick=\"show('none')\" src=\"http://sergey-oganesyan.ru/wp-content/uploads/2014/01/close.png\"><br><br><br><center><input type=\"text\" name=\"username\" placeholder=\"username\"><br><br><input type=\"password\" name=\"password\" placeholder=\"password\"><br><br><input type=\"submit\" name=\"name\" value=\"Enter\"><table class=\"regLog\"><tr><td onclick='change(1)'>Registration</td><td onclick='change(2)'>Login</td></tr></table></center>";

        }
      }

		</script>
					<!-- Задний прозрачный фон-->
		<div onclick="show('none')" id="wrap"></div>

					<!-- Само окно-->
			<form action="login.php" method="post" target="_blank">
        
      <div id="window" >
        		 <!-- Картинка крестика-->
				<img class="close" onclick="show('none')" src="http://sergey-oganesyan.ru/wp-content/uploads/2014/01/close.png">
        <br><br><br>
				<center>
          <input type="text" name="username" value="" placeholder="username"><br><br>
          <input type="password" name="password" value="" placeholder="password"><br><br>
          <input type="submit" name="name" value="Enter">
          <table class="regLog">
            <tr>
              <td onclick='change(1)'>Registration</td>
              <td onclick='change(2)'>Login</td>
            </tr>
          </table>
        </center>
			</div>
      </form>


      <div id="myCarousel" class="carousel slide" data-ride="carousel" 
            style="margin: 10px auto;width:70%;margin-bottom: 100px">
  <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

  <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
              <div class="item active">
                  <img src="img/1_1.jpg" style="height: 500px;width: 100%">
              </div>

              <div class="item">
                <img src="img/1_2.jpg" style="height: 500px;width: 100%">
              </div>

              <div class="item">
                <img src="img/1_3.jpg" style="height: 500px;width: 100%">
              </div>

              <div class="item">
                <img src="img/1_4.jpg" style="height: 500px;width: 100%">
              </div>
          </div>

            <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
      

      <!-- footer -->
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
    <?php
        if(isset($_SESSION['id'])){
     ?>
     <script type="text/javascript">
                    
                    document.getElementById('window').style.display = 'none';
                    document.getElementById('wrap').style.display = 'none';
    </script>
    <?php } ?>

  </body>
</html>
