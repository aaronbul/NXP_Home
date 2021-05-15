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
$titre_vo = $_POST["titre_vo"];
$lang = $_POST["lang"];
$date_fr = $_POST["date_fr"];
$date_vo = $_POST["date_vo"];
$duree = $_POST["duree"];
$resume = $_POST["resume"];

$valide_titre = true;
$valide_titre_vo = true;

// VERIFICATION SI EXISTE DEJA
// Titre
ChromePhp::log("VERIFICATION TITRE");
$bdd_titre = $bdd->query("SELECT titreOeuvreVideo FROM oeuvrevideo WHERE titreOeuvreVideo LIKE '$titre'");
while($array_titre = $bdd_titre->fetch()) {
	$valide_titre = false;
	ChromePhp::warn("Titre Existant");
}
if ($valide_titre == true) {
	ChromePhp::log("Titre Validé");
}
$bdd_titre->closeCursor();
// -----


// Titre VO
ChromePhp::log("VERIFICATION TITRE VO");
$bdd_titre_vo = $bdd->query("SELECT titreVOOeuvreVideo FROM oeuvrevideo WHERE titreVOOeuvreVideo LIKE '$titre_vo'");
while($array_titre_vo = $bdd_titre_vo->fetch()) {
	$valide_titre_vo = false;
	ChromePhp::warn("Titre VO Existant");
}
if ($valide_titre_vo == true) {
	ChromePhp::log("Titre VO Validé");
}
$bdd_titre_vo->closeCursor();
// -----


if ($valide_titre == false OR $valide_titre_vo == false) {
	ChromePhp::log("Affichage : Titre invalide ET/OU Titre original invalide");
	include("_submit_video_failed.php");
}


// AJOUT DANS LA BDD
ChromePhp::log($titre);
ChromePhp::log($titre_vo);
ChromePhp::log($lang);
ChromePhp::log($date_fr);
ChromePhp::log($date_vo);
ChromePhp::log($duree);
ChromePhp::log($resume);
//$duree = "duree";

if ($valide_titre == true AND $valide_titre_vo == true) {
	ChromePhp::log("Ajout dans BDD");
	$req = $bdd->prepare("
		INSERT INTO oeuvrevideo(
		titreOeuvreVideo,
		titreVOOeuvreVideo,
		resumeOeuvreVideo,
		langueOeuvreVideo,
		dureeOeuvreVideo,
		dateSortieVOOeuvreVideo,
		dateSortieFROeuvreVideo)
		VALUES(
		:titre,
		:titre_vo,
		:resume,
		:lang,
		:duree,
		:date_vo,
		:date_fr)"
	);
	ChromePhp::log($bdd->errorInfo());

	$req->execute(array(
		"titre" => $titre,
		"titre_vo" => $titre_vo,
		"resume" => $resume,
		"lang" => $lang,
		"duree" => $duree,
		"date_vo" => $date_vo,
		"date_fr" => $date_fr
	)) or die(print_r($req->errorInfo(), TRUE));
	ChromePhp::log("Affichage : Ajout dans BDD validé");
	include("_submit_video_successful.php");
}

?>