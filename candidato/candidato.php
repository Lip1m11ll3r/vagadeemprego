<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}
?>

<?php
$usuario = new usuario;
$usuario = $usuario->find($_GET['id']);
?>
<label >
<ul>
<ol> Nome:<br><?php echo $usuario->nome ?></ol>
<ol> Documento:<br><?php echo $usuario->documento ?></ol>
<ol> Contato:<br><?php echo $usuario->Contato ?></ol>
<ol> Dscrição:<br><?php echo $usuario->descricao ?></ol>
<ol> Telefone:<br><?php echo $usuario->telefone ?></ol>
<ol> Curriculum:<br><?php echo $usuario->arquivo ?></ol>
</ul>
