<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $book[0]['titulo']?></title>
</head>
<body>
	<h1>Descripción</h1>
	Título: <?= $book[0]['titulo']?> <br>
	Autor: <?= $book[0]['autor']?> <br><br>
	Descripción: <?= $book[0]['desc']?> <br><br>

	<a href="index.php"><button>Volver a la lista</button></a>
	<a href=<?= "edit.php?edit=".$book[0]['id']?>> <button>Editar info</button></a>
</body>
</html>