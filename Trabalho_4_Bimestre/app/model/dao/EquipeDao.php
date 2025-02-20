<?php
namespace Dao;
use Model\Equipe;
use \PDOException; 
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
        return $equipes;
        
    }

    public function read($entityManager,$equipe) {
        $query = $entityManager->createQuery('SELECT e FROM Model\Equipe e WHERE e.id = :id');
        $query->setParameter('id', $equipe);
        $equipe = $query->getResult();
        return $equipe;
    }

    public function update($entityManager,$equipeAlt) {
        $equipe = $entityManager->find('Model\\Equipe', $equipeAlt->id);
        $equipe->nome = $equipeAlt->nome;
        $equipe->inicio = new \DateTime($equipeAlt->inicio);
        $equipe->fim = new \DateTime($equipeAlt->fim);
        try {
            $entityManager->flush();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete($entityManager,$equipeId) {
        $equipe = $entityManager->find('Model\\Equipe', $equipeId);
        try {
            $entityManager->remove($equipe);
            $entityManager->flush();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }


}