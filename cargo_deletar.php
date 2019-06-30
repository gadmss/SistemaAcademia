<?php

// pegando o id da categoria
$id_cargo = $_GET['id_cargo'];

require_once 'conexao.php';
require_once 'CargoDAO.php';

$cd = new CargoDAO();

$cd -> deletar_cargo($conn, $id_cargo);