<?php
include ("Maconnexion.php");

$delete = new Maconnexion("gestiondescontacts","","root","localhost");
// vulnerable car il y a pas de sucurite
$delete->delete($_POST['nom'], $_POST['prix'], $_POST['description'], $_POST['id']);

header('location: interface.php');
//exit();

?>