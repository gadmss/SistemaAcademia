<?php

$id_servicos = $_POST['id_servicos'];
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
$sa -> alterar_servicos($conn, $servico->getDescricao(), $servico->getModalidade(), $servico->getPreco(), $id_servicos);
?>