<?php

// pegando o id da categoria
$id_terceiro = $_GET['id_terceiro'];

require_once 'conexao.php';
require_once 'TerceirosDAO.php';

$td = new TerceirosDAO();

$td -> deletar_terceiros($conn, $id_terceiro);