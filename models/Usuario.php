<?php

class Usuario {

    public $id;
    public $nome;
    public $sobrenome;
    public $email;
    public $senha;
    public $token;
    public $ativo;

    public function getFullName($usuario) {
        return $this->nome . " " . $this->sobrenome;
    }

    public function generateToken () {
        return bin2hex(random_bytes(50));
    }

    public function generatePassword($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }

}