<?php
namespace App\Models;

use App\Database\Connection;
use PDO;

class Usuario {
    private $db;

    public function __construct() {
        $this->db = Connection::getInstance();
    }

    // Método para buscar um usuário pelo e-mail
    public function buscarPorEmail($email) {
    // AQUI: Mude 'email' para 'email_usuario'
    $sql = "SELECT * FROM usuarios WHERE email_usuario = :email";
    $stmt = $this->db->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    
    // Retorna o resultado da busca
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
    
    // Seu método de login e outros...
    public function login($email, $senha) {
    // 1. Busca o usuário pelo email
    $usuario = $this->buscarPorEmail($email);
    
    // 2. Se o usuário foi encontrado E a senha digitada corresponde ao hash do banco
    if ($usuario && password_verify($senha, $usuario['senha'])) {
        return $usuario;
    }
    
    // 3. Se as senhas não batem ou o usuário não existe, retorna falso
    return false;
}
    public function cadastrar($nome, $email, $senha) {
    // Hasheia a senha antes de salvar
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO usuarios (nome, email_usuario, senha) VALUES (:nome, :email, :senha)";
    $stmt = $this->db->prepare($sql);
    
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':senha', $senhaHash); // Usa a senha em hash
    
    return $stmt->execute();
}
}
?>