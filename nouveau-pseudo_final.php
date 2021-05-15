<?php
session_start();

include("chromephp-master/ChromePhp.php"); 
ChromePhp::log('Hello console!');

// Connexion à la BDD
try {
	ChromePhp::log("Connexion BDD");
	$bdd = new PDO('mysql:host=localhost;dbname=nxp_home;charset=utf8', 'root', '');
}
catch (Excpetion $e) {
	die("Erreur : " . $e -> getMessage());
}

// VARIABLES
$pseudo = $_POST["pseudo"];
$valide_pseudo = true;

$req = $bdd->prepare("
	SELECT
	idUtilisateur,
	identifiantUtilisateur
	FROM utilisateur
	WHERE
	idUtilisateur = :id_user
");

$req->execute(array(
	"id_user" => $_SESSION["id"]
));

$resultat = $req->fetch();
ChromePhp::log($resultat);

// VERIFICATION SI EXISTE DEJA :
// Pseudo
ChromePhp::log("VERIFICATION PSEUDO");
$bdd_pseudo = $bdd -> query("SELECT identifiantUtilisateur FROM utilisateur WHERE identifiantUtilisateur LIKE '$pseudo'");
while($array_pseudo = $bdd_pseudo -> fetch()) {
	$valide_pseudo = false;
	ChromePhp::warn("Pseudo existant");
}
if ($valide_pseudo == true) {
	ChromePhp::log("Pseudo valide");
}
$bdd_pseudo -> closeCursor();
// -----

// UPDATE DATABASE
if (!$resultat) 
{
	include("_nouveau-pseudo_failed.php");
}
else
{
	if ($valide_pseudo == true) 
	{
		$req = $bdd->prepare("
			UPDATE utilisateur
			SET identifiantUtilisateur = :new_pseudo
			WHERE idUtilisateur = :id_user
		");
		ChromePhp::log($bdd->errorInfo());

		$req->execute(array(
			"new_pseudo" => $pseudo,
			"id_user" => $_SESSION["id"]
		));

		ChromePhp::log("Modification ok");
		$_SESSION["pseudo"] = $pseudo;
		echo "<script>window.location = 'profil.php'</script>";
	}
	else
	{
		include("_nouveau-pseudo_failed.php");
	}
}
	
?>