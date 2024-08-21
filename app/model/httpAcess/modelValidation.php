<?php

namespace App\model\httpAcess;

use App\connection\DataBase;
use PDO;

function login($email, $senha) {   
    $conn = DataBase::getConn();

    $sql = "SELECT email, senha, situacao FROM clientes WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result && password_verify($senha, $result['senha']) && $result['situacao'] == 1) {
        return $result; // Retorna o array de resultados
    }

    return false; // Retorna false se não encontrar o usuário ou se a senha não for válida
}
