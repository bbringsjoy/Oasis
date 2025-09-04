<?php
namespace App\Controllers;

use App\Models\Usuario;

class AuthController {
    public function registrar($nome, $email, $senha) {
        $usuario = new Usuario();

        // PASSO 1: Verifique se o e-mail já existe
        $usuarioExistente = $usuario->buscarPorEmail($email);

        if ($usuarioExistente) {
            // Se o e-mail já existe, retorne um erro para o usuário
            return ['status' => 'error', 'message' => 'E-mail já cadastrado.'];
        }

        // Se o e-mail não existe, prossiga com o cadastro
        $novoUsuarioId = $usuario->cadastrar($nome, $email, $senha);

        if ($novoUsuarioId) {
            return ['status' => 'success', 'id' => $novoUsuarioId];
        } else {
            return ['status' => 'error', 'message' => 'Erro ao cadastrar usuário.'];
        }
    }
    
    public function autenticar($email, $senha) {
        $usuario = new Usuario();
        return $usuario->login($email, $senha);
    }
}
