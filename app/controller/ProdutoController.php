<?php
namespace app\controller;
use app\model\dao\ProdutoDao;
use app\model\entity\Produto;
class ProdutoController extends Controller{
    public static function listar(){
        parent::isProtected();
        $produtoDao = new ProdutoDao();
        $produto = $produtoDao;
        include ("../app/view/module/produto/produtoListar.php");
    }
    public static function form(){
        parent::isProtected();
        include ("../app/view/module/produto/produtoCadastrar.php");
    }
    public static function create(){
        $dao = new ProdutoDao();
        if (isset($_POST["cadastrarProduto"])) {
            $produto = new Produto();
            $produto->descricao = $_POST["descricao"];
            $produto->tipo = $_POST["tipo"];
            $produto->quantidade = $_POST["quantidade"];
            $produto->categoria = $_POST["categoria"];
              if ($dao->create($produto)){
                header("Location: /Produto");
            } else {
                // Isso não funciona pensar em uma maneira de apresentar a mensagem
                echo '<script type="text/javascript">alert("Erro em cadastrar");</script>'; // Se der erro imprime na tela um script
            }
        }
    }
    public static function edit(){
        $dao = new ProdutoDao();
        if (isset($_POST["alterarProduto"])) {
            $produto = new Produto();
            $produto->id = $_POST["id"];
            $produto->descricao = $_POST["descricao"];
            $produto->tipo = $_POST["tipo"];
            $produto->quantidade = $_POST["quantidade"];
            $produto->categoria = $_POST["categoria"];
            if ($dao->update($produto)){
                header("Location: /Produto");
            } else {
                // Isso não funciona pensar em uma maneira de apresentar a mensagem
                echo '<script type="text/javascript">alert("Erro em Alterar");</script>'; // Se der erro imprime na tela um script
            }
        }
    }
    public static function delete(){
        $dao = new ProdutoDao();
        if(isset($_REQUEST['id'])){
            $produto = new Produto();
            $produto->id = $_REQUEST['id'];
            if ($dao->delete($produto)){
                header("Location: /Produto");
            } else {
                // Isso não funciona pensar em uma maneira de apresentar a mensagem
                echo '<script type="text/javascript">alert("Erro em Alterar");</script>'; // Se der erro imprime na tela um script
            }
        }
    }
}