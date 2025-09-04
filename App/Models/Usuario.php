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
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        
        // Retorna o resultado da busca
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    // Seu método de login e outros...
    public function login($email, $senha) {
        // ...
    }

    public function cadastrar($nome, $email, $senha) {
        // ...
    }
}