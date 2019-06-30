<?php  
/**
 * Classe 
 */
class EnderecoDAO{
	public function cadastrar_endereco($conn, $pais, $uf, $cep, $cidade, $bairro, $logradouro, $numero, $id_terceiro){
		//exeuta uma série de instruções SQL
		$result = $conn->exec("INSERT INTO endereco(pais, uf, cep, cidade, bairro, logradouro, numero, id_terceiro) VALUES ('{$pais}', '{$uf}','{$cep}','{$cidade}','{$bairro}','{$logradouro}','{$numero}', {$id_terceiro})");
		if ($result) {
			echo "Endereco cadastrado com sucesso!";
		}
	}
	public function alterar_endereco($conn, $pais, $uf, $cep, $cidade, $bairro, $logradouro, $numero, $id_terceiro, $id_end){
		$result = $conn -> query("UPDATE endereco SET 
								pais = '{$pais}', uf = '{$uf}', cep='{$cep}', cidade='{$cidade}', bairro='{$bairro}', logradouro='{$logradouro}', numero='{$numero}', id_terceiro={$id_terceiro}
								WHERE id_end = '{$id_end}'");
		if ($result) {
			header("Location: endereco_listar.php?resposta=Alterado com Sucesso&situacao=alert alert-success");
		}
	
	}
	public function listar_endereco($conn){
		$result = $conn -> query("SELECT* FROM endereco");
		return $result;
	}
	public function deletar_endereco($conn, $id_end){
		$result = $conn -> query("DELETE FROM endereco 
							WHERE id_end = {$id_end}");
		if($result){
			header("Location: endereco_listar.php?resposta=Deletado com Sucesso&situacao=alert alert-success");
		}
	}
}
?>