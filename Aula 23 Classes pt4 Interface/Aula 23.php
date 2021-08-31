<?php
//Interface é um modelo para as classes abstratas 
//A interface nao pode implementar propriedades.
//Uma Classe pode implementar varias interface.
//Voce implementa a interface na classe atravez do metodo (implements) 
//Inteface Regra de Definiçao para criar classes 
	interface CarroPadrao{
		function liga();
		function desliga();
		function status();
		function acelera();
		function frea();
	}

	interface CarroGuerra{
		function atiraCanhao();
		function atiraMetralhadora();
	}

	abstract class CarroBase implements CarroPadrao, CarroGuerra{
		public $potencia;
		public $VelMax;
		private $ligado=false;

		function liga(){
			$this->ligado=true;
		}

		function desliga(){
			$this->ligado=false;
		}

		function status(){
			echo "<hr/>";
			echo "<br/>Potencia:".$this->potencia;
			echo "<br/>Velocidade Maxima".$this->VelMax;
			echo "<br/>";
			if($this->ligado){
				echo "Carro Ligado";
			}else{
				echo "Carro Desligado";
			}
			echo "<hr/>";
		}

		function acelera(){
		}

		function frea(){
		}

		function atiraCanhao(){}
		function atiraMetralhadora(){}
	}

	class Carro extends CarroBase{
		function Carro($pt,$vm){
			$this->potencia=$pt;
			$this->VelMax=$vm;
			$this->liga();
			$this->status();

		}
	}

	$carro1=new Carro(150,200);


	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 23 Classes Pt4 </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>

</body>
</html>
