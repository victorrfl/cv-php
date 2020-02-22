<?php  

require 'includes/dataAdmin.php';

function getTitleA($page){
   global $pagesTitles;
   return $pagesTitles[$page];
}

function getBodyA($page){
    include "pages/$page.php";
    //return "getBody : $page";
}

function getFooterA($page){
    include 'partials/footer.php';
    //return "getFooter : $page";
}

function getPagesA(){
    global $pagesTitles;
    return array_keys($pagesTitles);   
}

function getMultipleArrayA($elements, $class){
    $ret = ""; 
    $ret.= "<div class='$class'>";
    foreach($elements as $element){
        $ret.= "<ul class='$class'>";
        foreach($element as $k => $v){
            $ret.= "<li>";
           $ret.= "<span class='marray_label'>$k</span>";
           $ret.= "&nbsp;<span class='marray_value'>$v</span>";
           $ret.= "</li>";
        }
        $ret.= "</ul>";
    }
    $ret.= "</div>";
    return $ret;
}
function getAndIncrementCompteurA(){
    if (!file_exists("compteur.txt")){
        file_put_contents("compteur.txt", "0");
    }
    $content = file_get_contents("compteur.txt");
    $content++;  
    file_put_contents("compteur.txt", $content);

    return $content;
}


function getBddNadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT nom FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddPadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT prenom FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['prenom'] . '<br />' ;
}

$reponse->closeCursor();

}

function getBddDadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT age FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['age']  ;
}

$reponse->closeCursor();

}
function getBddAadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT adresse FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['adresse'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddVadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT ville FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['ville'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddMadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT mail FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['mail'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddTadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT telephone FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['telephone'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddPeradmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT permis FROM presentation');

while ($donnees = $reponse->fetch())
{
	echo $donnees['permis'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddPosteadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT poste FROM exppro');

while ($donnees = $reponse->fetch())
{
	echo $donnees['poste'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddEntadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT entreprise FROM exppro');

while ($donnees = $reponse->fetch())
{
	echo $donnees['entreprise'] . '<br /><' ;
}

$reponse->closeCursor();

}

function getBddViladmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query('SELECT ville FROM exppro');

while ($donnees = $reponse->fetch())
{
	echo $donnees['ville'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddDiplomeBtsadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT diplome  FROM formation WHERE id = '2' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['diplome'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddDiplomeLieuxadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT lieux  FROM formation WHERE id = '2' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['lieux'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddDiplomeVilleadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT ville  FROM formation WHERE id = '2' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['ville'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddDiplomeBacadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT diplome  FROM formation WHERE id = '3' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['diplome'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddDiplomeLieuxBadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT lieux  FROM formation WHERE id = '3' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['lieux'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddDiplomeVilleBadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT ville  FROM formation WHERE id = '3' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['ville'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddLoisirUnadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT nom FROM loisir WHERE id = '1' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddLoisirDeuxadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT nom  FROM loisir WHERE id = '2' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />' ;
}

$reponse->closeCursor();

}
function getBddLoisirTroisadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT nom  FROM loisir WHERE id = '3' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom']  ;
}

$reponse->closeCursor();

}
function getBddLoisirQuatreadmin(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    
$reponse = $bdd->query("SELECT nom  FROM loisir WHERE id = '4' ");

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />' ;
}

$reponse->closeCursor();

}


?>

