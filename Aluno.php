<?php  
class Aluno{
	private $id_terceiros;
	private $id_turma;

	public function setId_terceiros($id_terceiros){
		if (is_numeric($id_terceiros)) {
			$this -> id_terceiros = $id_terceiros;
		}
	}
	public function getId_terceiros(){
		return $this -> id_terceiros;
	}
	public function setId_turma($id_turma){
		if (is_numeric($id_turma)) {
			$this -> id_turma = $id_turma;
		}
	}
	public function getId_turma(){
		return $this -> id_turma;
	}
}
?>