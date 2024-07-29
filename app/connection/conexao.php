<?php

class DataBase{
    private static $host = '';
    private static $db_name = '';
    private static $username = '';
    private static $password = '';
    private static $conn;

    public static function getConn(){
        try{  
            self::$conn = new PDO('mysql:host='. self::$host . ';dbname='. self::$db_name, self::$username, self::$password);
        }catch(PDOException $e){
            // Comentado para não mostrar o erro exato em produção
            // echo 'Erro de Conexão: ' . $e->getMessage();
        }
        return self::$conn;
    }

    public static function status(){
        try{
            $conn = self::getConn();
            if($conn == null){
                return "erro";
            }else{
                return "ok";
            }
        }catch(PDOException $e){
            return "erro";
        }
    }
}

echo DataBase::status();
?>
