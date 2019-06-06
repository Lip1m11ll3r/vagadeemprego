<?php

/**
 * Classe formulario
 */
class pessoa
{
	private $idPessoa;
	private $nome;
	private $documento;
	private $email;
	private $senha;
	private $telefone;
	private $telefoneOp;
	private $sexo;
    private $descricaoCadastro;
    private $arquivo;


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
		public function setSenha($senha) {
								$this->senha = $senha;
							  }

		public function getSenha() {
								return $this->senha;
								}
		public function setSexo($sexo) {
								$this->sexo = $sexo;
								}

		public function getSexo() {
								return $this->sexo;
								}
    public function setDescricaoCadastro($descricaoCadastro) {
                    $this->descricaoCadastro = $descricaoCadastro;
                    }

    public function getDescricaoCadastro() {
                    return $this->descricaoCadastro;
                    }

	public function setArquivo($arquivo) {
                    $this->arquivo = $arquivo;
                    }

    public function getArquivo() {
                    return $this->arquivo;
                    }




	public function listar() {
			require_once 'conexao.php';
	     		$conn = getConnection();
            $sql = "Select * from pessoa";
            $resultado = $conn->query($sql);

            if ($resultado->num_rows > 0) {

                return ($resultado);
            }
            else {
                return "ERRO";
            }

            $conn->close();

    }

    public function inserir() {
						$conn= getConnection();
            $nome = $this->nome;
            $documento = $this->documento;
            $email = $this->email;
            $senha = $this->senha;
            $telefone = $this->telefone;
            $telefoneOp = $this->telefoneOp;
            $sexo = $this->sexo;
            $descricaoCadastro = $this->descricaoCadastro;
						$arquivo = $this->arquivo;


            include "conexao.php";
            $sql = "Insert into pessoa ( nome, documento, email, senha, telefone, telefoneOp, sexo, descricaoCadastro, arquivo)
            values ('$nome','$documento','$email','$senha','$telefone','$telefoneOp','$sexo','$descricaoCadastro','$arquivo')";
            if (!$resultado = $conn->query($sql)) {
            return mysqli_error($conn); } else {

            return ($resultado); }
            $conn->close();
    }

}
?>
