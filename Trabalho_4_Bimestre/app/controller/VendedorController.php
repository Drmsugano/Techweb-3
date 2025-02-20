<?php
namespace Controller;
use Dao\VendedorDao;
use Dao\EquipeDao;
use Model\Vendedor;
class VendedorController extends Controller
{
    public static function listar($entityManager)
    {
        parent::isProtected();
        $daoVendedor = new VendedorDao();
        $vendedor = $daoVendedor;
        $equipe = new EquipeDao();
        include("../app/view/module/vendedor/vendedorListar.php");
    }
    public static function form($entityManager)
    {
        parent::isProtected();
        $equipeDao = new EquipeDao();
        $equipe = $equipeDao->read_all($entityManager);
        include "../app/view/module/vendedor/vendedorCadastrar.php";
    }

    public static function create($entityManager)
    {
        parent::isProtected();
        $daoVendedor = new VendedorDao();
        if (isset($_POST["cadastrarVendedor"])) {
            $vendedor = new Vendedor;
            $vendedor->nome = $_POST["nome"];
            $vendedor->nivel = $_POST["nivel"];
            $vendedor->equipe = (int) $_POST["equipe"];
            if ($daoVendedor->create($entityManager,$vendedor)) {
                header("location: /Vendedor");
            } else {
                echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
            }
        }
    }
    public static function edit($entityManager){
        parent::isProtected();
        $daoVendedor = new EquipeDao();
        $daoVendedor = new VendedorDao();
        if (isset($_POST["alterarVendedor"])) {
            $vendedor = new Vendedor;
            $vendedor->id = $_POST["id"];
            $vendedor->nome = $_POST["nome"];
            $vendedor->nivel = $_POST["nivel"];
            $vendedor->equipe = (int) $_POST["equipe"];
            if ($daoVendedor->update($entityManager,$vendedor)) {
                header("location: /Vendedor");
            } else {
                echo '<script type="text/javascript">alert("Erro em alterar");</script>';
            }
        }
    }

    public static function delete($entityManager)
    {
        $dao = new VendedorDao();
        if (isset($_REQUEST['id'])) {
            $vendedor = new Vendedor();
            $vendedor->id = $_REQUEST['id'];
            if ($dao->delete($entityManager,$vendedor)) {
                header("Location: /Vendedor");
            } else {
                echo '<script type="text/javascript">alert("Erro em Deletar");</script>';
            }
        }
    }
}