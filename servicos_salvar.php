<?php

$descricao = $_POST['descricao'];
$modalidade = $_POST['modalidade'];
$preco = $_POST['preco'];

require_once 'conexao.php';
require_once 'Servicos.php';
require_once 'ServicosDAO.php';
$servico = new Servicos();
$sa = new ServicosDAO();
$servico -> setDescricao($descricao);
$servico -> setModalidade($modalidade);
$servico -> setPreco($preco);
$sa -> inserir_servicos($conn, $servico->getDescricao(), $servico->getModalidade(), $servico->getPreco());
header("Location: servicos_form.php?resposta=Cadastrado com Sucesso&situacao=alert alert-success")

?>