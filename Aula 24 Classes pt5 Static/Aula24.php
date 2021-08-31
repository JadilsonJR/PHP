<?php
//Static torna uma propriedade de um objeto em propriedade da classe
//($this->)Referencia a propriedade do Objeto
//(self::$)Referencia a propriedade da classe  
	class Carro{
		public $cor;
		public static $vel=0;

		function mudaVel($vl){
			self::$vel=$vl;	
		}

		function Carro($cr){
			$this->cor=$cr;
		}

		function status(){
			echo "<hr/>";
			echo "Cor:".$this->cor;	
			echo "<br/>Velocidade:".self::$vel;
			echo "<hr/>";
		}
	}

	$carro1=new Carro("Vermelho");
	$carro2=new Carro("Azul");
	$carro3=new Carro("Verde");
	$carro1->status();
	$carro2->status(); 
	$carro3->status();

	echo "<hr/>";	
	$carro1->mudaVel(40);
	$carro1->status();
	$carro2->status();
	$carro3->status();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 24 Classes Pt5 </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>

</body>
</html>