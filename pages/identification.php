<?php
/*
session_start();
try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=cvphp;charset=utf8', 'root', '');
    }
        catch(Exception $e)
    {
        die('Erreur : ');
    }
    $id = $bdd->prepare("SELECT logins FROM admins WHERE logins=:logins");
    $id ->execute(['logins'=>$_SESSION['Logins']]);
    while ($donnees=$logins->fetchObject())
    
        {
            foreach($donnees as $k => $v){
                $ret = $v;
            }
        }  
    $resultId = $ret; 
    $pass = $bdd->prepare("SELECT password FROM admins WHERE password=:password");
    $pass ->execute(['password'=>$_SESSION['password']]);
    while ($donnees=$pass->fetchObject())
        {
            
            foreach($donnees as $k => $v){
                $ret= $v;
            }
        } 
    $resultPass= $ret;
if ($resultPass === $_SESSION['password'] && $resultId === $_SESSION['Logins']){
    Header('Location:../indexadmin.php');
}
else
{
    Header('Location:../index.php');
}
*/
?>