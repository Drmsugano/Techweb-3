<?php
namespace app\controller;
use app\model\dao\ProdutoDao;
class ProdutoController extends Controller{
    public function listar(){
        $produtoDao = new ProdutoDao();
        $produtoDao->read_all();
        include ("../app/view/module/produtoListar.php");
    }
}