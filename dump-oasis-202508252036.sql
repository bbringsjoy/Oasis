-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: oasis
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `diarias_atuais`
--

DROP TABLE IF EXISTS `diarias_atuais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `diarias_atuais` (
  `id_atuais` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_residencias` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_atuais`),
  KEY `id_residencias` (`id_residencias`),
  CONSTRAINT `diarias_atuais_ibfk_1` FOREIGN KEY (`id_residencias`) REFERENCES `residencias` (`id_residencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diarias_atuais`
--

LOCK TABLES `diarias_atuais` WRITE;
/*!40000 ALTER TABLE `diarias_atuais` DISABLE KEYS */;
/*!40000 ALTER TABLE `diarias_atuais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diarias_totais`
--

DROP TABLE IF EXISTS `diarias_totais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `diarias_totais` (
  `id_totais` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_residencias` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_totais`),
  KEY `id_residencias` (`id_residencias`),
  CONSTRAINT `diarias_totais_ibfk_1` FOREIGN KEY (`id_residencias`) REFERENCES `residencias` (`id_residencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diarias_totais`
--

LOCK TABLES `diarias_totais` WRITE;
/*!40000 ALTER TABLE `diarias_totais` DISABLE KEYS */;
/*!40000 ALTER TABLE `diarias_totais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `enderecos` (
  `id_endereco` bigint(20) NOT NULL AUTO_INCREMENT,
  `rua` varchar(100) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `numero_casa` bigint(20) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id_endereco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enderecos`
--

LOCK TABLES `enderecos` WRITE;
/*!40000 ALTER TABLE `enderecos` DISABLE KEYS */;
/*!40000 ALTER TABLE `enderecos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locador`
--

DROP TABLE IF EXISTS `locador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `locador` (
  `id_locador` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome_locador` varchar(255) NOT NULL,
  `email_locador` varchar(255) NOT NULL,
  `id_atuais` bigint(20) DEFAULT NULL,
  `id_totais` bigint(20) DEFAULT NULL,
  `id_residencia` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_locador`),
  KEY `id_atuais` (`id_atuais`),
  KEY `id_totais` (`id_totais`),
  KEY `id_residencia` (`id_residencia`),
  CONSTRAINT `locador_ibfk_1` FOREIGN KEY (`id_atuais`) REFERENCES `diarias_atuais` (`id_atuais`),
  CONSTRAINT `locador_ibfk_2` FOREIGN KEY (`id_totais`) REFERENCES `diarias_totais` (`id_totais`),
  CONSTRAINT `locador_ibfk_3` FOREIGN KEY (`id_residencia`) REFERENCES `residencias` (`id_residencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locador`
--

LOCK TABLES `locador` WRITE;
/*!40000 ALTER TABLE `locador` DISABLE KEYS */;
/*!40000 ALTER TABLE `locador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `residencias`
--

DROP TABLE IF EXISTS `residencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `residencias` (
  `id_residencia` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipo_residencia` varchar(200) NOT NULL,
  `id_endereco` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_residencia`),
  KEY `id_endereco` (`id_endereco`),
  CONSTRAINT `residencias_ibfk_1` FOREIGN KEY (`id_endereco`) REFERENCES `enderecos` (`id_endereco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `residencias`
--

LOCK TABLES `residencias` WRITE;
/*!40000 ALTER TABLE `residencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `residencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id_usuario` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(255) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `id_atuais` bigint(20) DEFAULT NULL,
  `id_totais` bigint(20) DEFAULT NULL,
  `senha` bigint(20) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `cpf` (`cpf`),
  KEY `id_atuais` (`id_atuais`),
  KEY `id_totais` (`id_totais`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_atuais`) REFERENCES `diarias_atuais` (`id_atuais`),
  CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_totais`) REFERENCES `diarias_totais` (`id_totais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'oasis'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-08-25 20:36:40
