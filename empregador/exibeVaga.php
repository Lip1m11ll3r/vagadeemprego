 <?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}
?>
 <?php
	          $vaga = new vaga;
             $vaga = $vaga->find($_GET['id']);
            
		?>
		<label >
		<ul>
		<li>Fun��o:<br><?php echo $vaga->funcao ?></li>
		<li>Remunera��o:<br><?php echo $vaga->remuneracao ?></li>
		<li>Descri��o: <br><?php echo $vaga->descricaoVaga ?></li>
		<li>Email para Contato: <br><?php echo $vaga->contatoEmail ?></li>
		<li>Telefone para contato: <br><?php echo $vaga->contatoTelefone ?></li>
		</ul>
		</label>
