<?php 
    $pageTitle = "Appli à améliorer selon le design pattern MVC";
    require_once("./app/core/views/header.php");

// monsite.test/mvc/index.php?controller=book&action=showAll

    if($_GET["controller"]){
        $controller = $_GET["controller"].'Controller';
    }

    require_once('./app/core/controllers/'.$controller.'.php');

    if($_GET["action"]){
        $action = $_GET["action"];
    }

    $action();

?>



<p>Cliquez <a href="index.php?controller=book&action=showAll">ici</a> pour accéder à notre bibliothèque</p>

<!-- Correction V1 -->
<!-- Code corrigé pour faciliter l'implémentation d'un MVC procédural -->
