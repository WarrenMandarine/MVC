<?php
$pageTitle = "Appli à améliorer selon le design pattern MVC";
require_once("./app/core/views/header.php");

// index.php?controller=book&action=update

if($_GET["controller"]){
 $ctrlName = $_GET["controller"];
}
if($_GET["action"]){
    $fonction = $_GET["action"];
}


require_once('./app/core/controllers/'.$ctrlName.'Controller.php');
$fonction();

// require_once('app/core/controller/bookController.php')
// ACTION va permettre d'executer une fonction d'un model particulier.
?>

<p>Cliquez <a href="./app/core/views/book/all.php">ici</a> pour accéder à notre bibliothèque</p>
<!-- Correction V1 -->
<!-- Code corrigé pour faciliter l'implémentation d'un MVC procédural -->