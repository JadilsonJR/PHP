<?php
//Classes 
//Propriedades e Metodos => Costrutor == o que inicia o Metodo da Classe

 	class Carro{
 		var $tipo; //1= Passeio, 2=Esporte, 3=Utilitario
 		var $velMax;
 		var $nome;
 		var $liga;
 		var $vel;

 		function Carro($tp,$no){
 			$this->liga=0;
 			$this->nome=$no;
 			$this->vel=0;
 			$this->tipo=$tp;
 			if($tp==1){
 				$this->velMax=160;
 			}else if($tp==2){
 				$this->velMax=300;
 			}else{
 				$this->velMax=100;
 			}
 		}

 		function ligar(){
 			$this->liga=1;
 		}

 		function desligar(){
 			$this->liga=0;
 		}

 		function velocidade($vl){
 			if($vl > $this->velMax){
 				$this->vel=$this->velMax;
 			}else{
 				$this->vel=$vl;
 			}
 		}

 		function id(){
 			echo"<hr/>";
 			echo "Nome do Carro:".$this->nome;
 			echo "<br/>Tipo do Carro:". $this->tipo;
 			echo "<br/>Velocidade Maxima:".$this->velMax;
 			echo "<br/> Velocidade Atual:".$this->vel;

 			if ($this->liga == 1){
 				echo "<br/> Carro ligado";
 			}else{
 				echo "<br/> Carro Desligado";
 			}
 		}
 	}
	
	$carro1=new Carro(2,"Speed");
	$carro1->ligar();
	$carro1->velocidade(200);
	$carro1->id();

	$carro2=new Carro(3,"Trabalhador");
	$carro2->ligar();
	$carro2->velocidade(400);
	$carro2->id();

	$carro3=new Carro(1,"Family");
	$carro3->velocidade(100);
	$carro3->ligar();
	$carro3->desligar();
	$carro3->id();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula 20 Classes Pt1 </title>
	<meta charset="utf-8">
	<meta name="Author" content="Junior Cruz">
</head>
<body>

</body>
</html>
