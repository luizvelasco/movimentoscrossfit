<?php

require_once("../models/Mensagem.php");
require_once("../models/Usuario.php");
require_once("../dao/UsuarioDao.php");
require_once("db.php");
require_once("globals.php");

$mensagem = new Mensagem($BASE_URL);

// Verificar o tipo de solicitação está vindo
$tipo = filter_input(INPUT_POST, "tipo"); 

if ($tipo == "registrar"){
    echo "registrar";
} else if ($tipo == "login"){
    echo "login";
}