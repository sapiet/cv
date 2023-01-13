-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220208085116', '2022-02-08 12:36:56',  1991),
('DoctrineMigrations\\Version20220208164022', '2022-02-08 16:40:35',  486);

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `experience`;
CREATE TABLE `experience` (
  `id` int NOT NULL AUTO_INCREMENT,
  `profile_id` int NOT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_590C103CCFA12B8` (`profile_id`),
  CONSTRAINT `FK_590C103CCFA12B8` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `experience` (`id`, `profile_id`, `company`, `job_name`, `start_date`, `end_date`, `city`, `description`) VALUES
(250, 44, 'Ci-Oniya', 'Lead Developer', '2020-12-01', NULL, 'Marcq-en-barœul',  'Mise en place de la boutique <a href=\"https://ci-oniya.com\" title=\"Boutique Ci-Oniya\" target=\"_blank\">Ci-Oniya</a>\r\nCréation d\'une interface web <a href=\"https://ci-oniya.com/calculateur-de-decoupe-de-piece\" title=\"Calculateur de découpe de pièce\" target=\"_blank\">d\'optimisation des découpes de pièces</a>\r\nStack: HTML5 / CSS3 / Javascript / VueJS / Prestashop'),
(251, 44, 'Synapse Interactive',  'Lead Developer', '2019-08-19', '2022-02-28', 'Marcq-en-baroeul', 'Maintenance et évolution du parc de projets autour de la monétisation d\'audience.\r\nConception d\'un outils de création et d\'envoi de newsletters.\r\nMigration des sites institutionnels avec un builder de sites statiques maison avec Symfony.\r\nDéveloppement d\'un système de facturation.\r\nCréation de systèmes de monitoring pour les points critiques.\r\nMise en place d\'algorithmes de traitement des données.\r\nStack: HTML5 / CSS3 / PHP7 / Symfony3 / Symfony4 / Symfony5 / VueJS / NodeJS / ExpressJS / Webpack / CodeIgniter / MySQL'),
(252, 44, 'Webgump',  'Co-founder & Lead Developer',  '2016-09-01', '2022-10-01', 'Marcq-en-baroeul', 'Création de Youpicity, application de jeux de piste en extérieur ou escape games maison.\r\nDéveloppement d\'une API pour permettre l\'accès aux jeux depuis mobile et l\'édition des parcours depuis une interface web\r\nMise en place de procédures de déploiement\r\nConception des bases de données\r\nStack: HTML5 / CSS3 / Symfony4 / Api platform / Ionic / Angular / MySQL'),
(253, 44, 'WebdealAuto',  'Développeur web',  '2014-04-18', '2019-08-02', 'Villeneuve d\'Ascq', 'Développement des briques panier et gestion client du site mobile.\r\nMise en place d\'outils et de solutions marketing\r\nIntégration de la refonte graphique du site marchand.\r\nDéveloppement d\'un logiciel d\'expédition et de son API, afin de pouvoir gérer le traitement des commandes et l\'impression automatisée des étiquettes selon les différents transporteurs.\r\nCréation d\'une application mobile WMS permettant de gérer les stocks à l\'aide d\'un device muni d\'un scanner\r\nStack: HTML5 / CSS3 / SASS / Gulp / Symfony3 / Symfony2 / Symfony1 / Bootstrap / jQuery / Angular / Cordova / NW.js / MongoDB / ElasticSearch / RabbitMQ'),
(254, 44, 'Réflexe Adoption', 'Développeur web',  '2013-01-01', '2013-01-01', 'Marcq-en-baroeul', 'Création de la nouvelle version du site de l’association avec des fiches animaux, un moyen de paiement et un forum\r\nMise en place d\'un parrainage pour les animaux, les utilisateurs financent une partie ou totalité des soins à effectuer selon les soins restants\r\nCréation d’un back-office permettant la gestion des animaux, la consultation des questionnaires et des messages, l’édition du forum\r\nStack: HTML / PHP / CSS / Javascript / MySQL'),
(255, 44, 'Lille Art Trianon',  'Développeur web',  '2013-01-01', '2013-01-01', 'Marcq-en-baroeul', 'Création du site vitrine de l’atelier galerie Le Trianon à Lille\r\nStack: HTML5 / CSS3 / Javascript'),
(256, 44, 'FabienAssist06', 'Développeur web',  '2013-01-01', '2013-01-01', 'Marcq-en-baroeul', 'Création du site d’un technicien en maintenance informatique et d’un back-office avec gestion des clients, interventions et facturation.\r\nStack: HTML / PHP / CSS / Javascript / MySQL'),
(257, 44, 'Hautes Loges Animation', 'Développeur web',  '2012-01-01', '2012-01-01', 'Marcq-en-baroeul', 'Création du site de l’association des Hautes Loges de Marcq-en-Barœul <a href=\"http://hautes-loges-animation.fr\" target=\"_blank\" title=\"Site web de l\'association Hautes Loges Animation\">« Hautes Loges Animation »</a> et son back-office.\r\nStack: HTML / PHP / CSS / Javascript / MySQL'),
(259, 44, 'Wanted Solutions', 'Stage développeur web',  '2012-01-01', '2012-01-01', 'Roubaix',  'Refonte du site statique en site dynamique\r\nMise en place de formulaires d\'inscription, création et modification de profil (niveau d\'étude, langues, compétences, années d\'expériences, etc)\r\nCréation d’un back-office pour la gestion des candidats, des offres et un algorithme de calcul de pertinence de matching candidats / offres.\r\nStack: HTML / PHP / CSS / Javascript / MySQL'),
(260, 44, 'OpenClassrooms', 'Mentor', '2021-05-06', NULL, 'Marcq-en-Barœul',  'Accompagnement et suivi d\'étudiants dans leur <a href=\"https://openclassrooms.com/fr/paths/556-developpeur-web\" title=\"Formation développeur web Openclassrooms\" target=\"_blank\">formation de développeur web</a>\r\nStack: HTML5 / CSS3 / SASS / Javascript / Angular / VueJS / NodeJS / Mysql'),
(261, 44, 'Curriculum vitae', 'Développeur web',  '2019-02-13', NULL, 'Marcq-en-barœul',  'Le document que vous êtes en train de lire est généré automatiquement à partir d\'une source d\'information centralisée\r\nDéveloppement d\'un builder de curriculum vitae statique permettant un rendu <a href=\"https://xavierquievre.fr\" title=\"CV en ligne\" target=\"_blank\">web</a> et <a href=\"https://xavierquievre.fr/curriculum-vitae.pdf\" title=\"CV en pdf\" target=\"_blank\">pdf</a>\r\nStack: Docker / PHP8 / PHP7 / Symfony 6 / Symfony 4 / Webpack / HTML5 / CSS3 / SCSS / HTML2PDF / Gulp / MySQL'),
(262, 44, 'Manga-Horizon',  'Co-founder & Lead Developer',  '2022-08-21', NULL, 'Marcq-en-Baroeul', 'Création d\'un <a href=\"https://manga-horizon.fr\" target=\"_blank\">site permettant de trouver un manga</a> après avoir répondu à quelques questions\r\nCréation du backoffice de gestion des mangas et leur tags et du flow de question, mise en place d\'un système de succès pour motiver l\'équipe d\'admin, mise en place de bannières publicitaires\r\nStack: HTML / CSS / Javascript / Symfony 5 / VueJS / MySQL / PWA / Bootstrap'),
(263, 44, 'Freelance',  'Développeur web',  '2021-05-06', NULL, 'Marcq-en-Barœul',  'Travail sur des missions pour des clients en tant que freelance');

DROP TABLE IF EXISTS `formation`;
CREATE TABLE `formation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `profile_id` int NOT NULL,
  `place` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_404021BFCCFA12B8` (`profile_id`),
  CONSTRAINT `FK_404021BFCCFA12B8` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `formation` (`id`, `profile_id`, `place`, `degree`, `start_date`, `end_date`, `city`, `description`, `document`) VALUES
(103, 44, 'Lycée Yves Kernanec',  'Baccalauréat général scientifique option musique', '2009-01-01', '2009-01-01', 'Marcq-en-baroeul', '', NULL),
(104, 44, 'C.M.A. (Centre des Musiques Actuelles)', 'Formation de Musique Assistée par Ordinateur', '2010-01-01', '2010-01-01', 'Valenciennes', '', NULL),
(105, 44, 'Afpa', 'Formation de développeur logiciel',  '2012-01-01', '2012-01-01', 'Roubaix',  '', 'diplome-developpeur.pdf'),
(107, 44, 'OpenClassrooms', 'Certification \"Devenez mentor sur OpenClassrooms\"',  '2020-01-24', '2020-01-24', 'Marcq-en-Barœul',  '', 'cert-oc-mentor.pdf'),
(108, 44, 'OpenClassrooms', 'Certification \"Développez une application mobile multiplateforme avec Ionic 3\"', '2020-02-06', '2020-02-06', 'Marcq-en-Barœul',  '', 'cert-oc-ionic3.pdf'),
(109, 44, 'OpenClassrooms', 'Certification \"Développez des applications Web avec Angular\"', '2019-10-21', '2019-10-21', 'Marcq-en-Barœul',  '', 'cert-oc-angular.pdf'),
(110, 44, 'OpenClassrooms', 'Certification \"Passez au Full stack avec Node.js, Express et MongoDB\"',  '2021-05-20', '2021-05-20', 'Marcq-en-Barœul',  '', 'cert-fullstack-node-express-mongo.pdf'),
(111, 44, 'OpenClassrooms', 'Certification \"Apprenez à programmer en Python\"',  '2020-02-14', '2020-02-14', 'Marcq-en-Barœul',  '', 'cert-oc-python.pdf'),
(112, 44, 'Openclassrooms', 'Certification \"Optimisez votre déploiement en créant des conteneurs avec Docker\"', '2022-02-06', '2022-02-07', 'Marcq-en-Barœul',  '', 'cert-docker.pdf'),
(113, 44, 'OpenClassrooms', 'Certification \"Testez vos applications Front End avec JavaScript\"',  '2022-11-26', '2022-11-26', 'Marcq-en-Barœul',  '', 'cert-javascript-testing.pdf');

DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `profile` (`id`, `firstname`, `lastname`, `email`, `address`, `zipcode`, `city`, `mobile`, `website`, `profession`, `short_description`, `long_description`) VALUES
(44,  'Xavier', 'Quièvre',  'xavier.quievre@gmail.com', '7, Allée des Coutilliers', '59700',  'Marcq-en-Barœul',  '0781256574', 'https://xavierquievre.fr', 'Fullstack Web Developper', 'Développeur Fullstack <span>Web</span>, <span>Mobile</span> et <span>Application</span>.<br> <a class=\"smoothscroll\" href=\"#about\">Scrollez</a> pour en savoir plus <a class=\"smoothscroll\" href=\"#about\">sur moi</a>.', '<p>J\'ai découvert la programmation en 2012 et celle-ci est très vite devenue une passion, après avoir été formé à différents langages web et logiciels, j\'ai approfondi mes connaissances dans le développement web.</p>');

DROP TABLE IF EXISTS `recommendation`;
CREATE TABLE `recommendation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `profile_id` int NOT NULL,
  `date` date NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_433224D2CCFA12B8` (`profile_id`),
  CONSTRAINT `FK_433224D2CCFA12B8` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `recommendation` (`id`, `profile_id`, `date`, `firstname`, `company`, `picture`, `message`) VALUES
(1, 44, '2022-01-17', 'Sandra', 'Ci-Oniya', 'ci-oniya.jpg', 'Xavier QUIEVRE est un développer très à l\'écoute qui s’est investi avec un grand professionnalisme dans l’ensemble de ses missions qui lui ont été confié. Il est sérieux, minutieux, force de proposition, diplomate et pédagogue. Je vous recommande vivement ce profil et je referai appel à Xavier sans aucune hésitation pour nos projets à venir chez Ci-Oniya.'),
(2, 44, '2022-01-18', 'Bernard',  'Jooxter',  'jooxter.jpeg', 'Xavier est un développeur expérimenté, sérieux et très efficace ! Il est par ailleurs très agréable de travailler avec lui, je recommande ;)'),
(3, 44, '2022-03-11', 'Arnaud', 'ChefsTouch', 'chefstouch.jpeg',  'Excellente collaboration avec Xavier. Pédagogue, à l\'écoute, réactif et simplicité sont ses qualités premières. Il a pointer du doigts les problématiques sans difficultés et à su les résoudre rapidement. Merci pour ta collaboration. Je recommande vivement.');

DROP TABLE IF EXISTS `skill`;
CREATE TABLE `skill` (
  `id` int NOT NULL AUTO_INCREMENT,
  `profile_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` int DEFAULT NULL,
  `type` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5E3DE477CCFA12B8` (`profile_id`),
  CONSTRAINT `FK_5E3DE477CCFA12B8` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `skill` (`id`, `profile_id`, `name`, `percentage`, `type`, `category`) VALUES
(340, 44, 'PHP5/7/8', 75, 'hard', 'backend'),
(341, 44, 'Symfony 1/2/3/4/5/6',  70, 'hard', 'backend'),
(342, 44, 'HTML5 / CSS3 / SCSS',  70, 'hard', 'frontend'),
(343, 44, 'jQuery', 65, 'hard', 'frontend'),
(344, 44, 'NodeJS', 50, 'hard', 'backend'),
(345, 44, 'Angular 2+ / Ionic', 60, 'hard', 'frontend'),
(346, 44, 'VueJS',  60, 'hard', 'frontend'),
(347, 44, 'MySQL',  70, 'hard', 'database'),
(348, 44, 'Docker', 30, 'hard', 'sys'),
(349, 44, 'MongoDB',  50, 'hard', 'database'),
(350, 44, 'ElasticSearch',  50, 'hard', 'database'),
(351, 44, 'React',  30, 'hard', 'frontend'),
(352, 44, 'Javascript', 70, 'hard', 'frontend'),
(353, 44, 'ExpressJS',  50, 'hard', 'backend'),
(355, 44, 'GIT',  65, 'hard', 'versioning'),
(356, 44, 'Autonomie',  0,  'soft', ''),
(357, 44, 'Patience', 0,  'soft', ''),
(358, 44, 'Diplomatie', 0,  'soft', ''),
(359, 44, 'Dynamisme',  0,  'soft', ''),
(360, 44, 'Sérieux',  0,  'soft', ''),
(361, 44, 'Force de proposition', 0,  'soft', ''),
(362, 44, 'Attention',  0,  'soft', ''),
(363, 44, 'Rigueur',  0,  'soft', ''),
(364, 44, 'Pédagogie',  0,  'soft', '');

DROP TABLE IF EXISTS `social`;
CREATE TABLE `social` (
  `id` int NOT NULL AUTO_INCREMENT,
  `profile_id` int NOT NULL,
  `class_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7161E187CCFA12B8` (`profile_id`),
  CONSTRAINT `FK_7161E187CCFA12B8` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `social` (`id`, `profile_id`, `class_name`, `title`, `link`) VALUES
(36,  44, 'fab fa-github',  'Voir mes projets sur Github',  'https://github.com/sapiet');

DROP TABLE IF EXISTS `work`;
CREATE TABLE `work` (
  `id` int NOT NULL AUTO_INCREMENT,
  `profile_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_534E6880CCFA12B8` (`profile_id`),
  CONSTRAINT `FK_534E6880CCFA12B8` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `work` (`id`, `profile_id`, `title`, `description`, `cover`, `link`, `position`) VALUES
(522, 44, 'Ci-Oniya', 'Mise en place de la boutique en ligne et développement d\'un outils d\'optimisation des découpes', 'ci-oniya.png', 'https://ci-oniya.com/',  5),
(523, 44, 'Youpicity',  'Développement de l\'application Youpicity v1 et v2 avec Ionic / Symfony',  'youpicity.png',  NULL, 6),
(524, 44, 'WMS WebdealAuto',  'Refonte du logiciel d\'expédition avec NodeWebkit, Angular6 et une API sous Symfony3, développement d\'un backoffice de gestion de stock (réception / rangement / inventaire)',  'wms.png',  NULL, 7),
(525, 44, 'Backoffice WebdealAuto', 'Création d\'un nouveau backoffice sous Symfony3 en préparation de la mise en place d\'un ERP', 'seraphin.png', NULL, 8),
(526, 44, 'Harlec', 'Mise en place d\'une page vitrine sans framework pour présenter l\'Harlec, un vélo hybride à mi chemin entre la moto et le vélo',  'harlec.png', 'https://www.harlec.com/',  9),
(527, 44, 'Avec Ton Vélo',  'Mise en place d\'un site sous Prestashop et intégration du design',  'avectonvelo.png',  'https://avectonvelo.com',  10),
(528, 44, 'WebdealAuto',  'Refonte visuelle du site marchand sous Symfony 1.4 avec gulp, scss, bootstrap et jQuery',  'webdealauto-design.png', 'https://www.webdealauto.com',  11),
(529, 44, 'WebdealAuto',  'Développement d\'outils sous Symfony 1.4 (gestion du catalogue de pièces / équipementiers / modes de livraison / menus des sites / imprimantes / avis de prélèvement pour la comptabilité / paramètres)',  'webdealauto-admin-tools.png',  'https://www.webdealauto.com',  12),
(530, 44, 'WebdealAuto Marketing',  'Développement d\'outils marketing sous Symfony 1.4 (gestion des bannières, offres promotionnelles, scripts de création et d\'envoi de newsletters, intégration de tag d\'affiliation, jeux concours)', 'webdealauto-marketing.png',  'https://www.webdealauto.com',  13),
(531, 44, 'WebdealAuto mobile', 'Développement d\'un site mobile sous Symfony 2 pour la société WebdealAuto', 'webdealauto-mobile-main-menu.png', NULL, 14),
(532, 44, 'Sapiet', 'Site musicien, dates, groupes, intégration Youtube et Soundcloud.\n                                    Création d\'un espace réservé à la lecture et au téléchargement de\n                                    musique en cours de composition.',  'sapiet.png', 'http://sapiet.free.fr',  15),
(533, 44, 'Reflexe Adoption', 'Refonte du site de l’association\n                                    et création d\'un back-office permettant la gestion\n                                    des animaux, la consultation des questionnaires,\n                                    des messages et des dons et parainnages, l’édition du forum.',  'reflexeadoption.png',  NULL, 16),
(534, 44, 'Galerie Le Trianon', 'Création du site de l’atelier galerie Le Trianon à Lille', 'trianon.png',  NULL, 17),
(535, 44, 'Fabien-Assist06 v.2',  'Mise à jour du site d\'un technicien\n                                    en maintenance informatique (structure et design)\n                                    et création d\'un backoffice.', 'fabienassist-v2.png',  NULL, 18),
(536, 44, 'Hautes Loges Animation', 'Création du site de l\'association des\n                                    Hautes Loges et d\'un backoffice sur mesure\n                                    permettant de gérer le contenu.', 'hautesloges.png',  'http://hautes-loges-animation.fr', 19),
(537, 44, 'DevSources', 'Projet personnel regroupant des ressources\n                                    et plugins concernant les langages du web, à visionner et\n                                    à télécharger.',  'devsources.png', NULL, 20),
(538, 44, 'Equity-curve v.3', 'Troisième évolution d\'une application concernant le trading\n                                    proposant des graphiques en temps réel au format\n                                    image générés en PHP, contrôlables grâce à des\n                                    \"boîtes à outils\" fonctionnant en JavaScript.',  'equitycurve-v3.png', NULL, 21),
(539, 44, 'Equity-curve v.2', 'Seconde application concernant le trading avec un\n                                    nouveau mode de représentation, des graphiques en\n                                    JavaScript ainsi qu\'un système de messagerie\n                                    instantanée pour un pilotage des utilisateurs.',  'equitycurve-v2.png', NULL, 22),
(540, 44, 'Wanted Solutions', 'Mise à jour et optimisation du site, création\n                                    d\'un espace dédié aux candidats ainsi qu\'un\n                                    backoffice sur-mesure permettant une gestion des\n                                    clients et des CV ainsi qu\'un matching de correspondance\n                                    personnalisable.',  'wantedsolutions.png',  NULL, 23),
(541, 44, 'Equity-curve v.1', 'Application d\'aide au trading avec des fonctionnalités\n                                    comme les alertes sonores et visuelles, la gestion de\n                                    la mise en page.', 'equitycurve-v1.png', NULL, 24),
(542, 44, 'Optimiseur des découpes de pièces',  'Outils permettant de calculer la disposition des découpes afin d\'économiser un maximum de tissu', 'ci-oniya-tool.png',  'https://ci-oniya.com/calculateur-de-decoupe-de-piece/',  4),
(543, 44, 'Termine mon dessin', 'Application permettant de proposer une version de dessin non finie et des dessins non finis',  'finishmydrawing.png',  'https://finishmydrawing.com',  3),
(544, 44, 'Trouve le manga qui te correspond !',  'Application permettant de trouver un manga à lire après avoir répondu à quelques questions', 'mangahorizon.png', 'https://manga-horizon.fr', 2),
(545, 44, 'Sapiet v2',  'Refonte d\'un site concernant la musique', 'sapiet-v2.png',  'http://sapiet.free.fr',  1);

-- 2023-01-13 10:04:31