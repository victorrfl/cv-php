<?php
require_once 'includes/functionsadmin.php';
?>
<br>
<?= 'Poste : ' ?><?= getBddPosteadmin() ?>
<?= 'Année de début : 2017 <br />' ?>
<?= 'Année de fin : 2019 <br />' ?>
<?= 'Entreprise : ' ?> <?= getBddEntadmin() ?>
<?= 'Ville : ' ?> <?= getBddViladmin() ?>
<br>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <div class="text-center text-md-left" style ="margin-left: 5px">
                <a class="btn btn-success">AJOUTER</a>
            </div>
            <br>
            <div class="text-center text-md-left"  style ="margin-left: 5px">
                <a class="btn btn-primary">MODIFIER</a>
            </div>
            <br>
            <div class="text-center text-md-left"  style ="margin-left: 5px">
                <a class="btn btn-danger">SUPPRIMER</a>
            </div>
            <br>
