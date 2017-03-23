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

		$i = $start;

		while($i <= $end){
			$result = $number * $i;
			//echo "{$number} * {$i} = {$result}<br>";
			echo "$number * $i = $result <br>";
			$i ++;
		}
	?>
</body>
</html>