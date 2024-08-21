<?php

namespace App\services;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthService {

    private static $secret_key = "P3dU1JbKTm3dY6kV3QDA3R1uM"; // Mude para sua chave secreta

    public static function generateToken($user_data) {
        $issuedAt = time();
        $expirationTime = $issuedAt + 3600;  // Token válido por 1 hora

        $payload = [
            'iat' => $issuedAt,
            'exp' => $expirationTime,
            'data' => $user_data
        ];

        return JWT::encode($payload, self::$secret_key, 'HS256');
    }

    public static function validateToken($jwt) {
        try {
            $decoded = JWT::decode($jwt, new Key(self::$secret_key, 'HS256'));
            return (array)$decoded->data;  // Retorna os dados do usuário
        } catch (\Exception $e) {
            return null;  // Token inválido ou expirado
        }
    }
}
