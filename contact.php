<?php include ('Maconnexion.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Des Contacts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<br>
<header>
  <nav>
    <div class="logo">
      <img src="img/mon logo.png" alt="Logo">
    </div>
    <div class="links">
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Contacts</a></li>
      </ul>
    </div>
    <div class="button">
      <a href="#" class="btn">Mon bouton</a>
    </div>
  </nav>
</header>

<section>
<table>
  <thead>
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Email</th>
      <th>Téléphone</th>
      <th>Entreprise</th>
      <th>Adresse</th>
      <th>Ville</th>
      <th>Code Postal</th>
      <th>Pays</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
              <td><?php echo $row['nom']; ?></td>
              <td><?php echo $row['prenom']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['telephone']; ?></td>
              <td><?php echo $row['entreprise']; ?></td>
              <td><?php echo $row['adresse']; ?></td>
              <td><?php echo $row['ville']; ?></td>
              <td><?php echo $row['code_postal']; ?></td>
              <td><?php echo $row['pays']; ?></td>
            </tr>
        <?php }
    } else {
        echo "<tr><td colspan='9'>Aucun contact trouvé.</td></tr>";
    } ?>
  </tbody>
</table>

<?php
// Fermeture de la connexion à la base de données
$conn->close();
?>
</section>


    
























<br>

<footer>
  <div class="container">
    <p>&copy; 2023 Nom de votre entreprise. Tous droits réservés.</p>
    <ul>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">À propos</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
</footer>



<script src="script.js"></script>
</body>
</html>