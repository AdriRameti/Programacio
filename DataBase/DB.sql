-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: crudclothes
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `accesories`
--

DROP TABLE IF EXISTS `accesories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `accesories` (
  `codA` int NOT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `tamaño` varchar(10) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `fechaEn` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accesories`
--

LOCK TABLES `accesories` WRITE;
/*!40000 ALTER TABLE `accesories` DISABLE KEYS */;
/*!40000 ALTER TABLE `accesories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `codCat` int NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codCat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (10,'Camiseta','vistas/img/tshirts.jpg'),(11,'Formal','vistas/img/formal.jpg'),(12,'Sudadera','vistas/img/hoodies.jpg'),(13,'Sneakers','vistas/img/sneakers.jpg'),(14,'Accesories','vistas/img/accesories.jpg'),(15,'Vaqueros','vistas/img/jeans.jpg'),(16,'Camisa','vistas/img/shirt.jpg'),(17,'Pantalon','vistas/img/pants.jpg'),(18,'Chaqueta','vistas/img/jacket.jpg');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `details` (
  `codigo` int NOT NULL,
  `talla1` varchar(255) DEFAULT NULL,
  `talla2` varchar(255) DEFAULT NULL,
  `talla3` varchar(255) DEFAULT NULL,
  `talla4` varchar(255) DEFAULT NULL,
  `descriptotal` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `details`
--

LOCK TABLES `details` WRITE;
/*!40000 ALTER TABLE `details` DISABLE KEYS */;
INSERT INTO `details` VALUES (11,'S','M','L','XL','Camiseta inspirada en el diseño original de la marca con el estampado del logotipo GUESS en la parte frontal de la camiseta.'),(321,'S','M','L','XL','Pantalon de nueva tendencia. Con el estampado de la marca NIKE en pequeño en la parte baja del bolsillo y un estampado de NIKE en la pierna sobre una franja negra.'),(444,'S','M','L','XL','Polo de nueva tendencia con el estampado basico de Nike en la parte superior izquierda.'),(987,'S','M','L','XL','Camisa tradicional con la insignia de GUESS en la parte baja del bolsillo en la parte superior izquierda de la camisa.'),(1122,'S','M','L','XL','Sudadera clasica de la marca con el logotipo bordado en el centro superior de esta.'),(1151,'S','M','L','XL','Pantalon jogger de nueva temporada con el logotipo ubicado en la parte superior izquierda.'),(1331,'S','M','L','XL','Vaqueros clasicos con el nombre de la marca estampado en un parche de polipiel en el bolsillo trasero derecho'),(1333,'S','M','L','XL','Chaqueta formal de temporada primavera verano, con el logotipo bordado en la parte superior izquierda'),(1441,'S','M','L','XL','Vaqueros de nueva inspiración y tendencia con el nombre de la marca impreso en un lateral del pantalon y desgastes en las rodillas y otras partes del pantalon'),(2131,'S','M','L','XL','Chaqueta tradicional de la marca ADIDAS con la edicion de su modelo SUPERSTAR'),(3112,'S','M','L','XL','Camiseta inspirada en el diseño original de la marca con el estampado del logotipo Adidas en la parte frontal de la camiseta y las tribarra blanca tan característica de la marca.'),(3322,'S','M','L','XL','Boxlogo SUPREME tradicional, con la marca bordada en el centro superior'),(7458,'S','M','L','XL','Camiseta NIKE con colaboración de su modelo JUST DO IT.'),(8888,'S','M','L','XL','Camiseta clásica con el estampado del logo de la marca NIKE en la parte superior derecha del artículo'),(9999,'S','M','L','XL','Camiseta formal con la insignia de la marca GUESS en la parte superior izquierda.');
/*!40000 ALTER TABLE `details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `imagenes` (
  `codigo` int NOT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` VALUES (11,'vistas/img/details/guess1.jpg','vistas/img/details/guess2.jpg','vistas/img/details/guess3.jpg','vistas/img/details/guess4.jpg'),(321,'vistas/img/details/pantalonNike1.jpg','vistas/img/details/pantalonNike2.jpg','vistas/img/details/pantalonNike3.jpg','vistas/img/details/pantalonNike4.jpg'),(444,'vistas/img/details/poloNike1.jpg','vistas/img/details/poloNike2.jpg','vistas/img/details/poloNike3.jpg','vistas/img/details/poloNike4.jpg'),(987,'vistas/img/details/camiGuess1.jpg','vistas/img/details/camiGuess2.jpg','vistas/img/details/camiGuess3.jpg','vistas/img/details/camiGuess4.jpg'),(1122,'vistas/img/details/thf1.jpg','vistas/img/details/thf2.jpg','vistas/img/details/thf3.jpg','vistas/img/details/thf4.jpg'),(1151,'vistas/img/details/carhartt1.jpg','vistas/img/details/carhartt2.jpg','vistas/img/details/carhartt3.jpg','vistas/img/details/carhartt4.jpg'),(1331,'vistas/img/details/vaquerosGuess1.jpg','vistas/img/details/vaquerosGuess2.jpg','vistas/img/details/vaquerosGuess3.jpg','vistas/img/details/vaquerosGuess4.jpg'),(1333,'vistas/img/details/polo1.jpg','vistas/img/details/polo2.jpg','vistas/img/details/polo3.jpg','vistas/img/details/polo4.jpg'),(1441,'vistas/img/details/supreme1.jpg','vistas/img/details/supreme2.jpg','vistas/img/details/supreme3.jpg','vistas/img/details/supreme4.jpg'),(2131,'vistas/img/details/chaquetaAdidas1.jpg','vistas/img/details/chaquetaAdidas2.jpg','vistas/img/details/chaquetaAdidas3.jpg','vistas/img/details/chaquetaAdidas4.jpg'),(3112,'vistas/img/details/adidas1.jpg','vistas/img/details/adidas2.jpg','vistas/img/details/adidas3.jpg','vistas/img/details/adidas4.jpg'),(3322,'vistas/img/details/boxlogo1.jpg','vistas/img/details/boxlogo2.jpg','vistas/img/details/boxlogo3.jpg','vistas/img/details/boxlogo4.jpg'),(7458,'vistas/img/details/justdoit1.jpg','vistas/img/details/justdoit2.jpg','vistas/img/details/justdoit3.jpg','vistas/img/details/justdoit4.jpg'),(8888,'vistas/img/details/nike1.jpg','vistas/img/details/nike2.jpg','vistas/img/details/nike3.jpg','vistas/img/details/nike4.jpg'),(9999,'vistas/img/details/guess5.jpg','vistas/img/details/guess6.jpg','vistas/img/details/guess7.jpg','vistas/img/details/guess8.jpg');
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ropa`
--

DROP TABLE IF EXISTS `ropa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ropa` (
  `codigo` int NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `talla` varchar(30) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `fechaEnv` varchar(50) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `visitas` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ropa`
--

LOCK TABLES `ropa` WRITE;
/*!40000 ALTER TABLE `ropa` DISABLE KEYS */;
INSERT INTO `ropa` VALUES (11,'Camiseta','Guess','#000000','L','vistas/img/categorias/cami_guess.jpg','01/31/2021','35€','Camiseta Original GUESS','37'),(321,'Pantalon','Nike','#bd9e9e','S','vistas/img/categorias/pantalon_nike.jpg','01/23/2021','45€','Pantalón chandal NIKE','0'),(444,'Camisa','Nike','#ff00d4','L','vistas/img/categorias/camisa_nike.jpg','01/29/2021','40€','Polo nueva tendencia NIKE','0'),(987,'Camisa','Guess','#00ff59','S','vistas/img/categorias/camisa_guess.jpg','02/03/2021','95€','Camisa limited GUESS','1'),(1122,'Sudadera','The North Face','#000000','M','vistas/img/categorias/sudadera_thf.jpg','02/26/2021','125€','Sudadera NEW SCHOOL','6'),(1151,'Pantalon','Carhartt','#000000','S','vistas/img/categorias/pantalon_carhartt.jpg','04/09/2021','130€','Pantalón JOGGER MULTITASK','0'),(1331,'Vaqueros','Guess','#000000','M','vistas/img/categorias/vaqueros_guess.jpg','02/27/2021','80€','Classic jeans GUESS','1'),(1333,'Chaqueta','Polo Ralph Lauren','#000000','M','vistas/img/categorias/chaqueta_polo.jpeg','03/31/2021','160€','XRE jacket formal','0'),(1441,'Vaqueros','Supreme','#ff0000','XL','vistas/img/categorias/vaqueros_supreme.jpg','04/13/2021','145€','Limited Supreme Jeans','0'),(2131,'Chaqueta','Adidas','#000000','L','vistas/img/categorias/chaqueta_adidas.jpg','03/27/2021','45€','Chaqueta ADIDAS X SUPERSTAR','0'),(3112,'Camiseta','Adidas','Rojo','S','vistas/img/categorias/cami_adidas.jpg','01/05/2021','35€','Camiseta ADIDAS ORIGINAL','4'),(3322,'Sudadera','Supreme','#000000','XL','vistas/img/categorias/suda_supreme.png','02/18/2021','1500€','Limited Boxlogo SUPREME','6'),(7458,'Camiseta','Nike','#000000','L','vistas/img/categorias/cami_nike.jpg','02/25/2021','30€','Camiseta NIKE X JUST Do IT','38'),(8888,'Camiseta','Nike','Rojo','XL','vistas/img/categorias/cami_nike2.jpg','01/05/2021','35€','Camiseta Nike ORIGINAL','0'),(9999,'Camiseta','Guess','Rojo','S','vistas/img/categorias/cami_guess2.jpg','01/05/2021','35€','Camiseta ADIDAS ORIGINAL','13');
/*!40000 ALTER TABLE `ropa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sneakers`
--

DROP TABLE IF EXISTS `sneakers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sneakers` (
  `codS` int NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `talla` varchar(10) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `fechaE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sneakers`
--

LOCK TABLES `sneakers` WRITE;
/*!40000 ALTER TABLE `sneakers` DISABLE KEYS */;
INSERT INTO `sneakers` VALUES (1111,NULL,'Nike','Air Max','40',NULL,'01-02-2021');
/*!40000 ALTER TABLE `sneakers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-03 16:54:10