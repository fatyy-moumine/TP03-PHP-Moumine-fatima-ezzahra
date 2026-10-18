<?php
/* Auteur: Fatima ezzahra Moumine
 group:2
 Date: 18/10/2026
 */
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Profil</title></head>
<body>
    <h2>Profil</h2>
    <p>Bonjour <?= htmlspecialchars($_SESSION['login']) ?> !</p>
    <a href="deconnexion.php">Se déconnecter</a>
</body>
</html>