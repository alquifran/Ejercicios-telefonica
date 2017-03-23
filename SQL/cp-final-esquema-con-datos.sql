
DROP SCHEMA IF EXISTS `entidad` ;

CREATE SCHEMA `entidad`;
USE `entidad` ;

DROP TABLE IF EXISTS `entidad`.`clientes` ;

CREATE TABLE IF NOT EXISTS `entidad`.`clientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(250) NULL,
  `telefono` DECIMAL(9) NULL,
  `nif` VARCHAR(9) NOT NULL UNIQUE,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `entidad`.`cuenta_bancaria` ;

CREATE TABLE IF NOT EXISTS `entidad`.`cuenta_bancaria` (
  `banco` DECIMAL(4) NOT NULL,
  `sucursal` DECIMAL(4) NOT NULL,
  `digito_control` DECIMAL(2) NOT NULL,
  `n_cuenta` DECIMAL(10) NOT NULL,
  `clientes_id` INT NOT NULL,
  PRIMARY KEY (`banco`, `sucursal`, `digito_control`, `n_cuenta`, `clientes_id`),
  INDEX `fk_cuenta_bancaria_clientes_idx` (`clientes_id` ASC),
  CONSTRAINT `fk_cuenta_bancaria_clientes`
    FOREIGN KEY (`clientes_id`)
    REFERENCES `entidad`.`clientes` (`id`)
);

DROP TABLE IF EXISTS `entidad`.`producto` ;

CREATE TABLE IF NOT EXISTS `entidad`.`producto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fabricante` TEXT(30) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(250) NULL,
  PRIMARY KEY (`id`))
;

DROP TABLE IF EXISTS `entidad`.`pedidos` ;

CREATE TABLE IF NOT EXISTS `entidad`.`pedidos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `codigo` VARCHAR(45) NOT NULL UNIQUE,
  `fecha_creacion` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_aceptacion` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comentarios` VARCHAR(250) NULL,
  `clientes_id` INT NOT NULL,
  PRIMARY KEY (`id`, `clientes_id`),
  INDEX `fk_pedidos_clientes1_idx` (`clientes_id` ASC),
  CONSTRAINT `fk_pedidos_clientes1`
    FOREIGN KEY (`clientes_id`)
    REFERENCES `entidad`.`clientes` (`id`)
);

DROP TABLE IF EXISTS `entidad`.`detalles` ;

CREATE TABLE IF NOT EXISTS `entidad`.`detalles` (
  `pedidos_id` INT NOT NULL,
  `producto_id` INT NOT NULL,
  `precio` DECIMAL(10,2) NULL,
  `cantidad` DECIMAL(3) NULL,
  PRIMARY KEY (`pedidos_id`, `producto_id`),
  CONSTRAINT `fk_pedidos_has_producto_pedidos1`
    FOREIGN KEY (`pedidos_id`)
    REFERENCES `entidad`.`pedidos` (`id`),
  CONSTRAINT `fk_pedidos_has_producto_producto1`
    FOREIGN KEY (`producto_id`)
    REFERENCES `entidad`.`producto` (`id`)
);

INSERT INTO `clientes` ( `nombre`, `direccion`, `telefono`, `nif`) 
VALUES ('fran', 'calle mala', '111111111', '12345678f');
INSERT INTO `clientes` ( `nombre`, `direccion`, `telefono`, `nif`) 
VALUES ('fran2', 'calle mala2', '211111111', '22345678f');
INSERT INTO `clientes` ( `nombre`, `direccion`, `telefono`, `nif`) 
VALUES ('El vecino', 'su casa', '123456789', '13131313v');

INSERT INTO `cuenta_bancaria` (`banco`, `sucursal`, `digito_control`, `n_cuenta`, `clientes_id`) 
VALUES ('1234', '4321', '12', '1111111111', '1');
INSERT INTO `cuenta_bancaria` (`banco`, `sucursal`, `digito_control`, `n_cuenta`, `clientes_id`) 
VALUES ('1234', '4321', '13', '1111111112', '2');
INSERT INTO `cuenta_bancaria` (`banco`, `sucursal`, `digito_control`, `n_cuenta`, `clientes_id`) 
VALUES ('1234', '4321', '14', '1111111113', '3');


INSERT INTO `pedidos` ( `codigo`, `comentarios`, `clientes_id`) 
VALUES ('A00000000', 'Primer pedido', '1');
INSERT INTO `pedidos` ( `codigo`, `comentarios`, `clientes_id`) 
VALUES ('A00000001', 'Segundo pedido', '2');
INSERT INTO `pedidos` ( `codigo`, `comentarios`, `clientes_id`) 
VALUES ('A00000002', 'Tercer pedido', '1');
INSERT INTO `pedidos` ( `codigo`, `comentarios`, `clientes_id`) 
VALUES ('A00000003', 'Pedido aaaaaa', '3');

INSERT INTO `producto` (`fabricante`, `nombre`, `descripcion`) 
VALUES ('Mercadona', 'Escoba', 'Barredora profesional de toda la vida');
INSERT INTO `producto` (`fabricante`, `nombre`, `descripcion`) 
VALUES ('Eroski', 'Aspirador', 'Enemigo natural de la escoba del Mercadona');
INSERT INTO `producto` (`fabricante`, `nombre`, `descripcion`) 
VALUES ('Lidl', 'ROOMBA', 'Ríe desde la lejanía mientras carga con el gato');
INSERT INTO `producto` (`fabricante`, `nombre`, `descripcion`) 
VALUES ('Perrera', 'Perro mocho', 'No limpia, pero por el aspecto podría');

INSERT INTO `detalles` (`pedidos_id`, `producto_id`, `precio`, `cantidad`) 
VALUES ('1', '2', '25', '5');
INSERT INTO `detalles` (`pedidos_id`, `producto_id`, `precio`, `cantidad`) 
VALUES ('1', '3', '199.99', '5');
INSERT INTO `detalles` (`pedidos_id`, `producto_id`, `precio`, `cantidad`) 
VALUES ('1', '4', '199.99', '4');
INSERT INTO `detalles` (`pedidos_id`, `producto_id`, `precio`, `cantidad`) 
VALUES ('2', '1', '2', '2');
INSERT INTO `detalles` (`pedidos_id`, `producto_id`, `precio`, `cantidad`) 
VALUES ('2', '2', '25', '7');
INSERT INTO `detalles` (`pedidos_id`, `producto_id`, `precio`, `cantidad`) 
VALUES ('2', '3', '199.99', '2');
INSERT INTO `detalles` (`pedidos_id`, `producto_id`, `precio`, `cantidad`) 
VALUES ('2', '4', '199.99', '235');
INSERT INTO `detalles` (`pedidos_id`, `producto_id`, `precio`, `cantidad`) 
VALUES ('3', '1', '2', '100');
INSERT INTO `detalles` (`pedidos_id`, `producto_id`, `precio`, `cantidad`) 
VALUES ('3', '3', '259.99', '1');
INSERT INTO `detalles` (`pedidos_id`, `producto_id`, `precio`, `cantidad`) 
VALUES ('3', '4', '199.99', '1');
INSERT INTO `detalles` (`pedidos_id`, `producto_id`, `precio`, `cantidad`) 
VALUES ('4', '1', '2', '1');
INSERT INTO `detalles` (`pedidos_id`, `producto_id`, `precio`, `cantidad`) 
VALUES ('4', '2', '25', '2');
INSERT INTO `detalles` (`pedidos_id`, `producto_id`, `precio`, `cantidad`) 
VALUES ('4', '3', '199.99', '3');
INSERT INTO `detalles` (`pedidos_id`, `producto_id`, `precio`, `cantidad`) 
VALUES ('4', '4', '199.99', '1');

