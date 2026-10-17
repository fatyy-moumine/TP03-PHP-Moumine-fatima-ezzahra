<?php
/*Auteur : Moumine fatima ezzhra
  Groupe : 2
  Date : 17/10/2026

*/


echo"hello world";
//voici un commentaire sur une seul ligne//
#voici un commetaire
/*commentaire 1
commentaire 2
commentaire 3

*/
echo"<h1>Partie 1 : Variables, constantes, types et chaînes</h1>";


echo"<h2>Exercice 1.1 : Noms de variables</h2>";
echo'les noms valide: $x, $_x , $Prix_HT , $état <br>';
$x=2;
$_x=4;
$Prix_HT=100;
$état="normal";
/*l'affichage */
echo 'la variable $x ='.$x."<br>";
echo 'la variable $_x ='.$_x."<br>";
echo 'la variable $Prix_HT ='.$Prix_HT."<br>";
echo 'la variable $état='.$état."<br>";

$a=10;
$A=2;
echo 'la variable $a='.$a."<br>";
echo 'la variable $A='.$A."<br>";
/*php est sensible a la case */

echo"<h2>Exercice 1.2 : Constantes</h2>";
require'config.php';
echo"etablissement:".ETABLISSEMENT."<br>";
echo"note minimale:".NOTE_MIN."<br>";
echo"note maximale:".NOTE_MAX."<br>";
echo var_dump(defined("SEUIL"))."<br>";
echo var_dump(defined("INCONNUE"))."<br>";
/* quand on affichez la constante 'INCONNUE' la 
resultat est 'bool(false)' car la constante 'INCONNUE'
est non definie */
/* la différence entre const et define()


*/


echo"<h2>Exercice 1.3 : Calcul</h2>";
$prix_ht = 60;
$tva = 20;
$prix_TTC=$prix_ht*(1+$tva/100);
echo"Le prix TTC du produit est de:".$prix_TTC." €";


echo"<h2>Exercice 1.4 : Types et conversions</h2>";
//Question1//
$test = 42;
$test=(string)$test;
echo'la convertion de $test en string:'." ";
echo var_dump($test);
//Question2//
$v1=0;
$v2=0.0;
$v3="0";
$v4="";
$v5="abc";
$v6=[];
$v7=null;
echo"<br> la convertion de 0 en bool : ";
echo var_dump((bool)$v1)."<br> ";

echo"la convertion de 0,0 en bool: ";
echo var_dump((bool)$v2)."<br> ";

echo"la convertion de '0'en bool: " ;
echo var_dump((bool)$v3)."<br> ";

echo"la convertion de ' ' en bool: ";
echo var_dump((bool)$v4)."<br> ";

echo"la convertion de 'abc' en bool: ";
echo var_dump((bool)$v5)."<br> ";

echo"la convertion de [] en bool: ";
echo var_dump((bool)$v6)."<br> ";

echo"la convertion de null en bool: ";
echo var_dump((bool)$v7)."<br> ";

//Question3//
echo "(int) 3.9: ".(int) 3.9."<br>";
echo "(int) '12abc': ".(int) "12abc"."<br>";
echo "(float) '1.5e3;: ".(float) "1.5e3"."<br>";
echo "(int) true: ".(int) true;

echo"<h2>Exercice 1.5 : Chaînes de caractères</h2>";
$traitees = "égales à";
$ici = 2;
$traitees = "égales à";
$ici = 2;

echo '1.Ahmed a dit : "J\'ai réussi"';
echo "<br>";

echo '2.Voulez-vous supprimer C:\*.*?';
echo "<br>";

echo '3.Ceci n\'affichera pas \n de nouvelle ligne';
echo "<br>";

echo '4.Les variables ne seront pas $traitees $ici';
echo "<br>";

echo "5.Les variables seront $traitees $ici";
echo "<br>";

echo"<h4>affichge du chaine sans et avec trim</h4>";
$ch="*Bonjour les developpeurs*";
echo "affichage  du chaine sans trim:$ch <br>";
$ch=trim($ch,"*");
echo "affichage  du chaine avec trim:$ch <br>";

echo"<h4> affiche du chaine avec strlen et for </h4>";
for ($i = 0; $i < strlen($ch); $i++) {
    echo $ch[$i]."<br>";
}








?>