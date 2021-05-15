

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

  <title>Profil - NXP Home</title>


</head>


<body>

  <?php include("static/navigation_bar.php"); ?>

  <div class="container">

    <div class="jumbotron">
      <h1 id="JQcolor">Profil</h1>
      <p>Médiathèque en ligne</p>
      <hr class="my-4">
      <?php 
        if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
        {
          ?>
            <ul class="list-group">
              <li class="list-group-item"><b>Pseudo : </b> <?php echo $_SESSION["pseudo"]; ?> <a href="nouveau-pseudo.php">Modifier</a></li>
              <li class="list-group-item"><b>Email : </b> <?php echo $_SESSION["email"]; ?> <a href="nouveau-mail.php">Modifier</a></li>
              <li class="list-group-item"><b>Mot de passe : </b> <a href="nouveau-mot-de-passe.php">Modifier</a></li>
              <li class="list-group-item"><b>Nom : </b> <?php echo $_SESSION["nom"]; ?></li>
              <li class="list-group-item"><b>Prénom : </b> <?php echo $_SESSION["prenom"]; ?></li>
              <li class="list-group-item"><b>Date de naissance : </b> <?php echo $_SESSION["ddn"]; ?></li>
              <li class="list-group-item"><b>Adresse : </b> <?php echo $_SESSION["adresse"]; ?> <a href="nouvelle-adresse.php">Modifier</a></li>
              <li class="list-group-item"><b>Code postal : </b> <?php echo $_SESSION["code_postal"]; ?> <a href="nouveau-code-postal.php">Modifier</a></li>
              <li class="list-group-item"><b>Ville : </b> <?php echo $_SESSION["ville"]; ?> <a href="nouvelle-ville.php">Modifier</a></li>
              <li class="list-group-item"><b>Civilité : </b> <?php echo $_SESSION["civilite"]; ?></li>
            </ul>
          <?php
        }
        else 
        {
          echo "<script>window.location = 'connexion.php'</script>";
        }
      ?>
      

    </div>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

</body>
</html>
