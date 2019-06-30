<?php  
class Cliente{
	private $codigo;
	private $status;
	private $terceiros_id_cliente;

	public function setCodigo($codigo){
		if (is_numeric($codigo)) {
			$this -> codigo = $codigo;
		}
	}
	public function getCodigo(){
		return $this -> codigo;
	}
	public function setStatus($status){
		if (is_string($status)) {
			$this -> status = $status;
		}
	}
	public function getStatus(){
		return $this -> status;
	}
	public function setTerceiros_id_cliente($terceiros_id_cliente){
		if (is_numeric($terceiros_id_cliente)) {
			$this -> terceiros_id_cliente = $terceiros_id_cliente;
		}
	}
	public function getTerceiros_id_cliente(){
		return $this -> terceiros_id_cliente;
	}
}
?>