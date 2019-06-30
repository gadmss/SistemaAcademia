<?php  
/**
 * Classe 
 */
class ClienteDAO
{
	public function inserir_cliente($conn, $status, $terceiros_id_cliente){
		//exeuta uma série de instruções SQL
		$result = $conn->exec("INSERT INTO cliente(status, terceiros_id_cliente) VALUES ('{$status}',{$terceiros_id_cliente})");
		if ($result) {
	
		}
	}
	public function alterar_cliente($conn, $status, $terceiros_id_cliente, $codigo){
		$result = $conn -> query("UPDATE cliente SET
								status = '{$status}', terceiros_id_cliente = {$terceiros_id_cliente}
								WHERE codigo = {$codigo}");
		if ($result) {
			header("Location: cliente_listar.php?resposta=Alterado com Sucesso&situacao=alert alert-success");
		}
	}
	public function listar_cliente($conn){
		$result = $conn -> query("SELECT * FROM cliente");
		return $result;
	}
	public function deletar_cliente($conn, $codigo){
		$result = $conn -> query("DELETE FROM cliente 
							WHERE codigo = {$codigo}");
		if($result){
			header("Location: cliente_listar.php?resposta=Deletado com Sucesso&situacao=alert alert-success");
		}
	}
}
?>