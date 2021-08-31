<?php
	function aula($num)
	{
		if($num != 0){
			echo "Funçao aula com Valor: $num <br/>";
			aula($num-1);
		}
	}
	//aula(10);

	function fatorial($num){
		if($num<0){
			return -1;
		}
		if ($num <=1){
			return 1;
		}
		return$num*fatorial($num-1);
	}
	echo "Fatorial de 10: ".fatorial(10);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 14 Funçao Recursivas <title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior">
</head>
<body>
</body>
</html>