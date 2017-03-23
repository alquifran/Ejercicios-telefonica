<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$open = ['from' => 10.00, 'to' => 20.00];
		$t = 9.00;

		if($t >= $open['from'] && $t < $open['to']){
			echo "<h1>Abierto</h1>";
		}
		else{
			echo "<h1>Cerrado</h1>";
		}
		?>
</body>
</html>


