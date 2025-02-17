<?php
namespace Controller;
use Dao\ProdutoDao;
use Model\Produto;
class ProdutoController extends Controller{
    public static function listar($entityManager){
        parent::isProtected();
        $produtoDao = new ProdutoDao();
        $produto = $produtoDao;
        include ("../app/view/module/produto/produtoListar.php");
    }
    public static function form(){
        parent::isProtected();
        include ("../app/view/module/produto/produtoCadastrar.php");
    }
    public static function create($entityManager){
        $dao = new ProdutoDao();
        if (isset($_POST["cadastrarProduto"])) {
            $produto = new Produto();
            $produto->descricao = $_POST["descricao"];
            $produto->tipo = $_POST["tipo"];
            $produto->quantidade = $_POST["quantidade"];
            $produto->categoria = $_POST["categoria"];
              if ($dao->create($entityManager,$produto)){
                header("Location: /Produto");
            } else {
                echo '<script type="text/javascript">alert("Erro em cadastrar");</script>'; 
            }
        }
    }
    public static function edit($entityManager){
        $dao = new ProdutoDao();
        if (isset($_POST["alterarProduto"])) {
            $produto = new Produto();
            $produto->id = $_POST["id"];
            $produto->descricao = $_POST["descricao"];
            $produto->tipo = $_POST["tipo"];
            $produto->quantidade = $_POST["quantidade"];
            $produto->categoria = $_POST["categoria"];
            if ($dao->update($entityManager,$produto)){
                header("Location: /Produto");
            } else {
                echo '<script type="text/javascript">alert("Erro em Alterar");</script>';
            }
        }
    }
    public static function delete($entityManager){
        $dao = new ProdutoDao();
        if(isset($_REQUEST['id'])){
            $produto = new Produto();
            $produto->id = $_REQUEST['id'];
            if ($dao->delete($entityManager,$produto)){
                header("Location: /Produto");
            } else {
                echo '<script type="text/javascript">alert("Erro em Deletar");</script>';
            }
        }
    }
}