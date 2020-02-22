<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$resultat = mysql_query('SELECT * FROM presentation WHERE nom="' .$_GET['nom'] . "'", $bdd);
if($resultat){
    echo "<h1>Modifier</h1>";
    $presentation = mysql_fetch_array($resultat);
    echo "<form action='pages/ModifierCoordonees.php' method='post'";
    echo "<table border='1'\n";
    echo "<tr>\n";
    echo "<td><strong>Nom</strong></td>\n";
    echo "<td><input type='text' name='nom' value='" .$presentation['nom'] . "' /></td>\n";
    echo "</tr>\n";    echo "<tr>\n";
    echo "<td><strong>Nom</strong></td>\n";
    echo "<td><input type='text' name='prenom' value='" .$presentation['prenom'] . "' /></td>\n";
    echo "</tr>\n";    echo "<tr>\n";
    echo "<td><strong>Nom</strong></td>\n";
    echo "<td><input type='number' name='age' value='" .$presentation['age'] . "' /></td>\n";
    echo "</tr>\n";    echo "<tr>\n";
    echo "<td><strong>Nom</strong></td>\n";
    echo "<td><input type='text' name='adresse' value='" .$presentation['adresse'] . "' /></td>\n";
    echo "</tr>\n";    echo "<tr>\n";
    echo "<td><strong>Nom</strong></td>\n";
    echo "<td><input type='text' name='ville' value='" .$presentation['ville'] . "' /></td>\n";
    echo "</tr>\n";    echo "<tr>\n";
    echo "<td><strong>Nom</strong></td>\n";
    echo "<td><input type='text' name='mail' value='" .$presentation['mail'] . "' /></td>\n";
    echo "</tr>\n";    echo "<tr>\n";
    echo "<td><strong>Nom</strong></td>\n";
    echo "<td><input type='text' name='telephone' value='" .$presentation['telephone'] . "' /></td>\n";
    echo "</tr>\n";    echo "<tr>\n";
    echo "<td><strong>Nom</strong></td>\n";
    echo "<td><input type='text' name='permis' value='" .$presentation['permis'] . "' /></td>\n";
    echo "</tr>\n";
    echo "</table>";
    echo "</br>\n";
    echo "<input type='hiden' name='nomOrigine' value='" . $_GET['nom'] . "' />\n";
    echo "</form>";
    }else{
        echo "erreur dans l execution de la requete</br>";
        echo "le message d erreur est :" . mysql_error($bdd);
    } 











?>