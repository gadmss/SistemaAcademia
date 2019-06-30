<?php
//$categoria = array();
//$categoria['nome'] = $_POST['nome'];
$pais = $_POST['pais'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$id_terceiro = $_POST['id_terceiro'];


require_once 'conexao.php';
require_once 'Endereco.php';
require_once 'EnderecoDAO.php';

$end = new Endereco();
$ends = new EnderecoDAO();

$end-> setPais($pais);
$end-> setUf($uf);
$end-> setCep($cep);
$end-> setCidade($cidade);
$end-> setBairro($bairro);
$end-> setLogradouro($logradouro);
$end-> setNumero($numero);
$end-> setId_terceiro($id_terceiro);
$ends-> cadastrar_endereco($conn, $end->getPais(), $end->getUf(), $end->getCep(), $end->getCidade(), $end->getBairro(), $end->getLogradouro(), $end->getNumero(), $end->getId_terceiro());
header("Location: endereco1_form.php?resposta=Cadastrado com Sucesso&situacao=alert alert-success")
?>