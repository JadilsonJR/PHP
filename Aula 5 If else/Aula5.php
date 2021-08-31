<?php
	//IF else
	$nota1=50;

	if($nota1>=70){
		echo "<font color=#00F> <font size=20px >Aprovado Parabens :)";
	}else if($nota1>=50){
		echo "<font color=#F50> <font size=20px>Recuperação Foi Por Pouco";
	}else{
		echo "<font color=#F00> <font size=20px>Reprovado Se Lascou Otario";
	}

	if (($nota1>=40)&($nota1<=60)){
		echo "<hr/>Aluno Selecionado";
	}else{
		echo "<hr/>Aluno Fora da Faixa";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aula 5 If else</title>
	<meta charset="utf-8">
</head>
<body>
	<p> JUNIOR CRUZ </p>
</body>
</html>