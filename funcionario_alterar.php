<?php

$id_func = $_POST['id_func'];
$data_admissao = $_POST['data_admissao'];
$data_demissao = $_POST['data_demissao'];
$id_terceiro = $_POST['id_terceiro'];
$id_cargo = $_POST['id_cargo'];

require_once 'conexao.php';
require_once 'Funcionario.php';
require_once 'FuncionarioDAO.php';
$func = new Funcionario();
$fs = new FuncionarioDAO();
$func -> setData_admissao($data_admissao);
$func -> setData_demissao($data_demissao);
$func -> setId_terceiro($id_terceiro);
$func -> setId_cargo($id_cargo);
$fs -> alterar_funcionario($conn, $func->getData_admissao(), $func->getData_demissao(), $func->getId_terceiro(), $func->getId_cargo(), $id_func);

?>