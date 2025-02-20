<?php
namespace Dao;
use Model\Vendedor;
use \PDOExcetion;
use \PDO;

class VendedorDao extends Dao
{
    public function create($entityManager,$vendedor)
    {
        $daoEquipe = new EquipeDao()->read($entityManager,$vendedor->equipe);
        $vendedor->equipe = $daoEquipe[0];
        $entityManager->persist($vendedor);
        try {
            $entityManager->flush();
            return true;
        } catch (PDOExcetion) {
            return false;
        }
    }

    public function read_all($entityManager)
    {
    }

    public function read($entityManager,$id)
    {
       
    }

    public function update($entityManager,$vendedor)
    {
    }

    public function delete($entityManager,$id)
    {

    }
}