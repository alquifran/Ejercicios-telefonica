<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$number = 2;
		$start = 1;
		$end = 10;

		for ($i=$start; $i <= $end; $i++) { 
			$result = $number * $i;
			echo "$number * $i = $result <br>";
		}
	?>
</body>
</html>