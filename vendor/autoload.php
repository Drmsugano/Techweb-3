<?php
spl_autoload_register(function($nome_da_classe) {
    include '..\\' . $nome_da_classe . ".php";
});