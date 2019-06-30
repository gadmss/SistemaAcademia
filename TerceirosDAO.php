<?php  
/**
 * Classe 
 */
class TerceirosDAO{
	public function inserir_terceiros($conn, $cpf_cnpj, $nome_razao_social, $telefone, $e_mail){
		//exeuta uma série de instruções SQL
		$result = $conn->exec("INSERT INTO terceiros(cpf_cnpj, nome_razao_social, telefone, e_mail) VALUES ('{$cpf_cnpj}', '{$nome_razao_social}','{$telefone}','{$e_mail}')");
		if ($result) {
			echo "Cadastrado com sucesso!";
		}
	}
	public function alterar_terceiros($conn, $cpf_cnpj, $nome_razao_social, $telefone, $e_mail, $id_terceiro){
		$result = $conn -> query("UPDATE terceiros SET 
								cpf_cnpj = '{$cpf_cnpj}', nome_razao_social = '{$nome_razao_social}', telefone= '{$telefone}', e_mail='{$e_mail}' WHERE id_terceiro = '{$id_terceiro}'");
		if ($result) {
			header("Location: terceiros_listar.php?resposta=Alterado com Sucesso&situacao=alert alert-success");
		}	
	}
	public function listar_terceiros($conn){
		$result = $conn -> query("SELECT * FROM terceiros");
		return $result;
	}
	public function deletar_terceiros($conn, $id_terceiro){
		$result = $conn -> query("DELETE FROM terceiros 
							WHERE id_terceiro = {$id_terceiro}");
		if($result){
			header("Location: terceiros_listar.php?resposta=Deletado com Sucesso&situacao=alert alert-success");
		}
	}
}
?>