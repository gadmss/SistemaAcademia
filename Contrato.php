<?php  
class Contrato{
	private $id_contrato;
	private $venc_fatura;
	private $id_servicos;
	private $id_funcionario;
	private $codigo_cliente;

	public function __construct($id_contrato, $venc_fatura, $id_servicos, $id_funcionario, $codigo_cliente){
		$this -> id_contrato = $id_contrato;
		$this -> venc_fatura = $venc_fatura;
		$this -> id_servicos = $id_servicos;
		$this -> id_funcionario = $id_funcionario;
		$this -> codigo_cliente = $codigo_cliente;
	}
	public function setId_contrato($id_contrato){
		if (is_numeric($id_contrato)) {
			$this -> id_contrato = $id_contrato;
		}
	}
	public function getId_contrato(){
		return $this -> id_contrato;
	}
	public function setVenc_fatura($venc_fatura){
		if (is_Data($venc_fatura)) {
			$this -> venc_fatura = $venc_fatura;
		}
	}
	public function getVenc_fatura(){
		return $this -> venc_fatura;
	}
	public function setId_servicos($id_servicos){
		if (is_numeric($id_servicos)) {
			$this -> id_servicos = $id_servicos;
		}
	}
	public function getId_servicos(){
		return $this -> id_servicos;
	}
	public function setId_funcionario($id_funcionario){
		if (is_numeric($id_funcionario)) {
			$this -> id_funcionario = $id_funcionario;
		}
	}
	public function getId_funcionario(){
		return $this -> id_funcionario;
	}
	public function setCodigo_cliente($codigo_cliente){
		if (is_numeric($codigo_cliente)) {
			$this -> codigo_cliente = $codigo_cliente;
		}
	}
	public function getCodigo_cliente(){
		return $this -> codigo_cliente;
	}
}
?>