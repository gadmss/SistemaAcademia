<?php
	 include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>";

		include_once 'conexao.php';
		include_once 'TurmaDAO.php';
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
		$tl = new TurmaDAO();
		$result = $tl -> listar_turma($conn);
		echo "
		<div class='col-md-12' style='padding-top:0px; text-align:center'>
			<h3>Tabela de Turma</h3>
			<table class='table'>
				<tr>
					<th scope='col'>id_turma</th>
					<th scope='col'>horario</th>
					<th scope='col'>turno</th>
					<th scope='col'>qtd_vagas</th>
					<th scope='col'>id_servicos</th>
					<th scope='col'>Alterar</th>
					<th scope='col'>Deletar</th>
				</tr>";
			if ($result) {
				//percorre os resultados via iteração
				while($row = $result->fetch(PDO::FETCH_OBJ)){
					//exibe os resultados, acessando o objeto retornado
					echo '<tr>';
					echo 	'<td>'.$row -> id_turma.'</td>'. 
							'<td>'. $row -> horario .'</td>'.
							'<td>'. $row -> turno .'</td>'.
							'<td>'. $row -> qtd_vagas .'</td>'.
							'<td>'. $row -> id_servicos.'</td>'.
							"<td><a href='turma_update.php?id_turma=".
							 $row -> id_turma."''>Alterar</a></td>
							<td><a href='turma_deletar.php?id_turma=".
							 $row -> id_turma."'>Deletar</a></td>";
				echo '</tr>';
				}
			}
			$conn = null;
			echo "</table>
				</div>
				";
?>
