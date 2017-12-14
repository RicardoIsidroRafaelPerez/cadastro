<?php

	$dsn = 'mysql:host=localhost;dbname=cadastro';
	$user = 'root';
	$password = '';

	$conexion = new PDO($dsn,$user,$password);

	$stmt = $conexion->query("SELECT * FROM clientes ORDER BY id desc;");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
</head>
<body>
	<table>
		<thead>
			<tr style="font-size: 15px; background: #ddd;">
				<th>ID</th>
				<th>Nombre</th>
				<th>CPF</th>
				<th>RG</th>
				<th>Teléfono</th>
				<th>E-Mail</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($stmt as $valor) {
				 	
			?>
			<tr>
				<td><?php echo $valor['id']; ?></td>
				<td><?php echo $valor['nom']; ?></td>
				<td><?php echo $valor['cpf']; ?></td>
				<td><?php echo $valor['rg']; ?></td>
				<td><?php echo $valor['tel']; ?></td>
				<td><?php echo $valor['email']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

	<a href="index.html">Menú principal</a>

</body>
</html>