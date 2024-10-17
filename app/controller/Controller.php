<?php
namespace app\controller;
abstract class Controller{
    public static function isProtected() {
        if (!isset($_SESSION["usuario_logado"])) {
            header("Location: /login");
        }
    }
}