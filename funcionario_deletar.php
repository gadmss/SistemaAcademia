<?php

// pegando o id da categoria
$id_func = $_GET['id_func'];

require_once 'conexao.php';
require_once 'FuncionarioDAO.php';

$fd = new funcionarioDAO();

$fd -> deletar_funcionario($conn, $id_func);