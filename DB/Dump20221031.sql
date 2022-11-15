-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: proyectoejemplo
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `identificacionCliente` varchar(10) NOT NULL,
  `nombreCliente` varchar(30) DEFAULT NULL,
  `apellidoCliente` varchar(30) DEFAULT NULL,
  `telefonoCliente` varchar(10) DEFAULT NULL,
  `direccionCliente` varchar(40) DEFAULT NULL,
  `correoCliente` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`identificacionCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detallefacturacompra`
--

DROP TABLE IF EXISTS `detallefacturacompra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detallefacturacompra` (
  `cantidadProductoCompra` int DEFAULT NULL,
  `valorProductoCompra` int DEFAULT NULL,
  `subtotalCompra` int DEFAULT NULL,
  `facturaCompra_codigoFacturaCompra` varchar(10) NOT NULL,
  `producto_valorIVA` int NOT NULL,
  KEY `fk_detalleFacturaCompra_facturaCompra1_idx` (`facturaCompra_codigoFacturaCompra`),
  KEY `fk_detalleFacturaCompra_producto1_idx` (`producto_valorIVA`),
  CONSTRAINT `fk_detalleFacturaCompra_facturaCompra1` FOREIGN KEY (`facturaCompra_codigoFacturaCompra`) REFERENCES `facturacompra` (`codigoFacturaCompra`),
  CONSTRAINT `fk_detalleFacturaCompra_producto1` FOREIGN KEY (`producto_valorIVA`) REFERENCES `producto` (`valorIVA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detallefacturacompra`
--

LOCK TABLES `detallefacturacompra` WRITE;
/*!40000 ALTER TABLE `detallefacturacompra` DISABLE KEYS */;
/*!40000 ALTER TABLE `detallefacturacompra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detallefacturaventa`
--

DROP TABLE IF EXISTS `detallefacturaventa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detallefacturaventa` (
  `cantidadProductoVenta` int DEFAULT NULL,
  `valorProductoVenta` int DEFAULT NULL,
  `subtotalVenta` int DEFAULT NULL,
  `facturaVenta_codigoFacturaVenta` varchar(10) NOT NULL,
  `producto_valorIVA` int NOT NULL,
  KEY `fk_detalleFacturaVenta_facturaVenta1_idx` (`facturaVenta_codigoFacturaVenta`),
  KEY `fk_detalleFacturaVenta_producto1_idx` (`producto_valorIVA`),
  CONSTRAINT `fk_detalleFacturaVenta_facturaVenta1` FOREIGN KEY (`facturaVenta_codigoFacturaVenta`) REFERENCES `facturaventa` (`codigoFacturaVenta`),
  CONSTRAINT `fk_detalleFacturaVenta_producto1` FOREIGN KEY (`producto_valorIVA`) REFERENCES `producto` (`valorIVA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detallefacturaventa`
--

LOCK TABLES `detallefacturaventa` WRITE;
/*!40000 ALTER TABLE `detallefacturaventa` DISABLE KEYS */;
/*!40000 ALTER TABLE `detallefacturaventa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleado`
--

DROP TABLE IF EXISTS `empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleado` (
  `identificacionEmpleado` varchar(10) NOT NULL,
  `nombreEmpleado` varchar(30) DEFAULT NULL,
  `apellidoEmpleado` varchar(30) DEFAULT NULL,
  `cargoEmpleado` varchar(30) DEFAULT NULL,
  `telefonoEmpleado` varchar(30) DEFAULT NULL,
  `direccionEmpleado` varchar(45) DEFAULT NULL,
  `correoEmpleado` varchar(45) DEFAULT NULL,
  `ARLEmpleado` varchar(45) DEFAULT NULL,
  `EPSEmpleado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`identificacionEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleado`
--

LOCK TABLES `empleado` WRITE;
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturacompra`
--

DROP TABLE IF EXISTS `facturacompra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facturacompra` (
  `codigoFacturaCompra` varchar(10) NOT NULL,
  `fechaFacturaCompra` date DEFAULT NULL,
  `totalFacturaCompra` int DEFAULT NULL,
  `proveedores_codigoProveedor` int NOT NULL,
  `empleado_identificacionEmpleado` varchar(10) NOT NULL,
  PRIMARY KEY (`codigoFacturaCompra`),
  KEY `fk_facturaCompra_proveedores1_idx` (`proveedores_codigoProveedor`),
  KEY `fk_facturaCompra_empleado1_idx` (`empleado_identificacionEmpleado`),
  CONSTRAINT `fk_facturaCompra_empleado1` FOREIGN KEY (`empleado_identificacionEmpleado`) REFERENCES `empleado` (`identificacionEmpleado`),
  CONSTRAINT `fk_facturaCompra_proveedores1` FOREIGN KEY (`proveedores_codigoProveedor`) REFERENCES `proveedores` (`codigoProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturacompra`
--

LOCK TABLES `facturacompra` WRITE;
/*!40000 ALTER TABLE `facturacompra` DISABLE KEYS */;
/*!40000 ALTER TABLE `facturacompra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturaventa`
--

DROP TABLE IF EXISTS `facturaventa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facturaventa` (
  `codigoFacturaVenta` varchar(10) NOT NULL,
  `fechaFacturaVenta` date DEFAULT NULL,
  `totalFacturaVenta` int DEFAULT NULL,
  `cliente_identificacionCliente` varchar(10) NOT NULL,
  `empleado_identificacionEmpleado` varchar(10) NOT NULL,
  PRIMARY KEY (`codigoFacturaVenta`),
  KEY `fk_facturaVenta_cliente1_idx` (`cliente_identificacionCliente`),
  KEY `fk_facturaVenta_empleado1_idx` (`empleado_identificacionEmpleado`),
  CONSTRAINT `fk_facturaVenta_cliente1` FOREIGN KEY (`cliente_identificacionCliente`) REFERENCES `cliente` (`identificacionCliente`),
  CONSTRAINT `fk_facturaVenta_empleado1` FOREIGN KEY (`empleado_identificacionEmpleado`) REFERENCES `empleado` (`identificacionEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturaventa`
--

LOCK TABLES `facturaventa` WRITE;
/*!40000 ALTER TABLE `facturaventa` DISABLE KEYS */;
/*!40000 ALTER TABLE `facturaventa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto` (
  `codigoProducto` int DEFAULT NULL,
  `nombreProducto` varchar(30) DEFAULT NULL,
  `descripcionProducto` varchar(40) DEFAULT NULL,
  `cantidadProducto` int DEFAULT NULL,
  `valorProducto` int DEFAULT NULL,
  `valorIVA` int NOT NULL,
  PRIMARY KEY (`valorIVA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveedores` (
  `codigoProveedor` int NOT NULL,
  `nombreProveedor` varchar(30) DEFAULT NULL,
  `nombreContactoProveedor` varchar(50) DEFAULT NULL,
  `telefonoProveedor` varchar(10) DEFAULT NULL,
  `correoProveedor` varchar(40) DEFAULT NULL,
  `direccionProveedor` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`codigoProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-31 18:41:47
