<?php
	//Classe Abstrata nao pode instanciar ou seja nao é criado um objeto

	//Metodos Abstratos nao pode ter escrita no escopo
	
	abstract class CarroBase{
		public $potencia;
		public $velMax;
		public $portas;
		public $ligado=false;

		function ligado(){
			$this->ligado=true;
		}

		function desligado(){
			$this->ligado=true;
		}

		function status(){
			echo "<hr/>";
			echo "Potencia:".$this->potencia;
			echo "<br/>Velocidade Maxima:".$this->velMax;
			echo "<br/>Numeros de Portas:".$this->portas;
			echo "<br/>";
			if($this->ligado==true){
				echo"<br/> Carro Ligado";
			}else{
				echo"<br/> Carro Desligado";
			}
			echo "<hr/>";
		}
	}	

	class carro extends CarroBase{
		function carro($pt,$vm,$po){
			$this->potencia=$pt;
			$this->velMax=$vm;
			$this->portas=$po;
			$this->status();
			} 
		}
	
	$carro1=new carro(200,280,4);
	$carro2=new carro(100,180,2);
	$carro3=new carro(300,480,2);
	
?>

<!DOCTYPE html>
<html lang="pt-br"> 
<head>
	<title>Aula 22 Classes Pt3 Classes Abastratas </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>

</body>
</html>
