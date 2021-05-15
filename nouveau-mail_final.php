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
$mail = $_POST["mail"];
$valide_email = true;

$req = $bdd->prepare("
	SELECT
	idUtilisateur,
	adresseMailUtilisateur
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
// Email
ChromePhp::log("VERIFICATION EMAIL");
$bdd_email = $bdd -> query("SELECT adresseMailUtilisateur FROM utilisateur WHERE adresseMailUtilisateur LIKE '$mail'");
while($array_email = $bdd_email -> fetch()) {
	$valide_email = false;
	ChromePhp::warn("Email Existante");
}
if ($valide_email == true) {
	ChromePhp::log("Email Valide");
}
$bdd_email -> closeCursor();
// -----

// UPDATE DATABASE
if (!$resultat) 
{
	include("_nouveau-mail_failed.php");
}
else
{
	if ($valide_email == true) 
	{
		$req = $bdd->prepare("
			UPDATE utilisateur
			SET adresseMailUtilisateur = :new_mail
			WHERE idUtilisateur = :id_user
		");
		ChromePhp::log($bdd->errorInfo());

		$req->execute(array(
			"new_mail" => $mail,
			"id_user" => $_SESSION["id"]
		));

		ChromePhp::log("Modification ok");
		$_SESSION["email"] = $mail;
		echo "<script>window.location = 'profil.php'</script>";
	}
	else
	{
		include("_nouveau-mail_failed.php");
	}
}
	
?>