<?php
	 include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>";

		include_once 'conexao.php';
		include_once 'ServicosDAO.php';
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
		include_once 'ServicosDAO.php';
		//instance of class CargoDAO
		$sl = new ServicosDAO();
		$result = $sl -> listar_servicos($conn); 
		echo "
		<div class='col-md-12' style='padding-top:0px; text-align:center'>
			<h3>Tabela de Serviços</h3>
			<table class='table'>
				<tr>
					<th scope='col'>id_servicos</th>
					<th scope='col'>descricao</th>
					<th scope='col'>modalidade</th>
					<th scope='col'>preco</th>
					<th scope='col'>Alterar</th>
					<th scope='col'>Deletar</th>
				</tr>";
			if ($result) {
				//percorre os resultados via iteração
				while($row = $result->fetch(PDO::FETCH_OBJ)){
					//exibe os resultados, acessando o objeto retornado
					echo '<tr>';
					echo 	'<td>'.$row -> id_servicos.'</td>'. 
							'<td>'. $row -> descricao .'</td>'.
							'<td>'. $row -> modalidade .'</td>'.
							'<td>'. $row -> preco .'</td>'.
							"<td><a href='servicos_update.php?id_servicos=".
							 $row -> id_servicos."''>Alterar</a></td>
							<td><a href='servicos_deletar.php?id_servicos=".
							 $row -> id_servicos."'>Deletar</a></td>";
				echo '</tr>';
				}
			}
			$conn = null;
			echo "</table>
				</div>
				";
?>
