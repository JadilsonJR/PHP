<?php 
	//Variaveis
	$vnome="Junior";
	$vnum=10;
	$vnum2=12.5;
	$vsoma=0;

	echo "Variavel 1: $vnome</br>";
	echo "Variavel 2:".$vnum."</br>";
	echo "Variavel 3: $vnum2</br>";
	$vsoma=$vnum+$vnum2;
	echo "Variavel Soma:$vsoma </br>";

	//Costante
	//Fazendo a Costante
	define("cnome", "Cruz");
	echo"<hr/>";
	//Mostrando a Costante

	echo "Costante 1:".cnome."</br>";
	echo "Nome do Diretorio:".__FILE__."</br>";

	define("ver",PHP_VERSION);
	echo "Versao do PHP:".ver."</br>";
	
	define('dir',__DIR__);
	echo "Pasta: ".dir."</br>";

	echo "Versão do SO:".PHP_OS."</br>";
	echo "Numero da Linha:".__LINE__."</br>";

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aula 2 PHP</title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>