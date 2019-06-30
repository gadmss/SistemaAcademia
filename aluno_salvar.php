<?php

$id_terceiros = $_POST['id_terceiros'];
$id_turma = $_POST['id_turma'];

require_once 'conexao.php';
require_once 'Aluno.php';
require_once 'AlunoDAO.php';
$aluno = new Aluno();
$as = new AlunoDAO();
$aluno -> setId_terceiros($id_terceiros);
$aluno -> setId_turma($id_turma); 
$as-> inserir_alunos($conn, $aluno->getId_terceiros(), $aluno->getId_turma());
header("Location: aluno_form.php?resposta=Cadastrado com Sucesso&situacao=alert alert-success")

?>