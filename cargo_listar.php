<?php
	 include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>";

		include_once 'conexao.php';
		include_once 'CargoDAO.php';
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
		include_once 'CargoDAO.php';
		//instance of class CargoDAO
		$sl = new CargoDAO();
		$result = $sl -> listar_cargo($conn); 
		echo "
		<div class='col-md-12' style='padding-top:0px; text-align:center'>
			<h3>Tabela de Cargo</h3>
			<table class='table'>
				<tr>
					<th scope='col'>Id_cargo</th>
					<th scope='col'>Descricao</th>
					<th scope='col'>Salario</th>
					<th scope='col'>Atribuições</th>
					<th scope='col'>Alterar</th>
					<th scope='col'>Deletar</th>
				</tr>";
			if ($result) {
				//percorre os resultados via iteração
				while($row = $result->fetch(PDO::FETCH_OBJ)){
					//exibe os resultados, acessando o objeto retornado
					echo '<tr>';
					echo 	'<td>'.$row -> id_cargo.'</td>'. 
							'<td>'. $row -> descricao .'</td>'.
							'<td>'. $row -> salario .'</td>'.
							'<td>'. $row -> atribuicoes .'</td>'.
							"<td><a href='cargo_update.php?id_cargo=".
							 $row -> id_cargo."''>Alterar</a></td>
							<td><a href='cargo_deletar.php?id_cargo=".
							 $row -> id_cargo."'>Deletar</a></td>";
				echo '</tr>';
				}
			}
			$conn = null;
			echo "</table>
				</div>
				";
?>
