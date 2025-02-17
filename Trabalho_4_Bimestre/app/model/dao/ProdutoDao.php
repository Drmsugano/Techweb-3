<?php
namespace Dao;
use Model\Produto;
use \PDOException;
use \PDO;

class ProdutoDao extends Dao
{
    public function create($entityManager, $produto)
    {
        try {
            $entityManager->persist($produto);
            $entityManager->flush();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function read_all($entityManager)
    {
        $produtoRepository = $entityManager->getRepository('Model\\Produto');
        $produto = $produtoRepository->findAll();
        return $produto;
    }

    public function read($entityManager, $produtoId)
    {
        $query = $entityManager->createQuery('SELECT p FROM Model\Produto p WHERE p.id = :id');
        $query->setParameter('id', $produtoId);
        $produto = $query->getResult();
        return $produto;
    }

    public function update($entityManager, $produtoAlt)
    {
        $produto = $entityManager->find('Model\\Produto', $produtoAlt->id);
        $produto->descricao = $produtoAlt->descricao;
        $produto->tipo = $produtoAlt->tipo;
        $produto->quantidade = $produtoAlt->quantidade;
        $produto->categoria = $produtoAlt->categoria;
        try {
            $entityManager->flush();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete($entityManager, $produtoId)
    {
        $produto = $entityManager->find('Model\\Produto', $produtoId->id);
        try {
            $entityManager->remove($produto);
            $entityManager->flush();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}