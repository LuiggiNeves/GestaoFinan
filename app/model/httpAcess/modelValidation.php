<?php

include '../../connection/DataBase.php';
use App\connection\DataBase;





function login($email, $senha){   

    $sql = "SELECT email, senha, situacao FROM clientes Where email = :email";

    $stmt = DataBase::getConn()->prepare($sql);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if( $result && password_verify($senha, $result['senha']) && $result['situacao'] == 1){

        return TRUE;
    }
    echo 'Password or Login invalid';
    return FALSE;
    
}