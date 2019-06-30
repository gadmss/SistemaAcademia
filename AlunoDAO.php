<?php  
/**
 * Classe 
 */
class AlunoDAO
{
	public function inserir_alunos($conn, $id_terceiros, $id_turma){
		//exeuta uma série de instruções SQL
		$result = $conn->exec("INSERT INTO aluno(id_terceiros, id_turma) VALUES ({$id_terceiros},{$id_turma})");
		if ($result) {
			echo "Aluno cadastrado com sucesso!";
		}
	}
	public function alterar_alunos($conn, $id_terceiros, $id_turma, $matricula){
		$result = $conn -> query("UPDATE aluno SET 
								id_terceiros = {$id_terceiros}, id_turma = {$id_turma}
								WHERE matricula = {$matricula}");
		if ($result) {
			header("Location: aluno_listar.php?resposta=Alterado com Sucesso&situacao=alert alert-success");
		}
	}
	public function listar_alunos($conn){
		$result = $conn -> query("SELECT* FROM aluno");
		return $result;
	}
	public function deletar_alunos($conn, $mat){
		$result = $conn -> query("DELETE FROM aluno 
							WHERE matricula = '{$mat}'");
		if($result){
			header("Location: aluno_listar.php?resposta=Deletado com Sucesso&situacao=alert alert-success");
		}
	}
}
?>