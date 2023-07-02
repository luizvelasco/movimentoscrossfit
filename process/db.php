<?php

$nome_bd = "movimentos_crossfit";
$host_bd = "localhost";
$usuario_bd = "root";
$senha_bd = "";

$conexao = new PDO("mysql:dbname=" . $nome_bd . ";host=" . $host_bd, $usuario_bd, $senha_bd);

// Habilitar erros PDO
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conexao->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);