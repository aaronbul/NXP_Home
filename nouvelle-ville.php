<?php
session_start();
?>

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

    <title>Modifier ville - NXP Home</title>


  </head>
  <body>
    <div class="container">

      <div class="jumbotron">

        <h1 id="JQcolor"><button type="button" class="btn btn-primary" onclick="back()"><</button> Changer de ville :</h1>
        <hr class="my-4">
        <?php
        if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
        {
          ?>
            <form method="post" action="nouvelle-ville_finale.php">

              <div class="form-group">
                <label>Nouvelle ville</label>
                <input type="text" class="form-control" placeholder="Nouvelle ville" name="ville" required="true">
              </div>
              <br>
              <button type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>

            </form>
          <?php
        }
        else
        {
          ChromePhp::log("Aucune connexion");
          echo "<script>window.location = 'connexion.php'</script>";
        }
        ?>
        
        <p></p>

      </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <script>
      function back() {
      window.history.back();
      }
    </script>

  </body>
</html>
