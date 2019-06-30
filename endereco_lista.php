
<?php
	include_once "./header.php";
		if(isset($_GET['msg'])){
			$msg = $_GET['msg'];
			echo "
			<div class='alert alert-success' role='alert'>
				$msg
			</div> ";
		}
		if(isset($_GET['msg_erro'])){
			$msg = $_GET['msg_erro'];
			echo "
			<div class='alert alert-danger' role='alert'>
				$msg
			</div> ";
		}
		//incluindo as funcionalidaes do arquivo mysql_conexao_pdo.php
		include_once 'conexao.php';
		include_once 'Endereco.php';
		include_once 'EnderecoDAO.php';

		$id_terceiro=$_POST['id_terceiro'];
		//instance of class CargoDAO
		$end = new Endereco();
		$endp = new EnderecoDAO();
		$result = $endp -> listar_endereco($conn, $id_terceiro);
		echo "
		<div class='col-md-12' style='padding-top:80px; text-align:center'>
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
							'<td>'. $row -> terceiros.id_terceiro.'</td>'.
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
