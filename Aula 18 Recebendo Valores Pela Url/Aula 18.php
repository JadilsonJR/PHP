<?php
	$texto="Aula de PHP";
	$nome="Junior";
	$sobrenome="Cruz";
	//Link em PHP
	//Passando Variavel por link 
	echo "<a href=pg1.php?tx=".urlencode($texto)."&no=".urlencode($nome)."&sb=".urlencode($sobrenome)." target=_self > Abre pg1 </a>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 18 Passagem de Valores pela Url</title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>

</body>
</html>