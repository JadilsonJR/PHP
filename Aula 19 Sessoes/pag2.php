<?php
	//Recebendo os Valores por sessoes
	session_start();
	echo "<h3> Terceira Pagina </h3>";
	echo $_SESSION['vnome'];
	echo "<br/>".$_SESSION['vtexto'];
	echo "<br/>".$_SESSION['vcanal'];

	
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
	<a href="pag1.php" target="self">Segunda Pagina</a>
	<br/>
	<a href="Aula 19.php" target="self">Primeira Pagina</a>
	
</body>
</html>