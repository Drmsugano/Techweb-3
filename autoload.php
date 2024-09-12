<?php

spl_autoload_register(function($nome_da_classe){
    $nome_da_classe = str_replace("\\",'/',$nome_da_classe);
    echo $nome_da_classe;
    require_once $nome_da_classe.'.php';
});
