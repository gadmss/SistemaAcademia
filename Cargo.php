<?php  
class Cargo{
	private $descricao;
	private $salario;
	private $atribuicoes;
	
	public function setDescricao($descricao){
		if (is_string($descricao)) {
			$this -> descricao = $descricao;
		}
	}
	public function getDescricao(){
		return $this -> descricao;
	}
	public function setSalario($salario){
		if (is_numeric($salario)) {
			$this -> salario = $salario;
		}
	}
	public function getSalario(){
		return $this -> salario;
	}
	public function setAtribuicoes($atribuicoes){
		if (is_string($atribuicoes)) {
			$this -> atribuicoes = $atribuicoes;
		}
	}
	public function getAtribuicoes(){
		return $this -> atribuicoes;
	}
}
?>