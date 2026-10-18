<?php  

/*Auteur : Moumine fatima ezzhra
  Groupe : 2
  Date : 17/10/2026
  partie 2

*/
include 'includes/menu_inc.php';
echo"<h1>Partie 2 : Structures de contrôle et boucles</h1>";

echo"<h2>Exercice 2.1 : `if / elseif / else`</h2>";



include "config.php";

function mention($note){
    if ($note >= 16) {
        return "Très bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= SEUIL) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}
echo "9 : " . mention(9) . "<br>";
echo "10 : " . mention(10) . "<br>";
echo "13 : " . mention(13) . "<br>";
echo "15 : " . mention(15) . "<br>";
echo "19 : " . mention(19) . "<br>";

echo"<h2>Exercice 2.2 : `switch`</h2>";

$mois = date("m");

switch ($mois) {
    case "1":
        echo "janvier";
        break;
    case "2":
        echo "fevrier";
        break;
    case "3":
        echo "mars";
        break;
    case "4":
        echo "avril";
        break;
    case "5":
        echo "mai";
        break;
    case "6":
        echo "juin";
        break;
    case "7":
        echo "juillet";
        break;
    case "8":
        echo "aout";
        break;
    case "9":
        echo "septembre";
        break;
    case "10":
        echo "octobre";
        break;
    case "11":
        echo "novembre";
        break;
    case "12":
        echo "decembre";
        break;
    default:
        echo "mois invalide";
}
/* si nous oublion  un `break` dans un `case' 
le programme exécute aussi les cases suivantes*/

echo"<h2>Exercice 2.3 : Boucles</h2>";
for($i=1;$i<6;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo"<br>";

}
echo"<h4>affichage des nombres de 0 à 20 par pas de 2 avec while </h4>";
$i = 0;
while ($i <= 20) {
    if ($i == 10) {
        echo "<b>$i</b><br>";
    } else {
        echo "$i<br>";
    }
    $i += 2;
}
echo"<h4>affichage des nombres paire avec for </h4>";
for($i=1;$i<=10;$i++){
    if($i%2!=0){
        continue;
    }
    echo $i."<br>";

}

echo"<h4>`while`, `switch` et `break</h4>";
$i = 1;
while ($i <= 10) {
    switch ($i) {
        case 5:
            echo "At 5<br>";
            break;
        case 10:
            echo "At 10; quitting<br>";
            break 2;
    }
    $i++;
}





?>