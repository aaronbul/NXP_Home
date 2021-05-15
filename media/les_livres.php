<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="../../favicon.ico">
  <link href="../bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet">
  <link href="../navbar-fixed-top.css" rel="stylesheet">

  <title>Les livres - NXP Home</title>

</head>


<body>
  <?php include("../static/navigation_bar.php"); ?>

  <div class="container-fluid">
    <div class="jumbotron">
      <div class="row">

        <h3>Livres</h3>

        <div class="tabbable">

          <div class="nav col-md-3" style="overflow-y:scroll; height:68vh">
            <a href="#exemple" class="list-group-item" data-toggle="tab">Exemple</a>

            <?php
            include("../chromephp-master/ChromePhp.php"); 
            ChromePhp::log('Hello console!');

            // Connexion à la BDD
            try {
              ChromePhp::log("Connexion BDD");
              $bdd = new PDO('mysql:host=localhost;dbname=nxp_home;charset=utf8', 'root', '');
            }
            catch (Excpetion $e) {
              die("Erreur : " . $e -> getMessage());
              ChromePhp::log("Connexion BDD : error");
            }

            $bdd_livres = $bdd->query("SELECT idOuvrageLivre, nomOuvrageLivre FROM ouvragelivre ORDER BY nomOuvrageLivre");

            if ($bdd_livres->rowCount() > 0) {
              while($row = $bdd_livres->fetch()) {
                echo '<a href="#'.$row["idOuvrageLivre"].'" class="list-group-item" data-toggle="tab">'.$row["nomOuvrageLivre"].'</a>';
              }
            }
            else {
              echo "0";
            }
            $bdd_livres->closeCursor();
            ?>
          </div>

          <div class="jumbotron tab-content col-md-9" style="overflow-y:scroll; height:68vh; background-color:white">
            <div class="tab-pane" id="exemple">
            	<h3>Titre Livre</h3>
            	<br>
            	<b><u>Edition</u> : </b>édition
            	<br>
            	<b><u>Page</u> : </b>0
            	<br><br>
            	<button type="submit" class="btn btn-primary">Ajouter à mes livres</button>


            </div>

            <?php
            $bdd_videos = $bdd->query("SELECT idOuvrageLivre, nomOuvrageLivre, editionOriginaleOuvrageLivre, nbPageOuvrageLivre FROM ouvragelivre");

            if ($bdd_videos->rowCount() > 0) {
              while($row = $bdd_videos->fetch()) {
                echo '
                <div class="tab-pane" id="'.$row["idOuvrageLivre"].'">'
	                .'<h3>'.$row["nomOuvrageLivre"].'</h3><br>'	                
	                .'<b><u>Edition</u> : </b>'.$row["editionOriginaleOuvrageLivre"].'<br>'
	                .'<b><u>Pages</u> : </b>'.$row["nbPageOuvrageLivre"].'<br><br>'
	                .'<button type="submit" class="btn btn-primary">Ajouter à mes livres</button>'
                .'</div>';
              }
            }
            else {
              echo "0";
            }
            $bdd_videos->closeCursor();
            ?>


          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

</body>
</html>
