<?php
	//Recebendo os Valores por sessoes
	session_start();
	if ($_SESSION['vlog']=="s") {
		$_SESSION['vcanal']="Prof.Bruno";
		echo "<h3> Segunda Pagina </h3>";
		echo $_SESSION['vnome'];
		echo "<br/>".$_SESSION['vtexto'];
	

	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 19 Sessoes </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>
<br/><br/>
	<a href="pag2.php" target="self">Terceira Pagina</a>
	<br/>
	<a href="Aula 19.php" target="self">Primeira Pagina</a>
</body>
</html>

<?php
}else{
	echo "Faça um acesso na pagina anterior";
}


?>