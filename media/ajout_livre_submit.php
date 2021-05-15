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

// VARIABLES
$titre = $_POST["titre"];
$edition = $_POST["edition"];
$nb_page = $_POST["nb_page"];

$valide_titre = true;

// VERIFICATION SI EXISTE DEJA
ChromePhp::log("VERIFICATION TITRE");
$bdd_titre = $bdd->query("SELECT nomOuvrageLivre FROM ouvragelivre WHERE nomOuvrageLivre LIKE '$titre'");
while($array_titre = $bdd_titre->fetch()) {
	$valide_titre = false;
	ChromePhp::warn("Titre Existant");
}
if ($valide_titre == true) {
	ChromePhp::log("Titre Validé");
}
$bdd_titre->closeCursor();
// -----

if ($valide_titre == false) {
	ChromePhp::log("Affichage : Titre invalide");
	include("_submit_livre_failed.php");
}

// AJOUT DANS LA BDD
if ($valide_titre == true) {
	ChromePhp::log("Ajout dans BDD");
	$req = $bdd->prepare("
		INSERT INTO ouvragelivre(
		nomOuvrageLivre,
		editionOriginaleOuvrageLivre,
		nbPageOuvrageLivre)
		VALUES(
		:titre,
		:edition,
		:nb_page)"
	);
	ChromePhp::log($bdd->errorInfo());

	$req->execute(array(
		"titre" => $titre,
		"edition" => $edition,
		"nb_page" => $nb_page
	)) or die(print_r($req->errorInfo(), TRUE));
	ChromePhp::log("Affichage : Ajout dans BDD validé");
	include("_submit_livre_successful.php");
}

?>