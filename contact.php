<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="../../favicon.ico">
  <link href="bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet">
  <link href="navbar-fixed-top.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />

  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
  <script type="text/javascript">
    var lat = 47.34639;
    var lon = 0.721597;
    var macarte = null;
    function initMap() {
      macarte = L.map('map').setView([lat, lon], 16);
      L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
      }).addTo(macarte);
      var marker = L.marker([lat, lon]).addTo(macarte);
      marker.bindPopup("Lycée Sainte-Marguerite");
    }
    window.onload = function(){
      initMap(); 
    };
  </script>

  <style type="text/css">
    #map{
      height:500px;
      width: 500px;
    }
  </style>

  <title>Contact</title>

  

</head>


<body>
  <?php include("static/navigation_bar.php"); ?>

  <div class="container">

    <div class="jumbotron">

      <h1 id="JQcolor">Contactez-nous</h1>
      <p>Médiathèque en ligne</p>

      <p style = "color :#00b386">Nos équipes Support sont disponibles de 9h à 18h du lundi au vendredi.</p>
      <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Service support 1</a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Service support 2</button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Service support 3</button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">Map</button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2 multiCollapseExample3 multiCollapseExample4">Tout afficher</button>
      </p>

      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
              <p><strong>Service support 1 : </strong><p>
                <p style = "line-height: 9px">Téléphone : 06.42.68.16.68</p>
                <p style = "line-height: 9px">email : 
                  <a href="mailto:thomas.bonneau64@gmail.com">thomas.bonneau64@gmail.com</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body">
                <p><strong>Service support 2 : </strong><p>
                  <p style = "line-height: 9px">Téléphone : 06.12.29.02.55</p>
                  <p style = "line-height: 9px">email : 
                    <a href="mailto:emilieparison09@gmail.com">emilieparison09@gmail.com</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapseExample3">
                <div class="card card-body">
                  <p><strong>Service support 3 : </strong><p>
                    <p style = "line-height: 9px">Téléphone : 07.66.12.00.53</p>
                    <p style = "line-height: 9px">email : 
                      <a href="mailto:aaron.baf@gmail.com">aaron.baf@gmail.com</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample4">
                  <div class="card card-body">
                    <p><strong>Siège social </strong><p>
                      <p style = "line-height: 9px">2 rue, Horizon vert</p>
                      <p style = "line-height: 9px">37170 Chambray-lès-Tours</p>
                          <!--<a href =" https://www.google.fr/maps/place/Lycee+sainte+marguerite/@47.3461495,0.7194182,17z/data=!4m5!3m4!1s0x47fcd6fa5eb820c1:0x4fa67fadf78edd5a!8m2!3d47.3462113!4d0.7213172">
                            <img src = "map.png" style="width:300px;height:250px;"/>
                          </a>-->
                          <div id="map"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

          </body>
          </html>