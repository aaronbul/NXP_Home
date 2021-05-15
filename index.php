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

  <title>Accueil - NXP Home</title>


</head>


<body>
  <?php include("static/navigation_bar.php"); ?>

  <div class="container">

    <div class="jumbotron">

      <h1 id="JQcolor">NXP Home</h1>
      <p>Médiathèque en ligne</p>
      <hr class="my-4">
      <p></p>

      <h2>Nos médias</h2>
      <!-- CAROUSEL 1-->
      <div id="carousel_video" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel_video" data-slide-to="0" class="active"></li>
          <li data-target="#carousel_video" data-slide-to="1"></li>
          <li data-target="#carousel_video" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/test_video_1.png" alt="" style="width:100%;">
          </div>

          <div class="item">
            <img src="img/test_video_2.png" alt="" style="width:100%;">
          </div>

          <div class="item">
            <img src="img/test_video_3.png" alt="" style="width:100%;">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#carousel_video" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel_video" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <hr class="my-4">

      <!-- CAROUSEL 2-->
      <div id="carousel_audio" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel_audio" data-slide-to="0" class="active"></li>
          <li data-target="#carousel_audio" data-slide-to="1"></li>
          <li data-target="#carousel_audio" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/test_audio_1.png" alt="" style="width:100%;">
          </div>

          <div class="item">
            <img src="img/test_audio_2.png" alt="" style="width:100%;">
          </div>

          <div class="item">
            <img src="img/test_audio_3.png" alt="" style="width:100%;">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#carousel_audio" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel_audio" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <hr class="my-4">

      <!-- CAROUSEL 3-->
      <div id="carousel_livre" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel_livre" data-slide-to="0" class="active"></li>
          <li data-target="#carousel_livre" data-slide-to="1"></li>
          <li data-target="#carousel_livre" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/test_livre_1.png" alt="" style="width:100%;">
          </div>

          <div class="item">
            <img src="img/test_livre_2.png" alt="" style="width:100%;">
          </div>

          <div class="item">
            <img src="img/test_livre_3.png" alt="" style="width:100%;">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#carousel_livre" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel_livre" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

</body>
</html>
