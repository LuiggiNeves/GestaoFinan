<?php

namespace App\connection;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__. '/../../') ;
$dotenv->load();




class DataBase {
    private static $host;
    private static $db_name;
    private static $username;
    private static $password;
    private static $conn;

    private static function init() {
        self::$host = $_ENV['DB_HOST'];
        self::$db_name = $_ENV['DB_NAME'];
        self::$username = $_ENV['DB_USER'];
        self::$password = $_ENV['DB_PASS'];

    }


    public static function getConn(){
        self::init();
        if (!self::$conn) { // Verifica se a conexão já foi estabelecida
            try {  

                self::$conn = new \PDO(
                    'mysql:host='. self::$host . ';dbname='. self::$db_name, 
                    self::$username, 
                    self::$password
                );
                self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            } catch(\PDOException $e) {
                // Comentado para não mostrar o erro exato em produção
                'Erro de Conexão: ' . $e->getMessage();
            }
        }
        return self::$conn;
    }

    public static function status(){
        try {
            $conn = self::getConn();
            if($conn == null){
                return "erro";
            } else {
                return "ok";
            }
        } catch(\PDOException $e){
            return "erro";
        }
    }
}

DataBase::getConn();

?>
