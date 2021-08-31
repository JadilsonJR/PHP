<?php
//Funçao sem Parametro
	function Ola()
	{
		echo "Olá Mundo<br/>";
	}
//Funçao com Parametro 	
	function soma($n1,$n2){
		$total=$n1+$n2;
		echo "<br/> A soma de $n1 com $n2 é igual a:$total<br/>";
	}
	soma(5,5);
//Funçao com Parametro retornando so o Resultado
	function soma2($n1,$n2){
		$total=$n1+$n2;
		return($total);
	}
	$somas2=soma2(15,5);
	echo "O resultado é :$somas2";
//Funçao recebendo Array
	$valores=array(1,3,5,7,9,12,6,4,20,18);
	function media($val){
		$tam=count($val);
		$soma=0;
		for($i=0;$i<$tam;$i++){
			$soma+=$val[$i];
		}
		return($soma/$tam);
	}	
	$med=media($valores);
	echo "<br/>A media é igual a :$med<br/>";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 12 Funçoes</title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior">
</head>
<body>
</body>
</html>