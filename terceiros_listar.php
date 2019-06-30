<?php
	 include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>";

		include_once 'conexao.php';
		include_once 'TerceirosDAO.php';
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
		include_once 'TerceirosDAO.php';

		//instance of class CargoDAO
		$tl = new TerceirosDAO();
		$result = $tl-> listar_terceiros($conn);
		echo "
		<div class='col-md-12' style='padding-top:0px; text-align:center'>
			<h3>Tabela de Terceiros</h3>
			<table class='table'>
				<tr>
					<th scope='col'>id_terceiros</th>
					<th scope='col'>cpf_cnpj</th>
					<th scope='col'>nome_razao_social</th>
					<th scope='col'>telefone</th>
					<th scope='col'>e_mail</th>
					<th scope='col'>Alterar</th>
					<th scope='col'>Deletar</th>
				</tr>";
			if ($result) {
				//percorre os resultados via iteração
				while($row = $result->fetch(PDO::FETCH_OBJ)){
					//exibe os resultados, acessando o objeto retornado
					echo '<tr>';
					echo 	'<td>'.$row -> id_terceiro.'</td>'. 
							'<td>'. $row -> cpf_cnpj .'</td>'.
							'<td>'. $row -> nome_razao_social .'</td>'.
							'<td>'. $row -> telefone .'</td>'.
							'<td>'. $row ->  e_mail.'</td>'.
							"<td><a href='terceiros_update.php?id_terceiro=".
							 $row -> id_terceiro."''>Alterar</a></td>
							<td><a href='terceiros_deletar.php?id_terceiro=".
							 $row -> id_terceiro."'>Deletar</a></td>";
				echo '</tr>';
				}
			}
			$conn = null;
			echo "</table>
				</div>
				";
?>
