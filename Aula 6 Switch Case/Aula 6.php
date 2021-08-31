<?php
	$opc=4;
	switch ($opc) {
		case 1:
			echo "Carro";
			break;
		case 2:
			echo "Moto";
			break;
		case 3:
			echo "Bicicleta";
			break;	
		case 4:
			echo "Navio";
			break;	
		case 5:
			echo "Avião";
			break;	
		default:
			echo "Invalido OTARIO";
			break;
	}
	echo "<hr/>";
	switch ($opc) {
		case ($opc<=3 and $opc >0):
			echo "Trasporte Terrestre";
			break;
		case 4:
			echo "Trasporte Maritimo";
			break;
		case 5:
			echo "Trasporte Aereo";
			break;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Aula 6 Switch Case</title>
	<meta charset="utf-8">
</head>
<body>
	<p> JUNIOR CRUZ </p>
</body>
</html>