<?php
namespace app\controller;
use app\model\dao\EquipeDao;
use app\model\entity\Equipe;

class EquipeController extends Controller{
    public static function listar(){
        parent::isProtected();
        $dao = new EquipeDao();
        $equipe = $dao;
        include ("../app/view/module/equipe/equipeListar.php");
    }
}