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
    public static function form(){
        parent::isProtected();
        include ("../app/view/module/equipe/equipeCadastrar.php");
    }
    public static function create(){
        $dao = new EquipeDao();
        if(isset($_POST["cadastrarEquipe"])){
            $equipe = new Equipe();
            $equipe->nome = $_POST["nome"];
            $equipe->inicio = $_POST["inicio"];
            $equipe->fim =$_POST["fim"];
            if($dao->create($equipe)){
                header("location: /Equipe");
            } else{
                echo '<script type="text/javascript">alert("Erro em cadastrar");</script>'; 
            }
        }
    }
}