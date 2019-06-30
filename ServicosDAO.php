<?php  
/**
 * Classe 
 */
class ServicosDAO{
	public function inserir_servicos($conn, $descricao, $modalidade, $preco){
		//exeuta uma série de instruções SQL
		$result = $conn->exec("INSERT INTO servicos(descricao, modalidade, preco) VALUES ('{$descricao}', '{$modalidade}',{$preco})");
		if ($result) {
			echo "Cadastrado com sucesso!";
		}
	}
	public function alterar_servicos($conn, $descricao, $modalidade, $preco, $id_servicos){
		$result = $conn -> query("UPDATE servicos SET 
								descricao = '{$descricao}', modalidade = '{$modalidade}', preco= {$preco} WHERE id_servicos = {$id_servicos}");
		if ($result) {
			header("Location: servicos_listar.php?resposta=Alterado com Sucesso&situacao=alert alert-success");
		}
	}
	public function listar_servicos($conn){
		$result = $conn -> query("SELECT * FROM servicos");
		return $result;
	}
	public function deletar_servicos($conn, $id_servicos){
		$result = $conn -> query("DELETE FROM servicos 
							WHERE id_servicos = {$id_servicos}");
		if($result){
			header("Location: servicos_listar.php?resposta=Deletado com Sucesso&situacao=alert alert-success");
		}
	}
}
?>