<?php 

namespace Dao;

use Doctrine\ORM\EntityManager;


abstract class Dao {

    abstract public function create(EntityManager $entityManager,$object);
    abstract public function read(EntityManager $entityManager,$object);
    abstract public function read_all(EntityManager $entityManager);
    abstract public function update(EntityManager $entityManager,$object);
    abstract public function delete(EntityManager $entityManager,$object);

}