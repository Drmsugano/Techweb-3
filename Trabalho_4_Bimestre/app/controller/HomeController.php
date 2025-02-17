<?php
namespace Controller;

class HomeController extends Controller{
    
    public static function index() {
        parent::isProtected();
        include '../app/view/home.php';
    }
}