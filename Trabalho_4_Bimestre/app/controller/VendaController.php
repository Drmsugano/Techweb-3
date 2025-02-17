<?php
namespace Controller;
use Dao\ProdutoDao;
use Dao\VendaDao;
use Dao\VendedorDao;
use Model\Venda;
class VendaController extends Controller
{
    public static function listar($entityManager)
    {
        parent::isProtected();
        $venda = new VendaDao();
        $produto = new ProdutoDao();
        $vendedor = new VendedorDao();
        include "../app/view/module/venda/vendaListar.php";
    }
    public static function form($entityManager)
    {
        parent::isProtected();
        $produto = new ProdutoDao();
        $vendedor = new VendedorDao();
        include "../app/view/module/venda/vendaCadastrar.php";
    }

    public static function create($entityManager){
        $dao = new VendaDao();
        if (isset($_POST["cadastrarVenda"])) {
            $venda = new Venda();
            $venda->valor = $_POST["valor"];
            $venda->produto = $_POST["produto"];
            $venda->vendedor = $_POST["vendedor"];
            if ($dao->create($entityManager,$venda)){
                header("Location: /Venda");
            } else {
                echo '<script type="text/javascript">alert("Erro em cadastrar");</script>'; 
            }
        }
    }

    public static function edit($entityManager){
        $dao = new VendaDao();
        if (isset($_POST["alterarVenda"])) {
            $venda = new Venda();
            $venda->id = $_POST["id"];
            $venda->valor = $_POST["valor"];
            $venda->produto = $_POST["produto"];
            $venda->vendedor = $_POST["vendedor"];
            if ($dao->update($entityManager,$venda)){
                header("Location: /Venda");
            } else {
                echo '<script type="text/javascript">alert("Erro em cadastrar");</script>'; 
            }
        }
    }

    public static function delete($entityManager)
    {
        $dao = new VendaDao();
        if (isset($_REQUEST['id'])) {
            $venda = new Venda();
            $venda->id = $_REQUEST['id'];
            if ($dao->delete($entityManager,$venda->id)) {
                header("Location: /Venda");
            } else {
                echo '<script type="text/javascript">alert("Erro em Deletar");</script>';
            }
        }
    }
}
