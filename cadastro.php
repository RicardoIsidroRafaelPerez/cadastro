<?php

	$con = mysqli_connect('localhost','root','','cadastro');

	if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

	$nom = mysqli_real_escape_string($con, $_POST['nom']);
	$cpf = mysqli_real_escape_string($con, $_POST['cpf']);
	$rg = mysqli_real_escape_string($con, $_POST['rg']);
	$tel = mysqli_real_escape_string($con, $_POST['tel']);
	$email = mysqli_real_escape_string($con, $_POST['email']);

	$sql = "INSERT INTO clientes(nom,cpf,rg,tel,email) VALUES('$nom','$cpf','$rg','$tel','$email')";
	$res = mysqli_query($con,$sql);

	if ($res == true) {
		$cadastro = 1;
	}else{
		$cadastro = 0;
	}

?>