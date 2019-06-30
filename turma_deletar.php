<?php

// pegando o id da categoria
$id_turma = $_GET['id_turma'];

require_once 'conexao.php';
require_once 'TurmaDAO.php';

$td = new TurmaDAO();

$td -> deletar_turma($conn, $id_turma);