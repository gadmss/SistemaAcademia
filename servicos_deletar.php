<?php

// pegando o id da categoria
$id_servicos = $_GET['id_servicos'];

require_once 'conexao.php';
require_once 'ServicosDAO.php';

$sd = new ServicosDAO();

$sd -> deletar_servicos($conn, $id_servicos);