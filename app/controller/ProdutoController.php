<?php
namespace app\controller;
use app\model\dao\ProdutoDao;
use app\model\entity\Produto;
class ProdutoController extends Controller{
    public static function listar(){
        $produtoDao = new ProdutoDao();
        $produto = $produtoDao->read_all();
        include ("../app/view/module/produto/produtoListar.php");
    }
    public static function form(){
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
}