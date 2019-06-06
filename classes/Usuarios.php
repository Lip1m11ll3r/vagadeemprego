
<?php

require_once 'Crud.php';

class Usuarios extends Crud{

	protected $table = 'usuario';
	private $nome;
	private $documento;
	private $email;
	private $senha;
	private $telefone;
	private $telefoneOp;
	private $sexo;
	private $tipoConta;
	private $descricao;
	private $arquivo;
	private $statusConta;


	public function setNome($nome) {
		$this->nome = $nome;
		}

	public function getNome() {
		return $this->nome;
		}

	public function setDocumento($documento) {
		$this->documento = $documento;
		}

	public function getDocumento() {
		return $this->documento;
		}

	public function setEmail($email) {
		$this->email = $email;
		}

	public function getEmail() {
		return $this->email;
		}

	public function setSenha($senha) {
		$this->senha = $senha;
        }

	public function getSenha() {
		return $this->senha;
		}
	public function setTelefone($telefone) {
        $this->telefone = $telefone;
        }

    public function getTelefone() {
        return $this->telefone;
        }

    public function setTelefoneOp($telefoneOp) {
        $this->telefoneOp = $telefoneOp;
        }

    public function getTelefoneOp() {
        return $this->telefoneOp;
        }
				public function setSexo($sexo) {
						$this->sexo = $sexo;
						}

				public function getSexo() {
						return $this->sexo;
						}
						public function setTipoConta($tipoConta) {
								$this->tipoConta = $tipoConta;
								}

						public function getTipoConta() {
								return $this->tipoConta;
								}
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
        }

    public function getDescricao() {
        return $this->descricao;
        }

	public function setArquivo($arquivo) {
		$this->arquivo = $arquivo;
		}

	public function getArquivo() {
		return $this->arquivo;
		}
		public function setStatusConta($statusConta) {
			$this->statusConta = $statusConta;
			}

		public function getStatusConta() {
			return $this->statusConta;
			}

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, documento, email, senha, telefone, telefoneOp, sexo, tipoConta, descricao, arquivo, statusConta)
		 VALUES (:nome, :documento, :email, :senha, :telefone, :telefoneOp, :sexo, :tipoConta, :descricao, :arquivo, :statusConta)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':documento', $this->documento);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':telefoneOp', $this->telefoneOp);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':tipoConta', $this->tipoConta);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':arquivo', $this->arquivo);
		$stmt->bindParam(':statusConta', $this->statusConta);
		return $stmt->execute();

	}

	public function update($idUsuario){

		$sql  = "UPDATE $this->table SET nome = :nome, documento = :documento, email = :email,
		 senha = :senha, telefone = :telefone, telefoneOp = :telefoneOp, sexo = :sexo, tipoConta = :tipoConta,
		 descricao = :descricao, arquivo = :arquivo, statusConta = :statusConta
		 WHERE idUsuario = :idUsuario";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':documento', $this->documento);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':telefoneop', $this->telefoneop);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':tipoConta', $this->tipoConta);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':arquivo', $this->arquivo);
		$stmt->bindParam(':statusConta', $this->statusConta);
		$stmt->bindParam(':idUsuario', $idUsuario);
		return $stmt->execute();

	}

}
?>
