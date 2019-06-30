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
		include_once 'conexao.php';
		include_once 'AlunoDAO.php';
		$sl = new AlunoDAO();
		$result = $sl -> listar_alunos($conn); 
		echo "
		<div class='col-md-12' style='padding-top:0px; text-align:center'>
			<h3>Tabela de Alunos</h3>
			<table class='table'>
				<tr>
					<th scope='col'>Matricula</th>
					<th scope='col'>Id_Terceiros</th>
					<th scope='col'>Id_turma</th>
					<th scope='col'>Alterar</th>
					<th scope='col'>Deletar</th>
				</tr>";
			if ($result) {
				while($row = $result->fetch(PDO::FETCH_OBJ)){
					
					echo 	'<td>'.$row -> matricula.'</td>'. 
							'<td>'. $row -> id_terceiros .'</td>'.
							'<td>'. $row -> id_turma.'</td>'.
							"<td><a href='aluno_update.php?matricula=".
							 $row -> matricula."''>Alterar</a></td>
							<td><a href='aluno_deletar.php?matricula=".
							 $row -> matricula."'>Deletar</a></td>";
				echo '</tr>';
				}
			}
			$conn = null;
			echo "</table>
				</div>
				";
?>
