<?php

$id_terceiro = $_POST['id_terceiro'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$nome_razao_social = $_POST['nome_razao_social'];
$telefone = $_POST['telefone'];
$e_mail = $_POST['e_mail'];

require_once 'conexao.php';
require_once 'Terceiros.php';
require_once 'TerceirosDAO.php';
$terceiro = new Terceiros();
$ts = new TerceirosDAO();
$terceiro -> setCpf_cnpj($cpf_cnpj);
$terceiro -> setNome_razao_social($nome_razao_social);
$terceiro -> setTelefone($telefone);
$terceiro -> setE_mail($e_mail);
$ts -> alterar_terceiros($conn, $terceiro->getCpf_cnpj(), $terceiro->getNome_razao_social(), $terceiro->getTelefone(), $terceiro->getE_mail(), $id_terceiro);
?>