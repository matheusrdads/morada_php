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
  `parceiro` varchar(100) DEFAULT NULL,
  `mensagem` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idservicos`),
  KEY `fk_servicos_idx` (`usuario`),
  CONSTRAINT `fk_servicos` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicos`
--

LOCK TABLES `servicos` WRITE;
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` VALUES (9,1,'oferecendo','construcao','montagem de forma',NULL,NULL,NULL),(10,2,'oferecendo','manutencao','pequenos servicços de elétrica',NULL,NULL,NULL),(108,3,'solicitando','construcao','pintura',NULL,NULL,NULL),(109,4,'solicitando','construcao','execução de alvenaria',NULL,NULL,NULL),(110,5,'solicitando','construcao','serviço de solda',NULL,NULL,NULL),(111,6,'oferecendo','construcao','reparo de telhados',NULL,NULL,NULL),(112,2,'solicitando','construcao','pintura',NULL,NULL,NULL),(142,10,'solicitando','manutencao','bombeiro hidráulico ',NULL,'gio','Olá vc entende de quadros elétricos?'),(145,1,NULL,'construcao',NULL,NULL,'João','Olá teria um modelo de planta baixa simples pra me passar? '),(146,1,NULL,'construcao',NULL,NULL,'João','Vi que está oferecendo serviço de forma,  quantos metros quadrados seria?'),(147,2,NULL,'manutencao',NULL,NULL,'João','Sou pintor entre em contato comigo cel: 2199998888'),(148,6,NULL,'manutencao',NULL,NULL,'João','Tenho algumas telhas rachadas aqui em casa poderia me ajudar?'),(149,3,NULL,'manutencao',NULL,NULL,'João','Sou pintor, a área é muito grande que voçe precisa pintar.'),(150,4,NULL,'manutencao',NULL,NULL,'João','Sou pedreiro mais não tenho muita experiencia se for pouca coisa posso te ajudar.'),(151,5,NULL,'manutencao',NULL,NULL,'João','Sou soldador, posso te ajudar mas preciso de uma ajuda para levar o equipamento. O serviço é grande?'),(154,8,'oferecendo','construcao','Posso ajudar com a confecção de pequenas armações e lajes pequenas.',NULL,NULL,NULL),(155,9,'solicitando','construcao','Conheco um pouco de alvenaria e emboço para quem precisar.',NULL,NULL,NULL);
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
  `estrela` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'giovana','oliveira','gio@gmail.com','202cb962ac59075b964b07152d234b70','arquiteta','rua 3','Terreirão','26070-000','2199998888','sobrado','5'),(2,'João','Silva','joao@gmail.com','202cb962ac59075b964b07152d234b70','Pintor','Rua das Andradas','Terreirão','26070-000','2199998888','Apartamento 3','3'),(3,'roberto','roberto','matheus@gmail.com','202cb962ac59075b964b07152d234b70','pedreiro','rua9','Terreirão','26070-000','2199998888','esquina','2'),(4,'marcos','oliveira','marcos@gmail.com','202cb962ac59075b964b07152d234b70','pintor','avenide 45','Terreirão','26070-000','2199998888','fundos','1'),(5,'pedro','pamplona','pedro@gmail.com','202cb962ac59075b964b07152d234b70','ajudante','rua 5','Terreirão','26070-000','2199998888','quadra ','4'),(6,'matheus','albuquerque','mat@gmail.com','202cb962ac59075b964b07152d234b70','engenheiro','avenida treze de maio','Terreirão','26070-000','2199998888','fundos','3'),(8,'henrrique','souza','henrrique@gmail.com','202cb962ac59075b964b07152d234b70','armador','avenida 12','Terreirão','26070-000','2199998888','apartamento 4','4'),(9,'ricardo','silva','ricardo@gmail.com','202cb962ac59075b964b07152d234b70','pedreiro','rua gonzaga','Terreirão','26070-000','2199998888','rua 3','1'),(10,'mario','andrade','mario@gmail.com','202cb962ac59075b964b07152d234b70','vendedor','beco 12','Terreirão','26070-000','2199998888','sobrado','3');
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

-- Dump completed on 2021-02-20 11:19:42
