<?php  
class Servicos_funcionario{
	private $id_serv_func;
	private $servicos_id_servicos;
	private $funcionario_id_func;

	public function __construct($id_serv_func, $servicos_id_servicos, $funcionario_id_func){
		$this -> id_serv_func = $id_serv_func;
		$this -> servicos_id_servicos = $servicos_id_servicos;
		$this -> funcionario_id_func = $funcionario_id_func;
	}
	public function setId_servicos_func($id_serv_func){
		if (is_numeric($id_serv_func)) {
			$this -> id_serv_func = $id_serv_func;
		}
	}
	public function getId_servicos_func(){
		return $this -> id_serv_func;
	}
	public function setServicos_id_servicos($servicos_id_servicos){
		if (is_numeric($servicos_id_servicos)) {
			$this -> servicos_id_servicos = $servicos_id_servicos;
		}
	}
	public function getServicos_id_servicos(){
		return $this -> servicos_id_servicos;
	}
	public function setFuncionario_id_func($funcionario_id_func){
		if (is_numeric($funcionario_id_func)) {
			$this -> funcionario_id_func = $funcionario_id_func;
		}
	}
	public function getFuncionario_id_func(){
		return $this -> funcionario_id_func;
	}
}
?>