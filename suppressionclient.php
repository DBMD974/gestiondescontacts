<?php
include ("Maconnexion.php");

$delete = new Maconnexion("gestiondescontacts", "", "root", "localhost");
// vulnerable car il y a pas de sucurite
$delete->delete($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['entreprise'], $_POST['adresse'], $_POST['ville'], $_POST['code_postal'], $_POST['pays']);

header('location: interface.php');
//exit();

?>