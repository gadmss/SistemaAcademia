<?php  
class Funcionario{
	private $id_func;
	private $data_admissao;
	private $data_demissao;
	private $id_terceiro;
	private $id_cargo;

	public function setId_func($id_func){
		if (is_numeric($id_func)) {
			$this -> id_func = $id_func;
		}
	}
	public function getId_func(){
		return $this -> id_func;
	}
	public function setData_admissao($data_admissao){
		if (is_string($data_admissao)) {
			$this -> data_admissao = $data_admissao;
		}
	}
	public function getData_admissao(){
		return $this -> data_admissao;
	}
	public function setData_demissao($data_demissao){
		if (is_string($data_demissao)) {
			$this -> data_admissao = $data_demissao;
		}
	}
	public function getData_demissao(){
		return $this -> data_demissao;
	}
	public function setId_terceiro($id_terceiro){
		if (is_numeric($id_terceiro)) {
			$this -> id_terceiro = $id_terceiro;
		}
	}
	public function getId_terceiro(){
		return $this -> id_terceiro;
	}
	public function setId_cargo($id_cargo){
		if (is_numeric($id_cargo)) {
			$this -> id_cargo = $id_cargo;
		}
	}
	public function getId_cargo(){
		return $this -> id_cargo;
	}
}
?>