<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajajajaja</title>
</head>
<body>
	<?php
		$name = 'Holaaa';
		echo $name;
		echo '<br>';
		echo $name;
		var_dump($name);
		$hola =<<<'EOD'
		
		Esto es un asdf<br>
		asdfdsafadfs
EOD;
		$num = 5;
		$mul = 3;
		echo "<br>El resultado de multiplicar $num por $mul es: ".$num*$mul."<br>";
		echo "$hola"."<br>";
		echo '$hola <br>';
		define("MI_CONSTANTE", "La Gran Web");
		$variable = "E";
		echo constant("MI_CONSTANT".$variable);
		echo "<br>";
		echo "<br>";

		$pregunta =[
			"a",
			"b",
			2 => "c",
			"1" => "d",
			false => "e"
		];
		var_dump($pregunta);
		echo $pregunta=== ["e", "d", "c"];

	?>
</body>
</html>