<?php
namespace Dao;
use Model\Vendedor;
use \PDOException;
use \PDO;

class VendedorDao extends Dao
{
    public function create($entityManager,$vendedor)
    {
        $daoEquipe = new EquipeDao();
        $equipe = $daoEquipe->read($entityManager, $vendedor->equipe);
        $vendedor->equipe = $equipe[0];
        try {
            $entityManager->persist($vendedor);
            $entityManager->flush();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function read_all($entityManager)
    {
        $query = $entityManager->createQuery('SELECT v FROM Model\Vendedor v JOIN v.equipe e');
        $vendedorAll = $query->getResult();
        var_dump($vendedorAll);
        return $vendedorAll;
    }

    public function read($entityManager,$id)
    {
       // $query = $entityManager->createQuery('SELECT v FROM Model\Vendedor v JOIN v.equipe e WHERE v.id = :id');
       // $query->setParameter('id', $id);
       // $vendedorR = $query->getResult();
       // return $vendedorR;
    }

    public function update($entityManager,$vendedor)
    {
    }

    public function delete($entityManager,$id)
    {

    }
}