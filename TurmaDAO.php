<?php  
/**
 * Classe 
 */
class TurmaDAO{
	public function inserir_turma($conn, $horario, $turno, $qtd_vagas, $id_servicos){
		//exeuta uma série de instruções SQL
		$result = $conn->exec("INSERT INTO turma(horario, turno, qtd_vagas, id_servicos) VALUES ('{$horario}', '{$turno}',{$qtd_vagas},{$id_servicos})");
		if ($result) {
			echo "Cadastrado com sucesso!";
		}
	}
	public function alterar_turma($conn, $horario, $turno, $qtd_vagas, $id_servicos, $id_turma){
		$result = $conn -> query("UPDATE turma SET 
								horario = '{$horario}', turno = '{$turno}', qtd_vagas= {$qtd_vagas}, id_servicos={$id_servicos} WHERE id_turma = {$id_turma}");
		if ($result) {
			header("Location: turma_listar.php?resposta=Alterado com Sucesso&situacao=alert alert-success");
		}
	}
	public function listar_turma($conn){
		$result = $conn -> query("SELECT * FROM turma");
		return $result;
	}
	public function deletar_turma($conn, $id_turma){
		$result = $conn -> query("DELETE FROM turma 
							WHERE id_turma = {$id_turma}");
		if($result){
			header("Location: turma_listar.php?resposta=Deletado com Sucesso&situacao=alert alert-success");
		}
	}
}
?>