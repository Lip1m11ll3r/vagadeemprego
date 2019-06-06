<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Usuários</title>
</head>
<body>
<?php
include "usuario.php";
$usuario = new Usuarios();
$dados = Usuarios->listar();
?>
<table>
    <tr>
        <td>Id</td>
        <td>Nome</td>

        <td>Opções</td>
    </tr>
<?php
while ($row = $dados->fetch_assoc()) {
        //printf ("%s (%s)\n", $row["idCliente"], $row["nome"]);
        $idCliente = $row["idUsuario"];
        $nome = $row["nome"];

?>
<tr>
        <td><?php echo $idUsuario; ?></td>
        <td><?php echo $nome; ?></td>

        <td><a href="editarCliente.php?idCliente=<?php echo $idUsuario; ?>">Editar</a> - <td><a href="excluirCliente.php?idCliente=<?php echo $idUsuario; ?>">Excluir</a></td>
    </tr>
<?php
    }


?>
</table>
</body>
</html>
