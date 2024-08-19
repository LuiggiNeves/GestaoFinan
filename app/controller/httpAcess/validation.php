<?php

require_once '../../model/httpAcess/modelValidation.php';

$email = $_GET['email'];
$senha = $_GET['senha'];

if (!empty($email) && !empty($senha)) {
    try {
        login($email, $senha);
    } catch (Exception $e) {
        echo 'Erro ao tentar realizar o login: ',  $e->getMessage();
    }
} else {
    echo 'Email e senha são obrigatórios.';
}