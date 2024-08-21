<?php

require_once '../../../global.php';
require_once '../../model/httpAcess/modelValidation.php';
require_once '../../config/AuthService.php';

use function App\model\httpAcess\login;
use App\services\AuthService;

$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);

$email = $data['email'] ?? null;
$senha = $data['senha'] ?? null;

if (!empty($email) && !empty($senha)) {
    try {
        $user = login($email, $senha);
        if ($user) {
            $token = AuthService::generateToken(['email' => $user['email']]);
            echo json_encode(['success' => true, 'message' => 'Login realizado com sucesso.', 'token' => $token]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Login ou senha inválidos.']);
        }
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Erro ao tentar realizar o login: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Email e senha são obrigatórios.']);
}
