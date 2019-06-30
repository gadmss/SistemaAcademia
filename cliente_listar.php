<?php
	 include_once "./header.php";

  echo "<div class='col-md-12' style='padding-top:80px; text-align:center'>";

		include_once 'conexao.php';
		include_once 'ClienteDAO.php';
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
		$cl = new ClienteDAO();
		$result = $cl -> listar_cliente($conn); 
		echo "
		<div class='col-md-12' style='padding-top:0px; text-align:center'>
			<h3>Tabela de Cliente</h3>
			<table class='table'>
				<tr>
					<th scope='col'>Codigo</th>
					<th scope='col'>Status</th>
					<th scope='col'>Id_terceiros</th>
					<th scope='col'>Alterar</th>
					<th scope='col'>Deletar</th>
				</tr>";
			if ($result) {
				//percorre os resultados via iteração
				while($row = $result->fetch(PDO::FETCH_OBJ)){
					//exibe os resultados, acessando o objeto retornado
					echo '<tr>';
					echo 	'<td>'.$row -> codigo.'</td>'. 
							'<td>'. $row -> status .'</td>'.
							'<td>'. $row -> terceiros_id_cliente .'</td>'.
							"<td><a href='cliente_update.php?codigo=".
							 $row -> codigo."''>Alterar</a></td>
							<td><a href='cliente_deletar.php?codigo=".
							 $row -> codigo."'>Deletar</a></td>";
				echo '</tr>';
				}
			}
			$conn = null;
			echo "</table>
				</div>
				";
?>
