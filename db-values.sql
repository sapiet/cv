-- MySQL dump 10.13  Distrib 8.0.13, for macos10.14 (x86_64)
--
-- Host: localhost    Database: cv
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `experience`
--

LOCK TABLES `experience` WRITE;
/*!40000 ALTER TABLE `experience` DISABLE KEYS */;
INSERT INTO `experience` VALUES (250,44,'Ci-Oniya','Lead Developer','2020-12-01 00:00:00',NULL,'Mise en place de la boutique <a href=\"https://ci-oniya.com/\" target=\"_blank\">Ci-Oniya</a> avec Prestashop / Création d\'un outils d\'optimisation des découpes de pièces en javascript','Marcq-en-baroeul'),(251,44,'Synapse Interactive','Lead Developer','2019-08-19 00:00:00',NULL,'Conception d\'un outils de création de newsletter avec Symfony 4 et VueJS / Migration de deux sites sous Symfony 5 / Maintenance des outils existants sous Symfony et CodeIgniter','Marcq-en-baroeul'),(252,44,'Webgump','Lead Developer','2016-01-01 00:00:00',NULL,'Développement de l\'application mobile <a href=\"https://www.youpicity.com\" target=\"_blank\">Youpicity</a> sous Ionic et Symfony4 / Refonte de l\'application mobile','Marcq-en-baroeul'),(253,44,'WebdealAuto','Développeur web','2014-04-18 00:00:00','2019-08-02 00:00:00','Développement du site mobile sous Symfony2, développement d\'outils marketing sous Symfony1, intégration de la refonte graphique du site marchand (bootstrap / gulp / scss / jQuery), développement du nouveau logiciel d\'expédition avec Angular6 et une API Symfony3, développement d\'un WMS avec Angular et intégration dans Cordova, refonte technique du backend avec Symfony3, MongoDB, ElasticSearch, RabbitMQ','Villeneuve d\'Ascq'),(254,44,'Réflexe Adoption','Développeur web','2013-01-01 00:00:00','2013-01-01 00:00:00','Refonte du site de l’association Réflexe Adoption et création d’un back-office permettant la gestion des animaux, la consultation des questionnaires et des messages, l’édition du forum','Marcq-en-baroeul'),(255,44,'Lille Art Trianon','Développeur web','2013-01-01 00:00:00','2013-01-01 00:00:00','Création du site de l’atelier galerie Le Trianon à Lille','Marcq-en-baroeul'),(256,44,'FabienAssist06','Développeur web','2013-01-01 00:00:00','2013-01-01 00:00:00','Création du site d’un technicien en maintenance informatique et d’un back-office avec gestion des clients, interventions et facturation','Marcq-en-baroeul'),(257,44,'Hautes Loges Animation','Développeur web','2012-01-01 00:00:00','2012-01-01 00:00:00','Création du site de l’association des Hautes Loges de Marcqen-Baroeul «Hautes Loges Animation» et son back-office','Marcq-en-baroeul'),(258,44,'DevSources','Développeur web','2012-01-01 00:00:00','2012-01-01 00:00:00','Création d’un site de ressources concernant les langages du web.','Marcq-en-baroeul'),(259,44,'Wanted Solutions','Stage développeur web','2012-01-01 00:00:00','2012-01-01 00:00:00','Mise à jour du site web, création d’un back-office pour la gestion des candidats, des offres et un système de matching candidats / offres.','Roubaix'),(260,44,'OpenClassrooms','Mentor','2021-05-06 00:00:00',NULL,'Accompagnement d\'étudiants dans leur formation de développeur web','Marcq-en-Barœul');
/*!40000 ALTER TABLE `experience` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `formation`
--

LOCK TABLES `formation` WRITE;
/*!40000 ALTER TABLE `formation` DISABLE KEYS */;
INSERT INTO `formation` VALUES (103,44,'Lycée Yves Kernanec','Baccalauréat général scientifique option musique','2009-01-01 00:00:00',NULL,'','Marcq-en-baroeul'),(104,44,'C.M.A. (Centre des Musiques Actuelles)','Formation de Musique Assistée par Ordinateur','2010-01-01 00:00:00',NULL,'','Valenciennes'),(105,44,'Afpa','Formation de développeur logiciel','2012-01-01 00:00:00',NULL,'','Roubaix'),(106,44,'OpenClassrooms','Certification \"Développez des applications Web avec Angular\"','2019-10-16 00:00:00','2019-10-16 00:00:00','',NULL);
/*!40000 ALTER TABLE `formation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` VALUES ('20200107174852','2020-01-07 19:14:08');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES (44,'Xavier','Quièvre','xavier.quievre@gmail.com','07 81 25 65 74','https://xavierquievre.fr','Développeur web','Développeur <span>Web</span>, <span>Mobile</span> et <span>Application</span>.<br> <a class=\"smoothscroll\" href=\"#about\">Scrollez</a> pour en savoir plus <a class=\"smoothscroll\" href=\"#about\">sur moi</a>.','<p>J\'ai découvert la programmation en 2012 et celle-ci est très vite devenue une passion, après avoir été formé à différents langages web et logiciels, j\'ai approfondi mes connaissances dans le développement web.</p>','7, Allée des Coutilliers','59700','Marcq-en-Barœul');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `skill`
--

LOCK TABLES `skill` WRITE;
/*!40000 ALTER TABLE `skill` DISABLE KEYS */;
INSERT INTO `skill` VALUES (340,44,'PHP7',75),(341,44,'Symfony 1/2/3/4',70),(342,44,'HTML5 / CSS3 / SCSS',65),(343,44,'jQuery',70),(344,44,'NodeJS',50),(345,44,'Angular 2+ / Ionic',60),(346,44,'VueJS',60),(347,44,'MySQL',65),(348,44,'Docker',50),(349,44,'MongoDB',50),(350,44,'ElasticSearch',50);
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `social`
--

LOCK TABLES `social` WRITE;
/*!40000 ALTER TABLE `social` DISABLE KEYS */;
INSERT INTO `social` VALUES (36,'fab fa-github','Voir mes projets sur Github','https://github.com/sapiet',44);
/*!40000 ALTER TABLE `social` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `work`
--

LOCK TABLES `work` WRITE;
/*!40000 ALTER TABLE `work` DISABLE KEYS */;
INSERT INTO `work` VALUES (522,44,'Ci-Oniya','Mise en place de la boutique en ligne et développement d\'un outils d\'optimisation des découpes','ci-oniya.png','https://www.youpicity.com',1),(523,44,'Youpicity','Développement de l\'application Youpicity v1 et v2 avec Ionic / Symfony','youpicity.png','https://www.youpicity.com',2),(524,44,'WMS WebdealAuto','Refonte du logiciel d\'expédition avec NodeWebkit, Angular6 et une API sous Symfony3, développement d\'un backoffice de gestion de stock (réception / rangement / inventaire)','wms.png',NULL,3),(525,44,'Backoffice WebdealAuto','Création d\'un nouveau backoffice sous Symfony3 en préparation de la mise en place d\'un ERP','seraphin.png',NULL,4),(526,44,'Harlec','Mise en place d\'une page vitrine sans framework pour présenter l\'Harlec, un vélo hybride à mi chemin entre la moto et le vélo','harlec.png','https://www.harlec.com/',5),(527,44,'Avec Ton Vélo','Mise en place d\'un site sous Prestashop et intégration du design','avectonvelo.png','https://avectonvelo.com',6),(528,44,'WebdealAuto','Refonte visuelle du site marchand sous Symfony 1.4 avec gulp, scss, bootstrap et jQuery','webdealauto-design.png','https://www.webdealauto.com',7),(529,44,'WebdealAuto','Développement d\'outils sous Symfony 1.4 (gestion du catalogue de pièces / équipementiers / modes de livraison / menus des sites / imprimantes / avis de prélèvement pour la comptabilité / paramètres)','webdealauto-admin-tools.png','https://www.webdealauto.com',8),(530,44,'WebdealAuto Marketing','Développement d\'outils marketing sous Symfony 1.4 (gestion des bannières, offres promotionnelles, scripts de création et d\'envoi de newsletters, intégration de tag d\'affiliation, jeux concours)','webdealauto-marketing.png','https://www.webdealauto.com',9),(531,44,'WebdealAuto mobile','Développement d\'un site mobile sous Symfony 2 pour la société WebdealAuto','webdealauto-mobile-main-menu.png','https://m.webdealauto.com',10),(532,44,'Sapiet','Site musicien, dates, groupes, intégration Youtube et Soundcloud.\n                                    Création d\'un espace réservé à la lecture et au téléchargement de\n                                    musique en cours de composition.','sapiet.png','http://sapiet.free.fr',11),(533,44,'Reflexe Adoption','Refonte du site de l’association\n                                    et création d\'un back-office permettant la gestion\n                                    des animaux, la consultation des questionnaires,\n                                    des messages et des dons et parainnages, l’édition du forum.','reflexeadoption.png',NULL,12),(534,44,'Galerie Le Trianon','Création du site de l’atelier galerie Le Trianon à Lille','trianon.png',NULL,13),(535,44,'Fabien-Assist06 v.2','Mise à jour du site d\'un technicien\n                                    en maintenance informatique (structure et design)\n                                    et création d\'un backoffice.','fabienassist-v2.png',NULL,14),(536,44,'Hautes Loges Animation','Création du site de l\'association des\n                                    Hautes Loges et d\'un backoffice sur mesure\n                                    permettant de gérer le contenu.','hautesloges.png','http://hautes-loges-animation.fr',15),(537,44,'DevSources','Projet personnel regroupant des ressources\n                                    et plugins concernant les langages du web, à visionner et\n                                    à télécharger.','devsources.png',NULL,16),(538,44,'Equity-curve v.3','Troisième évolution d\'une application concernant le trading\n                                    proposant des graphiques en temps réel au format\n                                    image générés en PHP, contrôlables grâce à des\n                                    \"boîtes à outils\" fonctionnant en JavaScript.','equitycurve-v3.png',NULL,17),(539,44,'Equity-curve v.2','Seconde application concernant le trading avec un\n                                    nouveau mode de représentation, des graphiques en\n                                    JavaScript ainsi qu\'un système de messagerie\n                                    instantanée pour un pilotage des utilisateurs.','equitycurve-v2.png',NULL,18),(540,44,'Wanted Solutions','Mise à jour et optimisation du site, création\n                                    d\'un espace dédié aux candidats ainsi qu\'un\n                                    backoffice sur-mesure permettant une gestion des\n                                    clients et des CV ainsi qu\'un matching de correspondance\n                                    personnalisable.','wantedsolutions.png',NULL,19),(541,44,'Equity-curve v.1','Application d\'aide au trading avec des fonctionnalités\n                                    comme les alertes sonores et visuelles, la gestion de\n                                    la mise en page.','equitycurve-v1.png',NULL,20);
/*!40000 ALTER TABLE `work` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-06 12:31:16
