<?php 
    require_once('./app/core/models/bookModel.php');


    function showAll(){
        $results = getAll();
        require_once('./app/core/views/book/all.php');
    }

    //http://github-cours-mvc.test/mvc/update.php
    // index.php?controller=book&action=showUpdateForm

    function showUpdateForm(){
        $book = findBy($_POST['updateID']);
        require_once('./app/core/views/book/update.php');
    }

    function sendUpdate(){
        $titre = htmlentities($_POST["titre"]);
        $desc = htmlentities($_POST["description"]);
        $prix = $_POST["prix"];
        $id = $_POST["bookID"];

        update($titre, $desc, $prix, $id);
    }
?>