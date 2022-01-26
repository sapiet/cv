-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 26 jan. 2022 à 15:12
-- Version du serveur :  8.0.13
-- Version de PHP : 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cv`
--

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id`, `profile_id`, `company`, `job_name`, `start_date`, `end_date`, `description`, `city`) VALUES
(250, 44, 'Ci-Oniya', 'Lead Developer', '2020-12-01', NULL, 'Mise en place de la boutique <a href=\"https://ci-oniya.com\" title=\"Boutique Ci-Oniya\" target=\"_blank\">Ci-Oniya</a>\r\nCréation d\'une interface web <a href=\"https://ci-oniya.com/calculateur-de-decoupe-de-piece\" title=\"Calculateur de découpe de pièce\" target=\"_blank\">d\'optimisation des découpes de pièces</a>\r\nStack: HTML5 / CSS3 / Javascript / VueJS / Prestashop', 'Marcq-en-barœul'),
(251, 44, 'Synapse Interactive', 'Lead Developer', '2019-08-19', '2022-02-28', 'Maintenance et évolution du parc de projets autour de la monétisation d\'audience.\r\nConception d\'un outils de création et d\'envoi de newsletters.\r\nMigration des sites institutionnels avec un builder de sites statiques maison avec Symfony.\r\nDéveloppement d\'un système de facturation.\r\nCréation de systèmes de monitoring pour les points critiques.\r\nMise en place d\'algorithmes de traitement des données.\r\nStack: HTML5 / CSS3 / PHP7 / Symfony3 / Symfony4 / Symfony5 / VueJS / NodeJS / ExpressJS / Webpack / CodeIgniter / MySQL', 'Marcq-en-baroeul'),
(252, 44, 'Webgump', 'Co-founder & Lead Developer', '2016-09-01', NULL, 'Création de <a href=\"https://www.youpicity.com\" target=\"_blank\">Youpicity</a>, application de jeux de piste en extérieur ou escape games maison.\r\nDéveloppement d\'une API pour permettre l\'accès aux jeux depuis mobile et l\'édition des parcours depuis une interface web\r\nMise en place de procédures de déploiement\r\nConception des bases de données\r\nStack: HTML5 / CSS3 / Symfony4 / Api platform / Ionic / Angular / MySQL', 'Marcq-en-baroeul'),
(253, 44, 'WebdealAuto', 'Développeur web', '2014-04-18', '2019-08-02', 'Développement des briques panier et gestion client du site mobile.\r\nMise en place d\'outils et de solutions marketing\r\nIntégration de la refonte graphique du site marchand.\r\nDéveloppement d\'un logiciel d\'expédition et de son API, afin de pouvoir gérer le traitement des commandes et l\'impression automatisée des étiquettes selon les différents transporteurs.\r\nCréation d\'une application mobile WMS permettant de gérer les stocks à l\'aide d\'un device muni d\'un scanner\r\nStack: HTML5 / CSS3 / SASS / Gulp / Symfony3 / Symfony2 / Symfony1 / Bootstrap / jQuery / Angular / Cordova / NW.js / MongoDB / ElasticSearch / RabbitMQ', 'Villeneuve d\'Ascq'),
(254, 44, 'Réflexe Adoption', 'Développeur web', '2013-01-01', '2013-01-01', 'Création de la nouvelle version du site de l’association avec des fiches animaux, un moyen de paiement et un forum\r\nMise en place d\'un parrainage pour les animaux, les utilisateurs financent une partie ou totalité des soins à effectuer selon les soins restants\r\nCréation d’un back-office permettant la gestion des animaux, la consultation des questionnaires et des messages, l’édition du forum\r\nStack: HTML / PHP / CSS / Javascript / MySQL', 'Marcq-en-baroeul'),
(255, 44, 'Lille Art Trianon', 'Développeur web', '2013-01-01', '2013-01-01', 'Création du site vitrine de l’atelier galerie Le Trianon à Lille\r\nStack: HTML5 / CSS3 / Javascript', 'Marcq-en-baroeul'),
(256, 44, 'FabienAssist06', 'Développeur web', '2013-01-01', '2013-01-01', 'Création du site d’un technicien en maintenance informatique et d’un back-office avec gestion des clients, interventions et facturation.\r\nStack: HTML / PHP / CSS / Javascript / MySQL', 'Marcq-en-baroeul'),
(257, 44, 'Hautes Loges Animation', 'Développeur web', '2012-01-01', '2012-01-01', 'Création du site de l’association des Hautes Loges de Marcq-en-Barœul <a href=\"http://hautes-loges-animation.fr\" target=\"_blank\" title=\"Site web de l\'association Hautes Loges Animation\">« Hautes Loges Animation »</a> et son back-office.\r\nStack: HTML / PHP / CSS / Javascript / MySQL', 'Marcq-en-baroeul'),
(259, 44, 'Wanted Solutions', 'Stage développeur web', '2012-01-01', '2012-01-01', 'Refonte du site statique en site dynamique\r\nMise en place de formulaires d\'inscription, création et modification de profil (niveau d\'étude, langues, compétences, années d\'expériences, etc)\r\nCréation d’un back-office pour la gestion des candidats, des offres et un algorithme de calcul de pertinence de matching candidats / offres.\r\nStack: HTML / PHP / CSS / Javascript / MySQL', 'Roubaix'),
(260, 44, 'OpenClassrooms', 'Mentor', '2021-05-06', NULL, 'Accompagnement et suivi d\'étudiants dans leur <a href=\"https://openclassrooms.com/fr/paths/556-developpeur-web\" title=\"Formation développeur web Openclassrooms\" target=\"_blank\">formation de développeur web</a>\r\nStack: HTML5 / CSS3 / SASS / Javascript / Angular / VueJS / NodeJS / Mysql', 'Marcq-en-Barœul');

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `profile_id`, `place`, `degree`, `start_date`, `end_date`, `description`, `city`) VALUES
(103, 44, 'Lycée Yves Kernanec', 'Baccalauréat général scientifique option musique', '2009-01-01 00:00:00', NULL, '', 'Marcq-en-baroeul'),
(104, 44, 'C.M.A. (Centre des Musiques Actuelles)', 'Formation de Musique Assistée par Ordinateur', '2010-01-01 00:00:00', NULL, '', 'Valenciennes'),
(105, 44, 'Afpa', 'Formation de développeur logiciel', '2012-01-01 00:00:00', NULL, '', 'Roubaix'),
(107, 44, 'OpenClassrooms', 'Certification \"Devenez mentor sur OpenClassrooms\"', '2020-01-24 00:00:00', '2020-01-24 00:00:00', NULL, 'Marcq-en-Barœul'),
(108, 44, 'OpenClassrooms', 'Certification \"Développez une application mobile multiplateforme avec Ionic 3\"', '2020-02-06 00:00:00', '2020-02-06 00:00:00', NULL, 'Marcq-en-Barœul'),
(109, 44, 'OpenClassrooms', 'Certification \"Développez des applications Web avec Angular\"', '2019-10-21 00:00:00', '2019-10-21 00:00:00', NULL, 'Marcq-en-Barœul'),
(110, 44, 'OpenClassrooms', 'Certification \"Passez au Full stack avec Node.js, Express et MongoDB\"', '2021-05-20 00:00:00', '2021-05-20 00:00:00', NULL, 'Marcq-en-Barœul'),
(111, 44, 'OpenClassrooms', 'Certification \"Apprenez à programmer en Python\"', '2020-02-14 00:00:00', '2020-02-14 00:00:00', NULL, 'Marcq-en-Barœul');

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20200107174852', '2020-01-07 19:14:08'),
('20220126100112', '2022-01-26 10:02:37'),
('20220126114116', '2022-01-26 11:42:41'),
('20220126121835', '2022-01-26 12:20:03');

--
-- Déchargement des données de la table `profile`
--

INSERT INTO `profile` (`id`, `firstname`, `lastname`, `email`, `mobile`, `website`, `profession`, `short_description`, `long_description`, `address`, `zipcode`, `city`) VALUES
(44, 'Xavier', 'Quièvre', 'xavier.quievre@gmail.com', '07 81 25 65 74', 'https://xavierquievre.fr', 'Fullstack Web Developper', 'Développeur Fullstack <span>Web</span>, <span>Mobile</span> et <span>Application</span>.<br> <a class=\"smoothscroll\" href=\"#about\">Scrollez</a> pour en savoir plus <a class=\"smoothscroll\" href=\"#about\">sur moi</a>.', '<p>J\'ai découvert la programmation en 2012 et celle-ci est très vite devenue une passion, après avoir été formé à différents langages web et logiciels, j\'ai approfondi mes connaissances dans le développement web.</p>', '7, Allée des Coutilliers', '59700', 'Marcq-en-Barœul');

--
-- Déchargement des données de la table `recommendation`
--

INSERT INTO `recommendation` (`id`, `profile_id`, `date`, `firstname`, `company`, `message`) VALUES
(1, 44, '2022-01-17 13:20:21', 'Sandra Vanhove', 'Ci-Oniya', 'Xavier QUIEVRE est un développer très à l\'écoute qui s’est investi avec un grand professionnalisme dans l’ensemble de ses missions qui lui ont été confié. Il est sérieux, minutieux, force de proposition, diplomate et pédagogue. Je vous recommande vivement ce profil et je referai appel à Xavier sans aucune hésitation pour nos projets à venir chez Ci-Oniya.'),
(2, 44, '2022-01-18 13:20:21', 'Bernard Pagoaga', 'Jooxter', 'Xavier est un développeur expérimenté, sérieux et très efficace ! Il est par ailleurs très agréable de travailler avec lui, je recommande ;)');

--
-- Déchargement des données de la table `skill`
--

INSERT INTO `skill` (`id`, `profile_id`, `name`, `percentage`, `type`) VALUES
(340, 44, 'PHP7', 75, 'hard'),
(341, 44, 'Symfony 1/2/3/4/5', 70, 'hard'),
(342, 44, 'HTML5 / CSS3 / SCSS', 70, 'hard'),
(343, 44, 'jQuery', 65, 'hard'),
(344, 44, 'NodeJS', 50, 'hard'),
(345, 44, 'Angular 2+ / Ionic', 60, 'hard'),
(346, 44, 'VueJS', 60, 'hard'),
(347, 44, 'MySQL', 70, 'hard'),
(348, 44, 'Docker', 30, 'hard'),
(349, 44, 'MongoDB', 50, 'hard'),
(350, 44, 'ElasticSearch', 50, 'hard'),
(351, 44, 'React', 30, 'hard'),
(352, 44, 'Javascript', 70, 'hard'),
(353, 44, 'ExpressJS', 50, 'hard'),
(355, 44, 'GIT', 65, 'hard'),
(356, 44, 'Autonomie', 0, 'soft'),
(357, 44, 'Patience', 0, 'soft'),
(358, 44, 'Diplomatie', 0, 'soft'),
(359, 44, 'Dynamisme', 0, 'soft'),
(360, 44, 'Sérieux', 0, 'soft'),
(361, 44, 'Force de proposition', 0, 'soft'),
(362, 44, 'Attention', 0, 'soft'),
(363, 44, 'Rigueur', 0, 'soft'),
(364, 44, 'Pédagogie', 0, 'soft');

--
-- Déchargement des données de la table `social`
--

INSERT INTO `social` (`id`, `class_name`, `title`, `link`, `profile_id`) VALUES
(36, 'fab fa-github', 'Voir mes projets sur Github', 'https://github.com/sapiet', 44);

--
-- Déchargement des données de la table `work`
--

INSERT INTO `work` (`id`, `profile_id`, `title`, `description`, `cover`, `link`, `position`) VALUES
(522, 44, 'Ci-Oniya', 'Mise en place de la boutique en ligne et développement d\'un outils d\'optimisation des découpes', 'ci-oniya.png', 'https://www.youpicity.com', 1),
(523, 44, 'Youpicity', 'Développement de l\'application Youpicity v1 et v2 avec Ionic / Symfony', 'youpicity.png', 'https://www.youpicity.com', 2),
(524, 44, 'WMS WebdealAuto', 'Refonte du logiciel d\'expédition avec NodeWebkit, Angular6 et une API sous Symfony3, développement d\'un backoffice de gestion de stock (réception / rangement / inventaire)', 'wms.png', NULL, 3),
(525, 44, 'Backoffice WebdealAuto', 'Création d\'un nouveau backoffice sous Symfony3 en préparation de la mise en place d\'un ERP', 'seraphin.png', NULL, 4),
(526, 44, 'Harlec', 'Mise en place d\'une page vitrine sans framework pour présenter l\'Harlec, un vélo hybride à mi chemin entre la moto et le vélo', 'harlec.png', 'https://www.harlec.com/', 5),
(527, 44, 'Avec Ton Vélo', 'Mise en place d\'un site sous Prestashop et intégration du design', 'avectonvelo.png', 'https://avectonvelo.com', 6),
(528, 44, 'WebdealAuto', 'Refonte visuelle du site marchand sous Symfony 1.4 avec gulp, scss, bootstrap et jQuery', 'webdealauto-design.png', 'https://www.webdealauto.com', 7),
(529, 44, 'WebdealAuto', 'Développement d\'outils sous Symfony 1.4 (gestion du catalogue de pièces / équipementiers / modes de livraison / menus des sites / imprimantes / avis de prélèvement pour la comptabilité / paramètres)', 'webdealauto-admin-tools.png', 'https://www.webdealauto.com', 8),
(530, 44, 'WebdealAuto Marketing', 'Développement d\'outils marketing sous Symfony 1.4 (gestion des bannières, offres promotionnelles, scripts de création et d\'envoi de newsletters, intégration de tag d\'affiliation, jeux concours)', 'webdealauto-marketing.png', 'https://www.webdealauto.com', 9),
(531, 44, 'WebdealAuto mobile', 'Développement d\'un site mobile sous Symfony 2 pour la société WebdealAuto', 'webdealauto-mobile-main-menu.png', 'https://m.webdealauto.com', 10),
(532, 44, 'Sapiet', 'Site musicien, dates, groupes, intégration Youtube et Soundcloud.\n                                    Création d\'un espace réservé à la lecture et au téléchargement de\n                                    musique en cours de composition.', 'sapiet.png', 'http://sapiet.free.fr', 11),
(533, 44, 'Reflexe Adoption', 'Refonte du site de l’association\n                                    et création d\'un back-office permettant la gestion\n                                    des animaux, la consultation des questionnaires,\n                                    des messages et des dons et parainnages, l’édition du forum.', 'reflexeadoption.png', NULL, 12),
(534, 44, 'Galerie Le Trianon', 'Création du site de l’atelier galerie Le Trianon à Lille', 'trianon.png', NULL, 13),
(535, 44, 'Fabien-Assist06 v.2', 'Mise à jour du site d\'un technicien\n                                    en maintenance informatique (structure et design)\n                                    et création d\'un backoffice.', 'fabienassist-v2.png', NULL, 14),
(536, 44, 'Hautes Loges Animation', 'Création du site de l\'association des\n                                    Hautes Loges et d\'un backoffice sur mesure\n                                    permettant de gérer le contenu.', 'hautesloges.png', 'http://hautes-loges-animation.fr', 15),
(537, 44, 'DevSources', 'Projet personnel regroupant des ressources\n                                    et plugins concernant les langages du web, à visionner et\n                                    à télécharger.', 'devsources.png', NULL, 16),
(538, 44, 'Equity-curve v.3', 'Troisième évolution d\'une application concernant le trading\n                                    proposant des graphiques en temps réel au format\n                                    image générés en PHP, contrôlables grâce à des\n                                    \"boîtes à outils\" fonctionnant en JavaScript.', 'equitycurve-v3.png', NULL, 17),
(539, 44, 'Equity-curve v.2', 'Seconde application concernant le trading avec un\n                                    nouveau mode de représentation, des graphiques en\n                                    JavaScript ainsi qu\'un système de messagerie\n                                    instantanée pour un pilotage des utilisateurs.', 'equitycurve-v2.png', NULL, 18),
(540, 44, 'Wanted Solutions', 'Mise à jour et optimisation du site, création\n                                    d\'un espace dédié aux candidats ainsi qu\'un\n                                    backoffice sur-mesure permettant une gestion des\n                                    clients et des CV ainsi qu\'un matching de correspondance\n                                    personnalisable.', 'wantedsolutions.png', NULL, 19),
(541, 44, 'Equity-curve v.1', 'Application d\'aide au trading avec des fonctionnalités\n                                    comme les alertes sonores et visuelles, la gestion de\n                                    la mise en page.', 'equitycurve-v1.png', NULL, 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
