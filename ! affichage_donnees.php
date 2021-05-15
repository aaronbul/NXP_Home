<?php
// Connexion à la BDD
try {
	$bdd = new PDO('mysql:host=localhost;dbname=nxp_test;charset=utf8', 'root', '');
}
catch (Excpetion $e) {
	die("Erreur : " . $e -> getMessage());
}

// Selection des données
$reponse = $bdd -> query("SELECT pseudo FROM nxp");

// Affichage des données organisé
while($donnees = $reponse -> fetch()) {
?>
	<p>
	<strong>Pseudo : </strong><?php echo $donnees["pseudo"]; ?> <br>
	<strong>Email : </strong><?php //echo $donnees["email"]; ?> <br>
	</p>
<?php
}

// Ferme la requête, pour ne pas avoir de problème à la prochaine
$reponse -> closeCursor();
?>