<?php
namespace Dao;
use Model\Equipe;
use \PDOExcetion; 
use \PDO;

class EquipeDao extends Dao{
    public function create($entityManager,$equipe) {
        $entityManager->persist($equipe);
        try {
            $entityManager->flush();
            return true;
        } catch (PDOExcetion) {
            return false;
        }
    }

    public function read_all($entityManager) {
        $equipeRepository = $entityManager->getRepository('Model\\Equipe');
        $equipes = $equipeRepository->findAll();
        var_dump($equipes);
        return $equipes;
    }

    public function read($entityManager,$equipe) {
        
    }

    public function update($entityManager,$equipe) {
       
    }

    public function delete($entityManager,$equipe) {
      
    }

    public function listaEquipe($row)
    {
        $equipe = new Equipe();
        $equipe->id = $row["id"];
        $equipe->nome = $row["nome"];
        $equipe->inicio = $row["inicio"];
        $equipe->fim = $row["fim"];
        return $equipe;
    }

}