<?php
include ("Maconnexion.php");

$uneMiseaJour = new Maconnexion("magasindam","","root","localhost");
// vulnerable car il y a pas de sucurite
$uneMiseaJour->miseAJourProduit_Secure($_POST['nom'], $_POST['prix'], $_POST['description'], $_POST['id']);

header('location: interface.php');
//exit();

?>