<?php
/* Auteur: Fatima ezzahra Moumine
 group:2
 Date: 18/10/2026
 */

require_once 'config.php';
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

$fichier = 'data/notes.csv';
echo "<h2>Liste des notes des apprenants</h2>";

// 1. Vérifier l'existence du fichier
if (file_exists($fichier)) {
    
    // 2. Ouvrir en lecture ('r')
    $file = fopen($fichier, 'r');
    
    if ($file) {
        echo "<table border='1'>";
        echo "<tr><th>Nom</th><th>Info</th><th>Math</th><th>Moyenne</th><th>Mention</th></tr>";
        
        $somme_generale = 0;
        $nb_etudiants = 0;
        // 3. Lire avec fgetcsv (Séparateur ';')
        while (($data = fgetcsv($file, 1000, ';')) !== false) {
            if (count($data) >= 3) {
                $nom = htmlspecialchars($data[0]);
                $note_info = (float)$data[1];
                $note_math = (float)$data[2];
                $moyenne = ($note_info + $note_math) / 2;
                $somme_generale += $moyenne;
                $nb_etudiants++;
                if ($moyenne >= 16) $mention = "Très bien";
                elseif ($moyenne >= 14) $mention = "Bien";
                elseif ($moyenne >= 12) $mention = "Assez bien";
                elseif ($moyenne >= SEUIL) $mention = "Passable";
                else $mention = "Ajourné";

                echo "<tr>";
                echo "<td>$nom</td>";
                echo "<td>$note_info</td>";
                echo "<td>$note_math</td>";
                echo "<td>" . round($moyenne, 2) . "</td>";
                echo "<td>$mention</td>";
                echo "</tr>";
            }
        }
        
        fclose($file);
        echo "</table>";

        if ($nb_etudiants > 0) {
            $moyenne_classe = $somme_generale / $nb_etudiants;
            echo "<h3>Moyenne generale de la classe : " . round($moyenne_classe, 2) . " / 20</h3>";
        }
        
    } else {
        echo "<p style='color: red;'>Erreur : Impossible d'ouvrir le fichier.</p>";
        exit; 
    }
} else {
    echo "<p>Le fichier n'existe pas encore.</p>";
}

require_once 'includes/pied_inc.php';

/*q2 Exercice 6.3 : Dates*/

$date_fin = new DateTime("2026-12-31"); 
$date_aujourdhui = new DateTime(); 
$interval = $date_aujourdhui->diff($date_fin);
echo "<p>Il reste " . $interval->format('%a') . " jours avant la fin du semestre.</p>";


if (checkdate(2, 31, 2026)) {
    echo "<p>Date valide</p>";
} else {
    echo "<p>Date invalide</p>";
}

?>