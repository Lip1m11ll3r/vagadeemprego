<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}
?>

<?php
$categoria = new categoria;
$categorias = $categoria->findAll();
foreach($categorias as $categoria){
?>
<?php echo $categoria->idCategoria  ?>
