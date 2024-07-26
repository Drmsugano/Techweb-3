<?php
    require __DIR__."/app/interfaces/interfacesFigura.php";
    require __DIR__."/app/model/Desenhador.php";
    require __DIR__."/app/controller/backend.php";
    $request = $_SERVER["REQUEST_URI"];
    switch ($request) {
        case '/':
            require "app/views/exercicio1.php";
            break;
        default:
            http_response_code(404);
            break;
    }
