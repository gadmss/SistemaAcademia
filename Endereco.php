<?php  
class Endereco{
	private $pais;
	private $uf;
	private $cep;
	private $cidade;
	private $bairro;
	private $logradouro;
	private $numero;
	private $id_terceiro;

	public function setPais($pais){
		if (is_string($pais)) {
			$this -> pais = $pais;
		}
	}
	public function getPais(){
		return $this -> pais;
	}
	public function setUf($uf){
		if (is_string($uf)) {
			$this -> uf = $uf;
		}
	}
	public function getUf(){
		return $this -> uf;
	}
	public function setCep($cep){
		if (is_string($cep)) {
			$this -> cep = $cep;
		}
	}
	public function getCep(){
		return $this -> cep;
	}
	public function setCidade($cidade){
		if (is_string($cidade)) {
			$this -> cidade = $cidade;
		}
	}
	public function getCidade(){
		return $this -> cidade;
	}
	public function setBairro($bairro){
		if (is_string($bairro)) {
			$this -> bairro = $bairro;
		}
	}
	public function getBairro(){
		return $this -> bairro;
	}
	public function setLogradouro($logradouro){
		if (is_string($logradouro)) {
			$this -> logradouro = $logradouro;
		}
	}
	public function getLogradouro(){
		return $this -> logradouro;
	}
	public function setNumero($numero){
		if (is_numeric($numero)) {
			$this -> numero = $numero;
		}
	}
	public function getNumero(){
		return $this -> numero;
	}
	public function setId_terceiro($id_terceiro){
		if (is_numeric($id_terceiro)) {
			$this -> id_terceiro = $id_terceiro;
		}
	}
	public function getId_terceiro(){
		return $this -> id_terceiro;
	}
}
?>