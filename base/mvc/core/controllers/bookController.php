<?php

function all(){

    echo "On est là";
}
function updateOne(){

    var_dump($_POST);
    require_once('./app/core/views/book/all.php');
    update();
}


?>