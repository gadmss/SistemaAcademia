<?php

// pegando o id da categoria
$codigo = $_GET['codigo'];

require_once 'conexao.php';
require_once 'ClienteDAO.php';

$cd = new ClienteDAO();

$cd -> deletar_cliente($conn, $codigo);