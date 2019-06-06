<?php
require_once 'Crud.php';

class categoria extends Crud{

	protected $table = 'categoria';
		protected $pk = 'idCategoria';
	private $nomeCategoria;
	public function setNomeCategoria($nomeCategoria) {
		$this->nomeCategoria = $nomeCategoria;
		}

	public function getNomeCategoria() {
		return $this->nomeCategoria;
        }
				/*public function select(){
					$sql  = "	SELECT DISTINCT $this->table (nomeCategoria) VALUES (:nomeCategoria)";
					$stmt = DB::prepare($sql);
					$stmt->bindParam(':nomeCategoria', $this->nomeCategoria);
					return $stmt->execute();
				}*/
		public function insert(){

		$sql  = "INSERT INTO $this->table (nomeCategoria) VALUES (:nomeCategoria)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nomeCategoria', $this->nomeCategoria);
			return $stmt->execute();
		}
		public function update($idCategoria){
		$sql  = "UPDATE $this->table SET nomeCategoria = :nomeCategoria WHERE idCategoria = :idCategoria";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nomeCategoria', $this->nomeCategoria);
		return $stmt->execute();
		}
		}
