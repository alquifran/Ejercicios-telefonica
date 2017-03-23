
1: Listado de clientes con sus datos bancarios

	SELECT `clientes`.`nombre` AS 'Nombre', `cuenta_bancaria`.`banco` AS 'Banco', `cuenta_bancaria`.`sucursal` AS 'Sucursal', `cuenta_bancaria`.`digito_control` AS 'Dígito de control', `cuenta_bancaria`.`n_cuenta` AS 'Número de cuenta'
	FROM `clientes` JOIN `cuenta_bancaria` ON `clientes`.`id` = `cuenta_bancaria`.`clientes_id`
	ORDER BY `clientes`.`nombre`;

	VERSIÓN QUE CONCATENA

		SELECT `clientes`.`nombre` AS 'Nombre', CONCAT(`cuenta_bancaria`.`banco`,' ', `cuenta_bancaria`.`sucursal`, ' ', `cuenta_bancaria`.`digito_control`, ' ', `cuenta_bancaria`.`n_cuenta`) AS 'Número completo de cuenta'
		FROM `clientes` JOIN `cuenta_bancaria` ON `clientes`.`id` = `cuenta_bancaria`.`clientes_id`
		ORDER BY `clientes`.`nombre`;


2:Listado de pedidos de un cliente (busca por NIF):

	VERSIÓN LITERAL

		SELECT `clientes`.`nombre` AS 'Nombre', `clientes`.`nif` AS 'NIF', `pedidos`.`codigo` 'Código del pedido'
		FROM `clientes` JOIN `pedidos` ON `clientes`.`id` = `pedidos`.`clientes_id`
		WHERE `clientes`.`nif` LIKE '12345678f';

	VERSIÓN CON GROUP-CONCAT

		SELECT `clientes`.`nombre` AS 'Nombre', `clientes`.`nif` AS 'NIF', 
		GROUP_CONCAT(`pedidos`.`codigo` SEPARATOR ', ') AS 'Listado de pedidos'
		FROM `clientes` JOIN `pedidos` ON `clientes`.`id` = `pedidos`.`clientes_id`
		WHERE `clientes`.`nif` LIKE '12345678f';


3: Listado de pedidos con el importe total

	SELECT `pedidos`.`codigo` AS 'Código del pedido', 
	SUM(`detalles`.`cantidad` * `detalles`.`precio`) AS 'Importe del pedido' 
	FROM `pedidos` JOIN `detalles` ON `pedidos`.`id` = `detalles`.`pedidos_id`
	GROUP BY `pedidos`.`id`;


4: Listado de clientes e importe total de sus pedidos

	SELECT `clientes`.`nombre` AS 'Nombre', 
	`clientes`.`nif` AS 'NIF', SUM(`detalles`.`precio` * `detalles`.`cantidad`) 
	AS 'Importe de todos sus pedidos'
	FROM `clientes`
	JOIN `pedidos` ON `pedidos`.`clientes_id` = `clientes`.`id`
	JOIN `detalles` ON `detalles`.`pedidos_id` = `pedidos`.`id`
	GROUP BY `clientes`.`id`;

________________________________________________

EXTRAS

Consulta de los 3 productos más vendidos (cantidad)

	SELECT `producto`.`nombre` AS 'Producto', SUM(`detalles`.`cantidad`) AS 'Cantidad' 
	FROM `detalles`
	JOIN `producto` ON `producto`.`id` = `detalles`.`producto_id`
	GROUP BY `detalles`.`producto_id`
	ORDER BY SUM(`detalles`.`cantidad`) DESC
	LIMIT 3;


Cliente que más ha gastado

	SELECT `clientes`.`nombre` AS 'Nombre', SUM(`detalles`.`cantidad` * `detalles`.`precio`)
	FROM `clientes`
	JOIN `pedidos` ON `pedidos`.`clientes_id`=`clientes`.`id`
	JOIN `detalles` ON `detalles`.`pedidos_id`=`pedidos`.`id`
	GROUP BY `clientes`.`id`
	ORDER BY SUM(`detalles`.`cantidad` * `detalles`.`precio`) DESC
	LIMIT 1;