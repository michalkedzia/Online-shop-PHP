-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: shop
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
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` VALUES (1,'95-035','test 78','Ozorków',1),(2,'95-035','test 78','Ozorków',2),(3,'95-035','test 78','Ozorków',3),(4,'95-035','test 78','Ozorków',4),(5,'78-874','Prosta 87','Łódź',5),(6,'10-874','Prosta 41','łódz',6),(7,'95-035','test 78','Ozorków',7),(8,'98-544','test 78','Łódź',8),(9,'85-978','Prosta 41','łódz',9),(10,'98-789','Prosta 87','Łódź',10);
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (2,'admin','21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Laptopy'),(2,'Telefony'),(3,'Telewizory'),(4,'Drukarki');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,1,'test@test.com','123456789'),(2,2,'test@test.com','123456789'),(3,3,'test@test.com','123456789'),(4,4,'test@testcom','123456789'),(5,5,'jankowalski@wp.pl','123456789'),(6,6,'jmalinowski@gmail.com','123456789'),(7,7,'email@gamil.com','123456789'),(8,8,'jnowak@gmail.com','123456789'),(9,9,'5484@gmail.com','789456123'),(10,10,'pkowlaski@gmail.com','122789478');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (10,1,8,1,'Laptop HP Chrome Book'),(11,2,8,1,'Lenovo ThinkPad'),(12,1,9,2,'Laptop HP Chrome Book'),(13,5,9,2,'Huawei P30'),(14,2,10,1,'Lenovo ThinkPad'),(15,8,11,1,'Samsung 65'),(16,6,11,1,'Xiaomi Note 8'),(17,1,12,3,'Laptop HP Chrome Book'),(18,5,12,1,'Huawei P30'),(19,2,13,1,'Lenovo ThinkPad'),(20,2,14,2,'Lenovo ThinkPad'),(21,2,15,2,'Lenovo ThinkPad'),(22,2,16,1,'Lenovo ThinkPad'),(23,1,16,2,'Laptop HP Chrome Book'),(24,9,17,1,'Sony LED'),(25,1,18,1,'Laptop HP Chrome Book'),(26,3,18,1,'DELL Latitude ');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,1,'Laptop HP Chrome Book',2000,2,'Laptop-HP-Chromebook-11A-G6-AMD-4GB-16GB-2019r.jpg','Przekątna ekranu: 12.5\"\nRozdzielczość (px): 1366 x 768\nModel procesora: Intel Core i5-4300U\nLiczba rdzeni procesora: 2\nWielkość pamięci RAM: 8 GB\nPojemność dysku: 128GB\nTyp dysku twardego: SSD\nModel karty graficznej: Intel HD Graphics 4400'),(2,1,'Lenovo ThinkPad',1500,1,'Lenovo-ThinkPad-X131E-4GB-250GB-HDMI-USB-3-0-W7-10.jpg','Przekątna ekranu:11.6\"\nRozdzielczość (px):1366 x 768\nProcesor: AMD A4-9120C\nTaktowanie procesora: 1600MHz\nLiczba rdzeni procesora: 2\nPamięć RAM: 4GB DDR4\nDysk: 16GB Flash'),(3,1,'DELL Latitude ',2500,5,'DELL-Latitude-e6540-i7-16GB-NOWY-SSD-480GB-W10.jpg','Przekątna ekranu:15.6\"\nRozdzielczość (px):1366 x 768\nSeria procesora:Intel Core i5\nLiczba rdzeni procesora:2\nTaktowanie bazowe procesora:2.5 GHz\nWielkość pamięci RAM:8 GB\nPojemność dysku:240 GB\nModel karty graficznej:Intel HD Graphics 4000'),(4,2,'Apple IPhone 11 PRO',3000,2,'Apple-IPHONE-11-PRO-64-GB-GRATIS.jpg','Przekątna ekranu:5.8\"\nRodzaj wyświetlacza:OLED\nRozdzielczość aparatu tylnego:12 Mpx\nRozdzielczość aparatu przedniego:12 Mpx\nWbudowana pamięć:256 GB\nPamięć RAM:4 GB\nSystem operacyjny:iOS\nPojemność akumulatora:3190 mAh'),(5,2,'Huawei P30',1500,4,'Smartfon-Huawei-P30-PRO-128GB.jpg','Przekątna ekranu:6.47\"\nRodzaj wyświetlacza:OLED\nRozdzielczość aparatu tylnego:40 Mpx\nRozdzielczość aparatu przedniego:32 Mpx\nProcesor:HiSilicon Kirin 980\nWbudowana pamięć:128 GB\nPamięć RAM:6 GB\nPojemność akumulatora:4200 mAh'),(6,2,'Xiaomi Note 8',1000,5,'Smartfon-Xiaomi-Redmi-Note8-Pro-6-128GB-zielony.jpg','Przekątna ekranu:6.53\"\nRodzaj wyświetlacza:LCD IPS\nRozdzielczość aparatu tylnego:64 Mpx\nRozdzielczość aparatu przedniego:20 Mpx\nProcesor:Mediatek Helio G90T\nCzęstotliwość procesora:2 GHz\nWbudowana pamięć:128 GB\nPamięć RAM:6 GB'),(7,3,'Samsung 55',5000,10,'Telewizor-55-Samsung-QE55Q7FNA-QLED-4K-HDR.jpg','\nModel:UE55TU8502U\nTyp telewizora:QLED\nPrzekątna ekranu (cale):55\nFormat HD:4K UHD\nRozdzielczość ekranu (px):3840 x 2160\nSystem dźwięku:2.0\nTechnologie dźwięku:Dolby Digital'),(8,3,'Samsung 65',6000,6,'Telewizor-65-Samsung-QE65Q67RAT-QLED.jpg','\nModel:QE65Q67RAT\nTyp telewizora:QLED\nPrzekątna ekranu (cale):65\nFormat HD:4K UHD\nRozdzielczość ekranu (px):3840 x 2160\nSystem dźwięku:2.0\nTechnologie dźwięku:Dolby Digital Plus'),(9,3,'Sony LED',8000,2,'TELEWIZOR-SONY-LED-KDL-50WF665-FullHD-SmartTV-HDR.jpg','\nModel:KDL-50WF665\nTyp telewizora:LED\nPrzekątna ekranu (cale):50\nFormat HD:Full HD\nRozdzielczość ekranu (px):1920 x 1080\nSystem dźwięku:2.0\nTechnologie dźwięku:Dolby Digital'),(10,4,'HP Smart Tank 500',549,7,'Drukarka-HP-Smart-Tank-500.jpg','\nTechnologia druku:atramentowa (kolor)\nMaksymalny format papieru:A4\nPrędkość druku w czerni:22 str./min\nPrędkość druku w kolorze:16 str./min\nRozdzielczość druku w czerni (dpi):1200 x 1200\nRozdzielczość druku w kolorze (dpi):4800 x 1200'),(11,4,'Lexmark CX510',874,8,'Lexmark-CX510de-Drukarka-Kolor-Skan-Siec-Dupleks.jpg','\nTechnologia druku:laserowa (kolor)\nMaksymalny format papieru:A4\nPrędkość druku w czerni:30 str./min\nPrędkość druku w kolorze:30 str./min\nRozdzielczość druku w czerni (dpi):2400 x 600\nRozdzielczość druku w kolorze (dpi):2400 x 600');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (6,8,'Przygotowane do wysłania'),(7,9,'Wysłane'),(8,10,'Przygotowane do wysłania'),(9,11,'Przygotowane do wysłania'),(10,12,'Zlozone przez uzytkownika'),(11,13,'Wysłane'),(12,14,'Zlozone przez uzytkownika'),(13,15,'Zlozone przez uzytkownika'),(14,16,'Wysłane'),(15,17,'Zlozone przez uzytkownika'),(16,18,'Zlozone przez uzytkownika');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'test','test','test','81dc9bdb52d04dc20036dbd8313ed055'),(2,'test','test','test1','962012d09b8170d912f0669f6d7d9d07'),(3,'test','test','test2','b30f6977736109b3a76fcd5e623321cc'),(4,'test','test','wq','7815696ecbf1c96e6894b779456d330e'),(5,'Jan','Kowalski','jkowalski','962012d09b8170d912f0669f6d7d9d07'),(6,'Jan','Malinowski','jmalinowski','7815696ecbf1c96e6894b779456d330e'),(7,'Jan','Jankowski','jan','76d80224611fc919a5d54f0ff9fba446'),(8,'Jan','Nowak','jnowak','962012d09b8170d912f0669f6d7d9d07'),(9,'Jan','Kowal','test5','098f6bcd4621d373cade4e832627b4f6'),(10,'Paweł','Kowalski','pkowalski','e113ccd32d3b88da2a373fc47b7e28ef');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `userorder`
--

LOCK TABLES `userorder` WRITE;
/*!40000 ALTER TABLE `userorder` DISABLE KEYS */;
INSERT INTO `userorder` VALUES (8,5,'jkowalski',0),(9,6,'jmalinowski',7000),(10,6,'jmalinowski',1500),(11,7,'jan',7000),(12,8,'jnowak',7500),(13,5,'jkowalski',1500),(14,5,'jkowalski',3000),(15,9,'test5',3000),(16,9,'test5',5500),(17,10,'pkowalski',8000),(18,10,'pkowalski',4500);
/*!40000 ALTER TABLE `userorder` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-05  9:53:34
