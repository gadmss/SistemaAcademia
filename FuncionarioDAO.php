<?php  
/**
 * Classe 
 */
class FuncionarioDAO{
	public function inserir_funcionario($conn, $data_admissao, $data_demissao, $id_terceiro, $id_cargo){
		//exeuta uma série de instruções SQL
		$result = $conn->exec("INSERT INTO funcionario(data_admissao, data_demissao, id_terceiro, id_cargo) VALUES ('{$data_admissao}', '{$data_demissao}',{$id_terceiro},{$id_cargo})");
		if ($result) {
		}
	}
	public function alterar_funcionario($conn, $data_admissao, $data_demissao, $id_terceiro, $id_cargo, $id_func){
		$result = $conn -> query("UPDATE funcionario SET 
								data_admissao = '{$data_admissao}', data_demissao = '{$data_demissao}', id_terceiro= {$id_terceiro}, id_cargo={$id_cargo} WHERE id_func = {$id_func}");
		if ($result) {
			header("Location: funcionario_listar.php?resposta=Alterado com Sucesso&situacao=alert alert-success");
		}	
	}
	public function listar_funcionario($conn){
		$result = $conn -> query("SELECT * FROM funcionario");
		return $result;
	}
	public function deletar_funcionario($conn, $id_func){
		$result = $conn -> query("DELETE FROM funcionario 
							WHERE id_func = {$id_func}");
		if($result){
			header("Location: funcionario_listar.php?resposta=Deletado com Sucesso&situacao=alert alert-success");
		}
	}
}
?>