<?php

$matricula = $_GET['matricula'];

require_once 'conexao.php';
require_once 'AlunoDAO.php';

$ea = new AlunoDAO();

$ea -> deletar_alunos($conn, $matricula);