<?php
include ("Maconnexion.php");

$uneMiseaJour = new Maconnexion("gestiondescontacts", "", "root", "localhost");
// vulnerable car il y a pas de sucurite
$uneMiseaJour->miseAJourProduit_Secure($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['entreprise'], $_POST['adresse'], $_POST['ville'], $_POST['code_postal'], $_POST['pays']);

header('location: interface.php');
//exit();

?>