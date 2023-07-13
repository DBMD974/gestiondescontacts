<?php
// Paramètres de connexion à la base de données
$dsn = 'mysql:host=nom_hote;dbname=nom_base_de_donnees';
$username = 'root';
$password = ' ';

try {
    // Connexion à la base de données
    $dbh = new PDO($dsn, $username, $password);

    // Préparation de la requête SELECT
    $query = 'SELECT * FROM nom_table';
    $stmt = $dbh->prepare($query);

    // Exécution de la requête
    $stmt->execute();

    // Récupération des résultats
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Parcours des résultats
    foreach ($results as $row) {
        // Utilisation des données
        echo $row['colonne1'] . ' - ' . $row['colonne2'] . '<br>';
    }

} catch (PDOException $e) {
    // Gestion des erreurs de connexion ou d'exécution de requête
    echo 'Erreur : ' . $e->getMessage();
}
?>