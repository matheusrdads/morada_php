-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: moradabd
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
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
  `estrela` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Giovana','Oliveira','gio@gmail.com','202cb962ac59075b964b07152d234b70','arquiteta','Rua  da Chegada','Terreirão','26070-000','2199998888','sobrado','3'),(2,'João','Silva','joao@gmail.com','202cb962ac59075b964b07152d234b70','Pintor','Rua do Arquiteto','Terreirão','26070-000','2199998888','Apartamento 3','4'),(3,'Roberto','Braga','matheus@gmail.com','202cb962ac59075b964b07152d234b70','pedreiro','Rua Esperança','Terreirão','26070-000','2199998888','esquina','2'),(4,'Marcos','Oliveira','marcos@gmail.com','202cb962ac59075b964b07152d234b70','pintor','Rua HW','Terreirão','26070-000','2199998888','fundos','1'),(5,'Pedro','Pamplona','pedro@gmail.com','202cb962ac59075b964b07152d234b70','ajudante','Rua DW','Terreirão','26070-000','2199998888','quadra ','4'),(6,'Matheus','Andrade','mat@gmail.com','202cb962ac59075b964b07152d234b70','engenheiro','Av Canal das Taxas','Terreirão','26070-000','2199998888','fundos','3'),(8,'Henrrique','Souza','henrrique@gmail.com','202cb962ac59075b964b07152d234b70','armador','Rua Projetada Bw','Terreirão','26070-000','2199998888','apartamento 4','4'),(9,'Ricardo','Silva','ricardo@gmail.com','202cb962ac59075b964b07152d234b70','pedreiro','Rua Cinco H','Terreirão','26070-000','2199998888','rua 3','1'),(10,'Mario','Andrade','mario@gmail.com','202cb962ac59075b964b07152d234b70','vendedor','Rua Geraldo Irineo','Terreirão','26070-000','2199998888','sobrado','3'),(11,'Lucas',NULL,'lucas@gmail.com','e10adc3949ba59abbe56e057f20f883e',NULL,'Rua da Chegada',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-21  0:27:36
