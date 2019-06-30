<?php  
/**
 * Classe 
 */
class CargoDAO
{
	public function inserir_cargo($conn, $descricao, $salario, $atribuicoes){
		//exeuta uma série de instruções SQL
		$result = $conn->exec("INSERT INTO cargo(descricao, salario, atribuicoes) VALUES ('{$descricao}',{$salario},'{$atribuicoes}')");
		if ($result) {
			echo "Cargo cadastrado com sucesso!";
	
		}
	}
	public function alterar_cargo($conn, $descricao, $salario, $atribuicoes, $id_cargo){
		$result = $conn -> query("UPDATE cargo SET
								descricao = '{$descricao}', salario = {$salario}, atribuicoes='{$atribuicoes}'
								WHERE id_cargo = '{$id_cargo}'");
		if ($result) {
			header("Location: cargo_listar.php?resposta=Alterado com Sucesso&situacao=alert alert-success");
		}
	}
	public function listar_cargo($conn){
		$result = $conn -> query("SELECT * FROM cargo");
		return $result;
	}
	public function deletar_cargo($conn, $id_cargo){
		$result = $conn -> query("DELETE FROM cargo 
							WHERE id_cargo = '{$id_cargo}'");
		if($result){
			header("Location: cargo_listar.php?resposta=Deletado com Sucesso&situacao=alert alert-success");
		}
	}
}
?>