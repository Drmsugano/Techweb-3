<?php
namespace app\controller;
use app\model\dao\VendedorDao;
use app\model\dao\EquipeDao;
class VendedorController extends Controller{
    public static function listar(){
        parent::isProtected();
        $daoVendedor = new VendedorDao();
        $vendedor = $daoVendedor;
        include ("../app/view/module/vendedor/vendedorListar.php");
    }
    public function form(){
        parent::isProtected();
        $equipeDao = new EquipeDao();
        $equipe = $equipeDao->read_all();
        include "../app/view/module/vendedor/vendedorCadastrar.php";
    }
}