
<?php
	 include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>";

		include_once 'conexao.php';
		include_once 'EnderecoDAO.php';
		//instance of class CargoDAO

    if (isset($_GET["resposta"])) {
        $resposta = $_GET["resposta"];
        $situacao = $_GET["situacao"];
        echo "<div class='$situacao' role='alert'>
                                <CENTER>
                                $resposta
                                </CENTER>
                            </div>";
    }
		//incluindo as funcionalidaes do arquivo mysql_conexao_pdo.php
		include_once 'conexao.php';
		include_once 'Endereco.php';
		include_once 'EnderecoDAO.php';
		//instance of class CargoDAO
		$endp = new EnderecoDAO();
		$result = $endp -> listar_endereco($conn);
		echo "
		<div class='col-md-12' style='padding-top:0px; text-align:center'>
			<h3>Tabela de Endereço</h3>
			<table class='table'>
				<tr>
					<th scope='col'>id_end</th>
					<th scope='col'>Pais</th>
					<th scope='col'>UF</th>
					<th scope='col'>Cep</th>
					<th scope='col'>Cidade</th>
					<th scope='col'>Bairro</th>
					<th scope='col'>Logradouro</th>
					<th scope='col'>Numero</th>
					<th scope='col'>Id_terceiro</th>
					<th scope='col'>Alterar</th>
					<th scope='col'>Deletar</th>
				</tr>";
			if ($result) {
				//percorre os resultados via iteração
				while($row = $result->fetch(PDO::FETCH_OBJ)){
					//exibe os resultados, acessando o objeto retornado
					echo '<tr>';
					echo 	'<td>'.$row -> id_end.'</td>'.
							'<td>'. $row -> pais .'</td>'.
							'<td>'. $row -> uf .'</td>'.
							'<td>'. $row -> cep .'</td>'.
							'<td>'. $row -> cidade.'</td>'.
							'<td>'. $row -> bairro .'</td>'.
							'<td>'. $row -> logradouro .'</td>'.
							'<td>'. $row -> numero.'</td>'.
							'<td>'. $row -> id_terceiro.'</td>'.
							"<td><a href='endereco_update.php?id_end=".
							 $row -> id_end."''>Alterar</a></td>
							<td><a href='endereco_deletar.php?id_end=".
							 $row -> id_end."'>Deletar</a></td>";
				echo '</tr>';
				}
			}
			$conn = null;
			echo "</table>
				</div>
				";
?>
