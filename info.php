<?php
/* Auteur: Fatima ezzahra Moumine
groupe:2
Date: 18/10/2026
*/

if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['sexe'])) {
    $nom = htmlspecialchars($_GET['nom']);
    $prenom = htmlspecialchars($_GET['prenom']);
    $sexe = $_GET['sexe'];
    if ($sexe === 'M') {
        $titre = 'Monsieur';
    } else {
        $titre = 'Madame';
    }
    echo "<h2>Bonjour $titre $prenom $nom</h2>";
} else {
    echo "<h2>Erreur : Veuillez remplir le formulaire.</h2>";
}
?>

<br>
<a href="info.html">Retour au formulaire</a>