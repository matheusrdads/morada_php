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
-- Table structure for table `servicos`
--

DROP TABLE IF EXISTS `servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicos` (
  `idservicos` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `descricao` varchar(700) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `parceiro` varchar(100) DEFAULT NULL,
  `mensagem` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idservicos`),
  KEY `fk_servicos_idx` (`usuario`),
  CONSTRAINT `fk_servicos` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicos`
--

LOCK TABLES `servicos` WRITE;
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
INSERT INTO `servicos` VALUES (9,1,'oferecendo','construcao','montagem de forma',NULL,NULL,NULL),(10,2,'oferecendo','manutencao','pequenos serviços de elétrica',NULL,NULL,NULL),(108,3,'solicitando','construcao','pintura',NULL,NULL,NULL),(109,4,'solicitando','construcao','execução de alvenaria',NULL,NULL,NULL),(110,5,'solicitando','construcao','serviço de solda',NULL,NULL,NULL),(111,6,'oferecendo','construcao','reparo de telhados',NULL,NULL,NULL),(112,2,'solicitando','construcao','pintura',NULL,NULL,NULL),(142,10,'solicitando','manutencao','bombeiro hidráulico ',NULL,'gio','Olá vc entende de quadros elétricos?'),(145,1,NULL,'construcao',NULL,NULL,'João','Olá teria um modelo de planta baixa simples pra me passar? '),(146,1,NULL,'construcao',NULL,NULL,'João','Vi que está oferecendo serviço de forma,  quantos metros quadrados seria?'),(147,2,NULL,'manutencao',NULL,NULL,'João','Sou pintor entre em contato comigo cel: 2199998888'),(148,6,NULL,'manutencao',NULL,NULL,'João','Tenho algumas telhas rachadas aqui em casa poderia me ajudar?'),(149,3,NULL,'manutencao',NULL,NULL,'João','Sou pintor, a área é muito grande que voçe precisa pintar.'),(150,4,NULL,'manutencao',NULL,NULL,'João','Sou pedreiro mais não tenho muita experiencia se for pouca coisa posso te ajudar.'),(151,5,NULL,'manutencao',NULL,NULL,'João','Sou soldador, posso te ajudar mas preciso de uma ajuda para levar o equipamento. O serviço é grande?'),(154,8,'oferecendo','construcao','Posso ajudar com a confecção de pequenas armações e lajes pequenas.',NULL,NULL,NULL),(155,9,'solicitando','construcao','Conheco um pouco de alvenaria e emboço para quem precisar.',NULL,NULL,NULL),(156,3,NULL,'manutencao',NULL,NULL,'Lucas','Sou pintor e posso te ajudar');
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;
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
