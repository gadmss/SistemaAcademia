<?php

$id_turma = $_POST['id_turma'];
$horario = $_POST['horario'];
$turno = $_POST['turno'];
$qtd_vagas = $_POST['qtd_vagas'];
$id_servicos = $_POST['id_servicos'];

require_once 'conexao.php';
require_once 'Turma.php';
require_once 'TurmaDAO.php';
$t = new Turma();
$ts = new TurmaDAO();
$t-> setHorario($horario);
$t-> setTurno($turno);
$t-> setQtd_vagas($qtd_vagas);
$t-> setId_servicos($id_servicos);
$ts-> alterar_turma($conn, $t->getHorario(), $t->getTurno(), $t->getQtd_vagas(), $t->getId_servicos(),$id_turma);
?>