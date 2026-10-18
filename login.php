<?php
/* Auteur: Fatima ezzahra Moumine
 group:2
 Date: 18/10/2026
 */
session_start();

if (isset($_POST['login']) && !empty($_POST['login'])) {
    $login = htmlspecialchars($_POST['login']);
    $_SESSION['login'] = $login;
    
    $data_cookie = [
        "login" => $login,
        "date" => date("Y-m-d H:i:s")
    ];
    setcookie("dernier_login", json_encode($data_cookie), time() + 86400, "/");
    
    header("Location: profil.php");
    exit;
}

if (isset($_SESSION['login'])) {
    header("Location: profil.php");
    exit;
}

$val_login = "";
if (isset($_COOKIE['dernier_login'])) {
    $cookie_data = json_decode($_COOKIE['dernier_login'], true);
    if (is_array($cookie_data) && isset($cookie_data['login'])) {
        $val_login = $cookie_data['login'];
    }
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Login</title></head>
<body>
    <h2>Connexion</h2>
    <form method="POST">
         Login :
        <input type="text" name="login" value="<?= htmlspecialchars($val_login) ?>" required>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>