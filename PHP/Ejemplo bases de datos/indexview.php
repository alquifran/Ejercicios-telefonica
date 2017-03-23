<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Libros</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

	<table >
		<tr>
			<th>Título</th>
			<th>Autor</th>
		</tr>

		<?php foreach ($books as $book): ?>
			<tr>
				<td> <a href=<?= "show.php?show=".$book['id']?> >
					<?= $book['titulo'] ?>		
				</a></td>
				<td><?= $book['autor'] ?></td>
				
			</tr>
		<?php endforeach ?>
	</table>

	<a href="new.php"><button>Añadir un libro nuevo</button></a>
</body>
</html>