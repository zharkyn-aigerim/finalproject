<?php
  session_start();
  if(!isset($_SESSION['id']))header("Location: http://localhost/helloRetake/");
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
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
			function change(x) {
        var id=document.getElementById('s-img');
        if(x==1){
          id.innerHTML="<h2 style=\"text-align:center\">Graphics</h2><div id=\"items-block\"><table class=\"table table-inverse\"><thead><tr><th>Day</th><th>Time</th></tr></thead><tbody><tr><th scope=\"row\">Monday</th><td>9:00-18:00</td></tr><tr><th scope=\"row\">Tuesday</th><td>9:00-18:00</td></tr><tr><th scope=\"row\">Wednesday</th><td>9:00-18:00</td></tr><tr><th scope=\"row\">Thursday</th><td>9:00-18:00</td></tr><tr><th scope=\"row\">Friday</th><td>9:00-18:00</td></tr><tr><th scope=\"row\">Saturday</th><td>10:00-16:00</td></tr><tr><th scope=\"row\">Sunday</th><td>10:00-16:00</td></tr></tbody></table>";
        }
        else if(x==2){
          id.innerHTML="<pre>"+"Названиие ТОО: 	   ТОО \"SDU\"\nСот   телефон:     +7 727 307 95 65\nГор. телефон :	   +7 727 307 95 69\ne-mail@-адрес:     info@sdu.edu.kz\nАдрес офиса  :	   Ablayhan st., 1/1, Kaskelen, Almaty,\n                  Kazakhstan, 040900</pre>";
          console.log(id.innerHTML);
        }
        else if(x==3){
            id.innerHTML="<div id=\"mapholder\"></div>";
            lat = 43.208225;
    lon = 76.669580;
    latlon = new google.maps.LatLng(lat, lon)
    mapholder = document.getElementById('mapholder')
    mapholder.style.height = '400px';
    mapholder.style.width = '80%';

    var myOptions = {
    center:latlon,zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP,
    mapTypeControl:false,
    navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
    }
		var contentString="<p>ТОО \"SDU\"</p>";
    var map = new google.maps.Map(document.getElementById("mapholder"), myOptions);
    var marker = new google.maps.Marker({position:latlon,map:map});
		var k=0;
		var infowindow = new google.maps.InfoWindow({
    content: contentString
  });
		infowindow.open(map,marker);
		marker.addListener('click',function () {
				k++;
				if(k%2==0)infowindow.open(map,marker);
				else infowindow.close(map,marker);

		});


        }
        else{
            id.innerHTML="<h2 style=\"text-align:center\">Price &#38; Services</h2><div id=\"items-block\"><table class=\"table table-inverse\"><thead><tr><th>Service</th><th>Price</th></tr></thead><tbody><tr><th scope=\"row\">Glass cleaning</th><td>10$</td></tr><tr><th scope=\"row\">Tire change</th><td>15$</td></tr><tr><th scope=\"row\">Car wash</th><td>50$</td></tr></tbody></table>";
        }
      }
    </script>
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
  <div class="container" style="margin-bottom:100px">

    <div id="slider" class="row">
      <div id="s-nav" class="col-sm-3" style="padding: 0 20px;">
        <ul class="list-group">
            <li class="list-group-item" onclick='change(1)'>Graphics</li>
            <li class="list-group-item" onclick='change(2)'>Contacts</li>
            <li class="list-group-item" onclick='change(3)'>Map</li>
            <li class="list-group-item" onclick='change(4)'>Price &#38; Services</li>
        </ul>
      </div>
      <div id="s-img" class="col-sm-9">

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
    <script type="text/javascript">

    document.getElementById('window').style.display = 'none';
    document.getElementById('wrap').style.display = 'none';
    </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
