<?php  
class Terceiros{
	private $cpf_cnpj;
	private $nome_razao_social;
	private $telefone;
	private $e_mail;

	public function setCpf_cnpj($cpf_cnpj){
		if (is_string($cpf_cnpj)) {
			$this -> cpf_cnpj = $cpf_cnpj;
		}
	}
	public function getCpf_cnpj(){
		return $this -> cpf_cnpj;
	}
	public function setNome_razao_social($nome_razao_social){
		if (is_string($nome_razao_social)) {
			$this -> nome_razao_social = $nome_razao_social;
		}
	}
	public function getNome_razao_social(){
		return $this -> nome_razao_social;
	}
	public function setTelefone($telefone){
		if (is_string($telefone)) {
			$this -> telefone = $telefone;
		}
	}
	public function getTelefone(){
		return $this -> telefone;
	}
	public function setE_mail($e_mail){
		if (is_string($e_mail)) {
			$this -> e_mail = $e_mail;
		}
	}
	public function getE_mail(){
		return $this -> e_mail;
	}
}
?>