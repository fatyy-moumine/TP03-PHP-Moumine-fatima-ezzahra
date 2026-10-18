<?php
/*Auteur: Fatima ezzahra Moumine
group:2
Date: 18/10/2026
partie 4
*/
require_once 'config.php';

if (isset($_POST['nom']) && isset($_POST['note_info']) && isset($_POST['note_math'])) {
    
    if (!empty($_POST['nom']) && $_POST['note_info'] !== '' && $_POST['note_math'] !== '') {
        
        $nom = htmlspecialchars($_POST['nom']);
        $note_info = (float)$_POST['note_info'];
        $note_math = (float)$_POST['note_math'];

        if ($note_info >= NOTE_MIN && $note_info <= NOTE_MAX && 
            $note_math >= NOTE_MIN && $note_math <= NOTE_MAX) {
            
            
            echo "<h2>Récapitulatif</h2>";
            echo "<p>Nom : <strong>$nom</strong></p>";
            echo "<p>Note Info : $note_info / 20</p>";
            echo "<p>Note Math : $note_math / 20</p>";
            echo "<p style='color: green;'>Tout est valide !</p>";
            
        } else {
            echo "<h2>Erreur</h2>";
            echo "<p>Les notes doivent être comprises entre " . NOTE_MIN . " et " . NOTE_MAX . ".</p>";
        }
    } else {
        echo "<h2>Erreur</h2>";
        echo "<p>Veuillez remplir tous les champs (ils ne doivent pas être vides).</p>";
    }
} else {
    echo "<h2>Erreur</h2>";
    echo "<p>Les champs n'existent pas. Veuillez utiliser le formulaire.</p>";
}
/*GET affiche les donnees dans l'url par contre POST 
les cache es donnees .
 */
/*Partie 5 : Fichiers CSV et JSON
*/
/*Exercice 5.1 : Écriture dans un fichier CSV */

$fichier = 'data/notes.csv';
$f = fopen($fichier, 'a');
if ($f) {
    fputcsv($f, [$nom, $note_info, $note_math], ';');
    fclose($f);
    echo "<p>Les données ont été ajoutées au fichier CSV.</p>";
} else {
    echo "<p>Erreur : impossible d'ouvrir le fichier.</p>";

}
/* que se passerait-il avec le mode `"w"` au lieu de `"a"` ?
Le mode "a" permet d'ajouter les  donnees 
a la fin du fichier sans effacer les anciennes par contre
mode "w" ecrase le fichier*/

?>