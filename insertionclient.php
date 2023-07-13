<?php
 include "Maconnexion.php" ;

 $uneInsertion = new MaConnexion("gestiondescontacts", "", "root", "localhost");
// vulnerable
 $uneInsertion->insertionProduit_secure($_POST['nom'], $_POST['prix'], $_POST['description'], $_POST['stock']);

 header("Location: interface.php");
 //exit();


 
 ?>