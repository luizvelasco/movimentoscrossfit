<?php 

require_once("../models/Usuario.php");

class UsuarioDao {

    private $conn;
    private $url;

    public function __construct(PDO $conn, $url)
    {
        $this->conn = $conn;
        $this->url = $url;
    }

}