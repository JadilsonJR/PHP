<?php
	$i=0;
	$tam=5;
	for($i=0;$i<=$tam;$i++){
		echo $i."<br/>";
	}

	echo "<br/>________________________________<br/>";
	$vetor=array($tam);

	for($i=0;$i<$tam;$i++){
		$vetor[$i]=$i;
		echo "Valor da Posição ".$vetor[$i]." é: ".$vetor[$i]."<br/>";
	}

	echo "<br/>";

	for($i=0;$i<20;$i++){
		echo "_";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Aula 9 Loop For</title>
</head>
<body>

</body>
</html>