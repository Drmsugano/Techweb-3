<?php
namespace Controller;
use Dao\EquipeDao;
use Model\Equipe;

class EquipeController extends Controller
{
    public static function listar($entityManager)
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
    public static function create($entityManager)
    {
        $dao = new EquipeDao();
        if (isset($_POST["cadastrarEquipe"])) {
            $equipe = new Equipe();
            $equipe->nome = $_POST["nome"];
            $equipe->inicio = new \DateTime($_POST['inicio']);
            $equipe->fim = new \DateTime($_POST['fim']);
            if ($dao->create($entityManager,$equipe)) {
                header("location: /Equipe");
            } else {
                echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
            }
        }
    }
    public static function edit($entityManager)
    {
        $dao = new EquipeDao();
        if (isset($_POST["alterarEquipe"])) {
            $equipe = new Equipe();
            $equipe->id = (int) $_POST["id"];
            $equipe->nome = $_POST["nome"];
            $equipe->inicio = $_POST["inicio"];
            $equipe->fim = $_POST["fim"];
            if ($dao->update( $entityManager,$equipe)) {
                header("location: /Equipe");
            } else {
                echo '<script type="text/javascript">alert("Erro em Alterar");</script>';
            }
        }
    }
    public static function delete($entityManager)
    {
        $dao = new EquipeDao();
        if (isset($_REQUEST['id'])) {
            $equipe = new Equipe();
            $equipe->id = (int) $_REQUEST['id'];
            if ($dao->delete($entityManager,$equipe->id)) {
                header("Location: /Equipe");
            } else {
                echo '<script type="text/javascript">alert("Erro em Deletar");</script>';
            }
        }
    }
}