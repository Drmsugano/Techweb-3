<?php
namespace app\controller;
use app\model\dao\EquipeDao;
use app\model\entity\Equipe;

class EquipeController extends Controller
{
    public static function listar()
    {
        parent::isProtected();
        $dao = new EquipeDao();
        $equipe = $dao;
        include("../app/view/module/equipe/equipeListar.php");
    }
    public static function form()
    {
        parent::isProtected();
        include("../app/view/module/equipe/equipeCadastrar.php");
    }
    public static function create()
    {
        $dao = new EquipeDao();
        if (isset($_POST["cadastrarEquipe"])) {
            $equipe = new Equipe();
            $equipe->nome = $_POST["nome"];
            $equipe->inicio = $_POST["inicio"];
            $equipe->fim = $_POST["fim"];
            if ($dao->create($equipe)) {
                header("location: /Equipe");
            } else {
                echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
            }
        }
    }
    public static function edit()
    {
        $dao = new EquipeDao();
        if (isset($_POST["alterarEquipe"])) {
            $equipe = new Equipe();
            $equipe->id = $_POST["id"];
            $equipe->nome = $_POST["nome"];
            $equipe->inicio = $_POST["inicio"];
            $equipe->fim = $_POST["fim"];
            if ($dao->update($equipe)) {
                header("location: /Equipe");
            } else {
                echo '<script type="text/javascript">alert("Erro em Alterar");</script>';
            }
        }
    }
    public static function delete()
    {
        $dao = new EquipeDao();
        if (isset($_REQUEST['id'])) {
            $equipe = new Equipe();
            $equipe->id = $_REQUEST['id'];
            if ($dao->delete($equipe->id)) {
                header("Location: /Equipe");
            } else {
                echo '<script type="text/javascript">alert("Erro em Deletar");</script>';
            }
        }
    }
}