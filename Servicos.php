<?php  
class Servicos{
	private $descricao;
	private $modalidade;
	private $preco;

	public function setDescricao($descricao){
		if (is_string($descricao)) {
			$this -> descricao = $descricao;
		}
	}
	public function getDescricao(){
		return $this -> descricao;
	}
	public function setModalidade($modalidade){
		if (is_string($modalidade)) {
			$this -> modalidade = $modalidade;
		}
	}
	public function getModalidade(){
		return $this -> modalidade;
	}
	public function setPreco($preco){
		if (is_numeric($preco)) {
			$this -> preco = $preco;
		}
	}
	public function getPreco(){
		return $this -> preco;
	}
}