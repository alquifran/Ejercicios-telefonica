<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$open = [
		'l' => [[10.00, 14.00], [16.00, 20.00]],
		'm' => [[10.00, 14.00], [16.00, 20.00]],
		'x' => [[10.00, 14.00], [16.00, 20.00]],
		'j' => [[10.00, 14.00], [16.00, 20.00]],
		'v' => [[10.00, 14.00], [16.00, 20.00]],
		's' => [[10.00, 20.00]],
		'd' => []
	];
	// var_dump($open['d']);
	// if($open['d'] == []){
	// 	echo "tus muertos";
	// }
	$day = 'd';
	$time = 16.00;	
	$abierto = false;
	foreach($open[$day] as $times){
		if($time >= $times[0] && $time < $times[1]){
			$abierto = true;
		}
	}
	if($abierto){
		echo "Está abierto";
	}
	else{
		echo "Está cerrado";
	}
	?>
</body>
</html>



