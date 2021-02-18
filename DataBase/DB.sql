SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
create database crudclothes;
use crudclothes;
CREATE TABLE IF NOT EXISTS `ropa` (
  'codigo' varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  'nombre' varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  'marca' varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  'color' varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  'talla' varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  'fechaEnv' date COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY ('codigo')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
INSERT INTO 'ropa' ('codigo','nombre', 'marca','color', 'talla', 'fechaEnv') VALUES
('303','Pantalones', 'Adidas','#FFFFFF', 'L', '12/05/2021'),
('450','Camiseta', 'Nike','#FFFFFF', 'S', '25/03/2021'),
('608','Sudadera', 'Carhartt','#FFFFFF', 'M', '06/10/2021');