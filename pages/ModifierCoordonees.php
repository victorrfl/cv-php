<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

if(isset ($_POST["modifier"])) {
    $requete = "UPDATE presentation SET nom='" . $_POST['nom'] ."' "
    . ", prenom='" . $_POST['prenom'] . "' "
    . ", age='" . $_POST['age']. "' "
    .", adresse='" . $_POST['adresse']. "'"
    .", ville='" . $_POST['ville'] . "'"
    .", mail='" . $_POST['mail'] . "'"
    .", telephone='" . $_POST['telephone'] . "'"
    .", permis='" . $_POST['permis'] . "'"
    ." WHERE prenom ='" . $_POST['prenomOrigine'] ."'";
    $resultat = mysql_query($requete, $bdd);
    if(!$resultat){
        echo 'erreur dans l execution de la requete</br>';
        echo 'le message d erreur est : ' .mysql_error($bdd);

    }


}

$resultat = mysql_query('SELECT * FROM presentation ORDER BY nom', $bdd);
if($resultat){
    echo "<h1>Modification</h1>\n";
    $nbLigne = mysql_num_rows($resultat);
    echo "<table boder='1'>\n";
    echo "<tr>\n";
    echo "<td><strong>Nom</strong></td>\n";
    echo "<td><strong>Prenom</strong></td>\n";
    echo "<td><strong>Age</strong></td>\n";
    echo "<td><strong>Adresse</strong></td>\n";
    echo "<td><strong>Ville</strong></td>\n";
    echo "<td><strong>Mail</strong></td>\n";
    echo "<td><strong>Telephone</strong></td>\n";
    echo "<td><strong>Permis</strong>/td>\n";
    echo "<td></td>\n";
    echo "</tr>\n";
    while($presentation = mysql_fetch_array($resultat)){
        echo "<tr>\n";
        echo "<td>" . $presentation['nom'] . "</td>\n";
        echo "<td>" . $presentation['prenom'] . "</td>\n";
        echo "<td>" . $presentation['age'] . "</td>\n";
        echo "<td>" . $presentation['adresse'] . "</td>\n";
        echo "<td>" . $presentation['ville'] . "</td>\n";
        echo "<td>" . $presentation['mail'] . "</td>\n";
        echo "<td>" . $presentation['telephone'] . "</td>\n";
        echo "<td>" . $presentation['permis'] . "</td>\n";
        echo "<td><a href=pages/ModificationCoordonees.php" .$presentation['nom'] . "'>modifier</a></td>\n";
        echo "</tr>\n";
    }
    echo "</table>\n";
}else{
    echo "erreur dans l execution de la requete</br>";
    echo "le message d erreur est : " . mysql_error($bdd);
}


?>
