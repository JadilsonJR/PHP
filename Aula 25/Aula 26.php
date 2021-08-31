<?php
//Final significa que o metodo nao pode ser sobreescrito
//Final pode ser usada nas Classes tbm porem nao e permetido a herança
	abstract class CarroBase{
		public $cor;
		public $vel=0;

		function CarroBase($cr){
			$this->cor=$cr;
		}

		function status(){
			echo "<hr/>";
			echo "Carro:".$this->cor;	
			echo "<br/>Velocidade:".$this->vel;
			echo "<hr/>";
		}

		final function cor(){
			echo "<hr/>";
			echo "<br/>Minha Cor:".$this->cor;
			echo "<br/>Metodo original:";
			echo "<hr/>";
		}
	}

	class Carro extends CarroBase{
		/*function cor(){
		echo "<br/>Minha Cor:".$this->cor;
		echo "<br/> Metodo 2";
		}
		*/
	}	

	class Trasp extends CarroBase{
		
	}



	$carro1=new Carro("Vermelho");
	$carro1->cor();
	$tras=new trasp("Verde");
	$tras->cor();
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 25 Classes Final  Pt6 </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>

</body>
</html>