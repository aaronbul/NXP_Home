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
  <link href="style_form.css" rel="stylesheet">

  <title>Connexion - NXP Home</title>


</head>


<body>

  <?php include("static/navigation_bar.php"); ?>

  <div class="container">

    <div class="jumbotron">
      <h1 id="JQcolor">Connexion</h1>
      <p>Médiathèque en ligne</p>
      <hr class="my-4">

      <form method="post" action="connexion_finale.php">


          <div class="form-group">
            <label>Identifiant *</label>
            <input type="text" class="form-control" placeholder="Identifiant" name="pseudo" required="true">
          </div>
        

        
          <div class="form-group">
            <label>Mot de passe *</label>
            <input type="password" class="form-control" placeholder="Mot de passe" name="password" required="true">
          </div>
        

        <button type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>

      </form>

    </div>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

</body>
</html>
