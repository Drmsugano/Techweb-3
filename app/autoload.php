<?php

spl_autoload_register(function($nome_da_classe){
    $classe_controller = 'app/backend/controller/'.$nome_da_classe.'.php';
    $classe_dao = 'app/backend/DAO/'.$nome_da_classe.'.php';
    $classe_model = 'app/backend/model/'.$nome_da_classe.'.php';
    if(file_exists($classe_controller)){
        include $classe_controller;
    } elseif (file_exists($classe_dao)){
        include $classe_dao;
    } elseif (file_exists($classe_model)){
        include $classe_model;
    }
});
