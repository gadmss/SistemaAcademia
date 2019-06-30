<?php
	 include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>";

		include_once 'conexao.php';
		include_once 'FuncionarioDAO.php';
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
		include_once 'FuncionarioDAO.php';

		//instance of class CargoDAO
		$fl = new FuncionarioDAO();
		$result = $fl-> listar_funcionario($conn);
		echo "
		<div class='col-md-12' style='padding-top:0px; text-align:center'>
			<h3>Tabela de Funcionario</h3>
			<table class='table'>
				<tr>
					<th scope='col'>Id_func</th>
					<th scope='col'>Data_admissao</th>
					<th scope='col'>Data_demissao</th>
					<th scope='col'>Id_terceiro</th>
					<th scope='col'>Id_cargo</th>
					<th scope='col'>Alterar</th>
					<th scope='col'>Deletar</th>
				</tr>";
			if ($result) {
				//percorre os resultados via iteração
				while($row = $result->fetch(PDO::FETCH_OBJ)){
					//exibe os resultados, acessando o objeto retornado
					echo '<tr>';
					echo 	'<td>'.$row -> id_func.'</td>'. 
							'<td>'. $row -> data_admissao .'</td>'.
							'<td>'. $row -> data_demissao .'</td>'.
							'<td>'. $row -> id_terceiro .'</td>'.
							'<td>'. $row ->  id_cargo.'</td>'.
							"<td><a href='funcionario_update.php?id_func=".
							 $row -> id_func."''>Alterar</a></td>
							<td><a href='funcionario_deletar.php?id_func=".
							 $row -> id_func."'>Deletar</a></td>";
				echo '</tr>';
				}
			}
			$conn = null;
			echo "</table>
				</div>
				";
?>
