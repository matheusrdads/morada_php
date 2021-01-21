CREATE DATABASE  IF NOT EXISTS `moradabd` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `moradabd`;
-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: moradabd
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contato` (
  `idcontato` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `mensagem` varchar(700) NOT NULL,
  `empresa` varchar(45) NOT NULL,
  PRIMARY KEY (`idcontato`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contato`
--

LOCK TABLES `contato` WRITE;
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
INSERT INTO `contato` VALUES (1,'','','leroy@email','213336699988','Quero ajudar doando materiais','leroy');
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicos`
--

DROP TABLE IF EXISTS `servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicos` (
  `idservicos` int NOT NULL AUTO_INCREMENT,
  `usuario` int DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `descricao` varchar(700) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idservicos`),
  KEY `fk_servicos_idx` (`usuario`),
  CONSTRAINT `fk_servicos` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicos`
--

LOCK TABLES `servicos` WRITE;
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` VALUES (7,4,'solicitando','construcao','servico de alvenaria',NULL),(8,5,'solicitando','construcao','serviço de esgoto',NULL),(9,5,'oferecendo','construcao','montagem de forma',NULL),(10,5,'oferecendo','manutencao','pequenos servicços de elétrica',NULL),(11,5,'solicitando','manutencao','serviços de cobertura',NULL),(12,5,'solicitando','construcao','serviços diversos',NULL),(13,5,'solicitando','construcao','esgoto',NULL),(14,5,'solicitando','construcao','pitura',NULL),(15,5,'solicitando','construcao','fundacao',NULL),(17,2,'solicitando','construcao','pintura',NULL);
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `sobre` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'gio','oliveira','gio@gio.com','202cb962ac59075b964b07152d234b70','arquiteta','rua 3','iraja','669988','6655889','sobrado'),(2,'João','Silva','joao@joao.com','202cb962ac59075b964b07152d234b70','Arquiteto','Rua das Andradas','Bairro ABC','22222222','123456789','Apartamento 3'),(3,'Roberto','roberto','matheus@matheus','202cb962ac59075b964b07152d234b70','','rua9','ffgg','346','34566','dghhj'),(4,'marcos','oliveira','marcos@gmail.com','202cb962ac59075b964b07152d234b70','pintor','avenide 45','iraja','2345','23455','fundos'),(5,'pedro',NULL,'pedro@gmail.com','202cb962ac59075b964b07152d234b70',NULL,NULL,NULL,NULL,NULL,NULL),(6,'matheus albuquerque',NULL,'mat@mat.com','202cb962ac59075b964b07152d234b70',NULL,NULL,NULL,NULL,NULL,NULL),(8,'henrrique',NULL,'henrrique@henrrique','202cb962ac59075b964b07152d234b70',NULL,NULL,NULL,NULL,NULL,NULL),(9,'ricardo',NULL,'ricardo@ricardo','202cb962ac59075b964b07152d234b70',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'moradabd'
--

--
-- Dumping routines for database 'moradabd'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-20 22:34:10
