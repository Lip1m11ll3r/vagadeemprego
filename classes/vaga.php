<?php

require_once 'Crud.php';

class vaga extends Crud{

	protected $table = 'vaga';
	protected $pk = 'idVaga';
	private $funcao;
	private $remuneracao;
	private $statusVaga;
	private $descricaoVaga;
	private $contatoEmail;
	private $contatoTelefone;	
	private $categorias;
	private $idUsuarioVaga;

	public function setFuncao($funcao) {
		$this->funcao = $funcao;
		}

	public function getFuncao() {
		return $this->funcao;
        }
        
    

    public function setRemuneracao($remuneracao) {
		$this->remuneracao = $remuneracao;
		}

	public function getRemuneracao() {
		return $this->remuneracao;
        }
        
    

    public function setStatusVaga($statusVaga) {
		$this->statusVaga = $statusVaga;
		}

	public function getStatusVaga() {
		return $this->statusVaga;
        }
        
   

    public function setDescricaoVaga($descricaoVaga) {
		$this->descricaoVaga = $descricaoVaga;
		}

	public function getDescricaoVaga() {
		return $this->descricaoVaga;
        }
				    public function setContatoEmail($contatoEmail) {
		$this->contatoEmail = $contatoEmail;
		}

	public function getContatoEmail() {
		return $this->contatoEmail;
        }
				    public function setContatoTelefone($contatoTelefone) {
		$this->contatoTelefone = $contatoTelefone;
		}

	public function getContatoTelefone() {
		return $this->contatoTelefone;
        }

		    public function setCategorias($categorias) {
		$this->categorias = $categorias;
		}

	public function getCategorias() {
		return $this->categorias;
		}
		public function setIdUsuarioVaga($idUsuarioVaga) {
			$this->idUsuarioVaga = $idUsuarioVaga;
			}
	
		public function getIdUsuarioVaga() {
			return $this->idUsuarioVaga;
			}
        
    

	public function insert(){

		$sql  = "INSERT INTO $this->table (funcao, remuneracao, statusVaga, descricaoVaga, contatoEmail, contatoTelefone, idUsuarioVaga)
		 VALUES (:funcao, :remuneracao, :statusVaga, :descricaoVaga, :contatoEmail, :contatoTelefone, :idUsuarioVaga)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':funcao', $this->funcao);
		$stmt->bindParam(':remuneracao', $this->remuneracao);
		$stmt->bindParam(':statusVaga', $this->statusVaga);
		$stmt->bindParam(':descricaoVaga', $this->descricaoVaga);
		$stmt->bindParam(':contatoEmail', $this->contatoEmail);
		$stmt->bindParam(':contatoTelefone', $this->contatoTelefone);
		$stmt->bindParam(':idUsuarioVaga', $this->idUsuarioVaga);
		$stmt->execute();
		$this->idVaga = DB::getInstance()->lastInsertId();
		$idVaga = $this->idVaga;
		foreach($this->categorias as $idCategoria){
			$sql  = "INSERT INTO vagacategoria VALUES(:idVaga, :idCategoria)";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':idVaga', $this->idVaga);
			$stmt->bindParam(':idCategoria', $idCategoria);
			$stmt->execute();
		}
	

	}

	public function update($idVaga){

		$sql  = "UPDATE $this->table SET funcao = :funcao, remuneracao = :remuneracao, statusVaga = :statusVaga, contatoEmail = :contatoEmail, 
		contatoTelefone = :contatoTelefone, descricaoVaga = :descricaoVaga
		 WHERE idVaga = :idVaga";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':funcao', $this->funcao);
		$stmt->bindParam(':remuneracao', $this->remuneracao);
		$stmt->bindParam(':statusVaga', $this->statusVaga);
		$stmt->bindParam(':descricaoVaga', $this->descricaoVaga);
		$stmt->bindParam(':contatoEmail', $this->contatoEmail);
		$stmt->bindParam(':contatoTelefone', $this->contatoTelefone);
		$stmt->bindParam(':idUsuarioVaga', $this->idUsuarioVaga);

		return $stmt->execute();

	}

}