<?php

require_once 'DB.php';

abstract class Crud extends DB{

	protected $table;
	protected $pk;

	abstract public function insert();
	abstract public function update($id);


	public function find($id){
		$sql  = "SELECT * FROM $this->table WHERE $this->pk = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function findAll(){
		$sql  = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete($idUsuario){
		$sql  = "DELETE FROM $this->table WHERE idUsuario = :idUsuario";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
		return $stmt->execute();
	}

}
?>
