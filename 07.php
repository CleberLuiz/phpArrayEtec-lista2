<?php 
	$pessoas = array(
					array('cezar','praia grande',16,'M'),
					array('caio','santos',10,'M'),
					array('kaique','guaruja',11,'M'),
					array('jailson','guaruja',19,'M'),
					array('rafael','santos',17,'M'),
					array('cleber','guaruja',18,'M'),
					array('breno','santos',13,'M'),
					array('gabriella','sao vicente',12,'F'),
					array('gabriel','sao vicente',15,'M'),
					array('ivone','santos',16,'F')
				);
	$Homens = 0;

	echo "Todas as Pessoas <br>";
	for ($i=0; $i < 10; $i++) { 
		echo "Nome: ".$pessoas[$i][0]."<br>";
		echo "Idade: ".$pessoas[$i][2]."<br>"."<br>";

	}

	echo "Todas as Pessoas que moram em santos <br>";
	for ($i=0; $i < 10; $i++) { 
		if ($pessoas[$i][1] == "santos") {
			echo "Nome: ".$pessoas[$i][0]."<br>"."<br>";
		}
	}

	echo "Todas as Pessoas Maiores de 18<br>";
	for ($i=0; $i < 10; $i++) { 
		if ($pessoas[$i][2] > 18) {
			echo "Nome: ".$pessoas[$i][0]."<br>"."<br>";
		}
	}
	
	for ($i=0; $i < 10; $i++) { 
		if ($pessoas[$i][3] == "M") {
			$Homens++;
		}
	}

	echo "Numero de homens = ".$Homens;