<?php
/*
$cargo = array();
$cargo['descricao'] = $_POST['descricao'];
$cargo['salario']=$_POST['salario'];
$cargo['atribuicoes']=$_POST['atribuicoes'];
*/

$id_cargo = $_POST['id_cargo'];
$descricao = $_POST['descricao'];
$salario = $_POST['salario'];
$atribuicoes = $_POST['atribuicoes'];

require_once 'conexao.php';
require_once 'Cargo.php';
require_once 'CargoDAO.php';
$cargo = new Cargo();
$cs = new CargoDAO();
$cargo -> setDescricao($descricao);
$cargo -> setSalario($salario);
$cargo -> setAtribuicoes($atribuicoes);
$cs -> alterar_cargo($conn, $cargo->getDescricao(), $cargo->getSalario(), $cargo->getAtribuicoes(), $id_cargo);

?>