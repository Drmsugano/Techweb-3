<?php
namespace Dao;
use Doctrine\ORM\EntityManager;
use Model\Venda;
use \PDOException;
use \PDO;

class VendaDao extends Dao
{

    public function create(EntityManager $entityManager,$venda)
    {
        $daoVendedor = new VendedorDao();
        $vendedor = $daoVendedor->read($entityManager, $venda->vendedor);
        $venda->vendedor = $vendedor[0];
        $daoProduto = new ProdutoDao();
        $produto = $daoProduto->read($entityManager, $venda->produto);
        $venda->produto = $produto[0];
        try {
            $entityManager->persist($venda);
            $entityManager->flush();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function read_all(EntityManager $entityManager)
    {
        $vendaRepository = $entityManager->getRepository('Model\\Venda');
        $vendas = $vendaRepository->findAll();
        return $vendas;
        
    }

    public function read(EntityManager $entityManager,$venda)
    {
        $query = $entityManager->createQuery('SELECT v FROM Model\Venda v JOIN v.vendedor vd JOIN v.produto p WHERE v.id = :id');
        $query->setParameter('id', $venda);
        $vendaR = $query->getResult();
        var_dump($vendaR);
        return $vendaR;
    }

    public function update(EntityManager $entityManager,$vendaAlt)
    {
        $daoProduto = new ProdutoDao();
        $produto = $daoProduto->read($entityManager, $vendaAlt->produto);
        $venda = $entityManager->find('Model\\Venda', $vendaAlt->id);
        $vendedor->nome = $vendedorAlt->nome;
        $vendedor->nivel = $vendedorAlt->nivel;
        $vendedor->equipe = $equipe[0];
        try {
            $entityManager->flush();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete(EntityManager $entityManager,$venda)
    {
        $venda = $entityManager->find('Model\\Venda', $venda);
        try {
            $entityManager->remove($venda);
            $entityManager->flush();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}