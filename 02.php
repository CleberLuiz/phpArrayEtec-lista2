<?php 
	$numeros = array(1,2,3,4,5,6,7,8,9,10);
	$Negativos = 0;
	$Positivos = 0;
	$Pares = 0;
	$Impar = 0;

	for ($i=0; $i < 10; $i++) { 
		if ($numeros[$i] < 0) {
			$Negativos++;
		}
	}

	for ($i=0; $i < 10; $i++) { 
		if ($numeros[$i] > 0) {
			$Positivos++;
		}
	}

	for ($i=0; $i < 10; $i++) { 
		if ($numeros[$i] % 2 == 0) {
			$Pares++;
		}else{
			$Impar++;
		}
	}

	echo "Numeros negativos = ".$Negativos."</br>";
	echo "Numeros positivos = ".$Positivos."</br>";

	echo "Numeros impar = ".$Impar."</br>";
	echo "Numeros pares = ".$Pares."</br>";