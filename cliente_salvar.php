<?php

$status = $_POST['status'];
$terceiros_id_cliente = $_POST['terceiros_id_cliente'];

require_once 'conexao.php';
require_once 'Cliente.php';
require_once 'ClienteDAO.php';
$cliente = new Cliente();
$cs = new ClienteDAO();
$cliente -> setStatus($status);
$cliente -> setTerceiros_id_cliente($terceiros_id_cliente);
$cs -> inserir_cliente($conn, $cliente->getStatus(), $cliente->getTerceiros_id_cliente());
header("Location: cliente_form.php?resposta=Cadastrado com Sucesso&situacao=alert alert-success");
?>