<?php 
	$numeros = array(1,2,3,4,5,6,7,8,9,10);
	$usuario = 1;

	for ($i=0; $i < 10; $i++) { 
		echo $numeros[$i]." X ". $usuario. " = ". $numeros[$i] * $usuario."</br>";
	}