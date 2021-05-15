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
  <!-- <link href="navbar-fixed-top.css" rel="stylesheet"> -->
  <link href="style_form.css" rel="stylesheet">

  <title>Inscription - NXP Home</title>


</head>


<body>

  <?php include("static/navigation_bar.php"); ?>

  <div class="container">

    <div class="jumbotron">
      <h1 id="JQcolor">Inscription</h1>
      <p>Médiathèque en ligne</p>
      <hr class="my-4">

      <!-- DEBUT FORMULAIRE INSCRIPTION -->
      <form method="post" action="inscription_finale.php">

        <!-- Identifiant / Email -->
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Identifiant *</label>
            <input type="text" class="form-control" placeholder="Identifiant" name="pseudo" required="true">
          </div>
          <div class="form-group col-md-6">
            <label>Email *</label>
            <input type="email" class="form-control" placeholder="Email" name="email" required="true">
          </div>
        </div>

        <!-- Mot de passe / Confirmation mot de passe -->
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Mot de passe *</label>
            <input type="password" class="form-control" placeholder="Mot de passe" name="password" required="true">
          </div>

          <div class="form-group col-md-6">
            <label>Confirmer le mot de passe *</label>
            <input type="password" class="form-control" placeholder="Confirmer le mot de passe" name="confirm_password" required="true">
          </div>
        </div>

        <!-- Nom / Prenom / Date de naissance / Civilité -->
        <div class="form-row">
          <div class="form-group col-md-3">
            <label>Prénom *</label>
            <input type="text" class="form-control" placeholder="Prénom" name="prenom" required="true">
          </div>

          <div class="form-group col-md-3">
            <label>Nom *</label>
            <input type="text" class="form-control" placeholder="Nom" name="nom" required="true">
          </div>

          <div class="form-group col-md-3">
            <label>Date de naissance *</label>
            <input type="date" class="form-control" placeholder="Date de naissance" name="ddn" required="true">
          </div>

          <div class="form-group col-md-3">
            <!--
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" name="customRadioInline1">
              <label>1</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" name="customRadioInline1">
              <label>2</label>
            </div>
          -->
          <label>Civilité *</label>
          <select class="form-control" name="civilite" required="true">
            <option value="ND" selected="">Non-définie</option>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
          </select>
        </div>

      </div>

      <!-- Adresse / Ville / Code postal -->
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Adresse *</label>
          <input type="text" class="form-control" placeholder="Adresse" name="adresse" required="true">
        </div>

        <div class="form-group col-md-4">
          <label>Ville *</label>
          <input type="text" class="form-control" placeholder="Ville" name="ville" required="true">
        </div>

        <div class="form-group col-md-2">
          <label>Code postal *</label>
          <input type="number" class="form-control" placeholder="Code postal" name="code_postal" required="true" min="10000" max="9999999">
        </div>      
      </div>

      <button type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>

    </form>

  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

</body>
</html>
