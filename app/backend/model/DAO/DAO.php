<?php
namespace app\backend\model\DAO;
use \PDOException;
use \PDO;
abstract class DAO{
    abstract public function create($object);
    abstract public function read($id);
    abstract public function read_all();
    abstract public function update($object);
    abstract public function delete($id);
}