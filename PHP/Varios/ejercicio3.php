<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$people = [
			[
				'name' => 'Juan', 'age' => 16
			],
			[
				'name' => 'Paco', 'age' => 2345
			]
		];

		// Ejercicio hecho por mi
		$difference = abs($people[0]['age'] - $people[1]['age']);
		switch ($people[0]['age'] <=> $people[1]['age']) {
			case 1:
				echo "Diferencia: ".$difference.". ".
				$people[0]['name']." es mayor que ".$people[1]['name'];
				break;
			
			case 0:
				echo $people[0]['name']." tiene la misma edad que ".$people[1]['name'];
				break;
			case -1:
				echo "Diferencia: ".$difference.". ".
				$people[0]['name']." es menor que ".$people[1]['name'];
				break;
		}

		//Ejercicio profesor

		$diff = $people[0]['age'] - $people[1]['age'];

		$diff = $diff < 0 ? $diff *-1 : $diff;
		$pos = ($people[0]['age'] <=> $people[1]['age']);

		switch ($pos) {
			case '-1':
				echo "{$people[0]['name']} es menor que {$people[1]['name']}";
				break;
			
			case '1':
				echo "{$people[0]['name']} es mayor que {$people[1]['name']}";
				break;
			case '0':
				echo "Misma edad";
		}

	
	?>
</body>
</html>


