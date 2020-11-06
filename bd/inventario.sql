-- Dumping database structure for inventario
CREATE DATABASE IF NOT EXISTS `inventario` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `inventario`;

-- Dumping structure for table inventario.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_de_producto` varchar(50) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL DEFAULT 0,
  `peso` int(11) NOT NULL DEFAULT 0,
  `categoria` varchar(50) NOT NULL DEFAULT '0',
  `stock` int(11) NOT NULL DEFAULT 0,
  `fecha_creacion` date NOT NULL DEFAULT '0000-00-00',
  `fecha_ultima_venta` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;