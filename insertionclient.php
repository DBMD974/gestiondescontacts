<?php
 include "Maconnexion.php" ;

 $uneInsertion = new MaConnexion("gestiondescontacts", "", "root", "localhost");
// vulnerable
 $uneInsertion->insertionProduit_secure($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['entreprise'], $_POST['adresse'], $_POST['ville'], $_POST['code_postal'], $_POST['pays']);

 header("Location: interface.php");
 //exit();


 
 ?>