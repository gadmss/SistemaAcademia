<?php

// pegando o id da categoria
$id_end = $_GET['id_end'];

require_once 'conexao.php';
require_once 'EnderecoDAO.php';

$ed = new EnderecoDAO();

$ed -> deletar_endereco($conn, $id_end);