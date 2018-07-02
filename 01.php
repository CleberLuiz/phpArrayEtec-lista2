<?php 
	$alunos = array(
					array('cleber',1),
					array('pedro',2),
					array('joao',3),
					array('cezar',4),
					array('caio',5),
					array('claudia',6),
					array('carlos',7),
					array('clarice',8),
					array('lucas',9),
					array('micaeli',10)
				);
	$media = 0;

	for ($i=0; $i < 10; $i++) { 
		$media += $alunos[$i][1];
	}

	$media = $media/10;

	echo "a media da sala foi = ".$media."</br>";


	$maior = $alunos[0][1];

	for ($i=0; $i < 10; $i++) { 
		if ($maior < $alunos[$i][1]) {
			$maior = $alunos[$i][1];
		}
	}

	echo "maior nota da sala foi = ".$maior."</br>";