<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

		$cerveza = 99;
		while($cerveza >= 0){

			echo (($cerveza==0)?"No quedan":$cerveza)." botella".
				(($cerveza==1)?"":"s")." de cerveza en la pared, <br>";
			echo (($cerveza==0)?"No quedan":$cerveza)." botella".
				(($cerveza==1)?"":"s")." de cerveza. <br>";
			if($cerveza <> 0){
				echo "Coge una y pásala <br>";
				echo --$cerveza." botella".(($cerveza==1)?"":"s").
					" de cerveza en la pared. <br>";
				echo "<br>";
			}
			else{
				echo "Ir a la tienda y comprar algunas más... <br>";
				echo "99 botellas de cerveza";
				$cerveza--;
			}
		}

	?>
</body>
</html>