<?php

use app\controller\HomeController;
use app\controller\LoginController;
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch ($url) {
    case "/":
        LoginController::login();
        break;
    case "/Login":
        LoginController::login();
        break;
    case "/Home":
        HomeController::index();
        break;
    case "/autenticar":
        LoginController::autenticar();
        break;
}