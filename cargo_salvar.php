<?php

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
$cs -> inserir_cargo($conn, $cargo->getDescricao(), $cargo->getSalario(), $cargo->getAtribuicoes());
header("Location: cargo_form.php?resposta=Cadastrado com Sucesso&situacao=alert alert-success");
?>