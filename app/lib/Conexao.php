<?php
namespace app\backend\lib;
class Conexao
{
    private static $conexao;
    public static function getConexao()
    {
        if (!isset(self::$conexao)) {
            try {
                self::$conexao = new PDO('mysql:dbname=ifpr', "root", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            } catch (PDOException $e) {
                echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
                return null;
            }
        }
        return self::$conexao;
    }
}