<?php
	$trasporte=array("Carro","Moto","Bicicleta","Onibus","Avião");
	$veiculo;
	//foreach serve para listar um array
	foreach ($trasporte as $veiculo){
		echo "$veiculo<br/>";
	}
	echo "<hr/>";
	foreach ($trasporte as $veiculo){
		if ($veiculo =="Bicicleta"){
			echo "Bicicleta está na Lista de veiculos<br/>";
			break;
		}
		if($veiculo == "Avião"){
			echo "Avião está na Lista de veiculos";
		}
	}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 10 Loop FOREACH</title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>