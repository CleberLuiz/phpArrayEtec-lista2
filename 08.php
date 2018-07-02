<?php 
	$carros = array(
					array('Uno','Fiat','prata',4,2014),
					array('Fiesta','Ford','preto',2,2015),
					array('Doblo','Fiat','verde',4,2013),
					array('Celta','GM','preto',2,2012),
					array('March','Nissan','prata',2,2015),
					array('Corsa','GM','branco',2,2010),
					array('Ranger','Ford','prata',4,2012),
					array('Trail Blazer','GM','branco',4,2014),
					array('Ecosport','Ford','preto',4,2013),
					array('Tucson','Hyundai','vinho',4,2012)
					);

	echo "Todos os modelos e anos </br> </br>";

	for ($i=0; $i < 10; $i++) { 
		echo $carros[$i][0]." ".$carros[$i][4]."</br>";
	}

	echo "</br> todos os veiculos cor prata </br> </br>";

	for ($i=0; $i < 10; $i++) { 
		if ($carros[$i][2] == "prata") {
			echo $carros[$i][0]."</br>";
		}
	}

	echo "</br> todos os veiculos, cor e quantidade de portas </br> </br>";

	for ($i=0; $i < 10; $i++) { 
		echo $carros[$i][0]." ".$carros[$i][2]." ".$carros[$i][3]."</br>";
	}

	echo "</br> todos os veiculos da ford </br> </br>";

	for ($i=0; $i < 10; $i++) { 
		if ($carros[$i][1] == "Ford") {
			echo $carros[$i][0]."</br>";
		}
	}

	echo "</br> todos os veiculos fabricados a partir de 2013 </br> </br>";

	for ($i=0; $i < 10; $i++) { 
		if ($carros[$i][4] >= 2013) {
			echo $carros[$i][0]."</br>";
		}
	}