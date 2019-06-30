<?php  
class Turma{
	private $horario;
	private $turno;
	private $qtd_vagas;
	private $id_servicos;

	public function setHorario($horario){
		if (is_string($horario)){
			$this -> horario = $horario;
		}
	}
	public function getHorario(){
		return $this -> horario;
	}
	public function setTurno($turno){
		if (is_string($turno)) {
			$this -> turno = $turno;
		}
	}
	public function getTurno(){
		return $this -> turno;
	}
	public function setQtd_vagas($qtd_vagas){
		if (is_numeric($qtd_vagas)) {
			$this -> qtd_vagas = $qtd_vagas;
		}
	}
	public function getQtd_vagas(){
		return $this -> qtd_vagas;
	}

	public function setId_servicos($id_servicos){
		if (is_numeric($id_servicos)) {
			$this -> id_servicos = $id_servicos;
		}
	}
	public function getId_servicos(){
		return $this -> id_servicos;
	}
}
?>