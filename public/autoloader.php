<?php

spl_autoload_register(function($nome_da_classe) {
    
    $nome_da_classe = str_replace('\\', '/', $nome_da_classe);
    include '../' . $nome_da_classe . ".class.php";

    /*
    $classe_controller = "controller/$nome_da_classe.class.php";
    $classe_dao = "dao/$nome_da_classe.class.php";
    $classe_model = "model/$nome_da_classe.class.php";

    if (file_exists($classe_controller)) {
        include $classe_controller;
    } elseif (file_exists($classe_dao)) {
        include $classe_dao;
    } elseif (file_exists($classe_model)) {
        include $classe_model;
    }
    */

});

