<?php

namespace App\DataFixtures;

class Data
{
	const PROFILE = [
		'firstname' => 'Xavier',
		'lastname' => 'Quièvre',
		'email' => 'xavier.quievre@gmail.com',
		'address' => '7, Allée des Coutilliers',
		'zipcode' => '59700',
		'city' => 'Marcq-en-Barœul',
		'mobile' => '07 81 25 65 74',
		'website' => 'https://xavierquievre.fr',
		'profession' => 'Développeur web',
		'shortDescription' => 'Développeur <span>Web</span>, <span>Mobile</span> et <span>Application</span>.<br> <a class="smoothscroll" href="#about">Scrollez</a> pour en savoir plus <a class="smoothscroll" href="#about">sur moi</a>.',
		'longDescription' => '<p>J\'ai découvert la programmation en 2012 et celle-ci est très vite devenue une passion, après avoir été formé à différents langages web et logiciels, j\'ai approfondi mes connaissances dans le développement web.</p><p>Vous avez des questions où une envie de réaliser un projet ?<br><a class="smoothscroll" href="#contact">Envoyez moi un message !</a></p>',
        'social' => [
        	[
        		'className' => 'fab fa-github',
        		'title' => 'Voir mes projets sur Github',
        		'link' => 'https://github.com/sapiet'
        	]
        ],
        'experiences' => [
            [
                'company' => 'Webgump',
                'jobName' => 'Lead Développeur',
                'startDate' => '2016-01-01',
                'endDate' => null,
                'city' => 'Marcq-en-baroeul',
                'description' => 'Développement de l\'application mobile <a href="https://www.youpicity.com" target="_blank">Youpicity</a> sous Ionic et Symfony4',
            ], [
                'company' => 'WebdealAuto',
                'jobName' => 'Développeur web',
                'startDate' => '2014-04-18',
                'endDate' => null,
                'city' => 'Villeneuve d\'Ascq',
                'description' => 'Développement du site mobile sous Symfony2, développement d\'outils marketing sous Symfony1, intégration de la refonte graphique du site marchand (bootstrap / gulp / scss / jQuery), développement du nouveau logiciel d\'expédition avec Angular6 et une API Symfony3, développement d\'un WMS avec Angular et intégration dans Cordova, refonte technique du backend avec Symfony3, MongoDB, ElasticSearch, RabbitMQ',
            ], [
                'company' => 'Réflexe Adoption',
                'jobName' => 'Développeur web',
                'startDate' => '2013-01-01',
                'endDate' => null,
                'city' => 'Marcq-en-baroeul',
                'description' => 'Refonte du site de l’association Réflexe Adoption et création d’un back-office permettant la gestion des animaux, la consultation des questionnaires et des messages, l’édition du forum',
            ], [
                'company' => 'Lille Art Trianon',
                'jobName' => 'Développeur web',
                'startDate' => '2013-01-01',
                'endDate' => null,
                'city' => 'Marcq-en-baroeul',
                'description' => 'Création du site de l’atelier galerie Le Trianon à Lille',
            ], [
                'company' => 'FabienAssist06',
                'jobName' => 'Développeur web',
                'startDate' => '2013-01-01',
                'endDate' => null,
                'city' => 'Marcq-en-baroeul',
                'description' => 'Création du site d’un technicien en maintenance informatique et d’un back-office avec gestion des clients, interventions et facturation',
            ], [
                'company' => 'Hautes Loges Animation',
                'jobName' => 'Développeur web',
                'startDate' => '2012-01-01',
                'endDate' => null,
                'city' => 'Marcq-en-baroeul',
                'description' => 'Création du site de l’association des Hautes Loges de Marcqen-Baroeul «Hautes Loges Animation» et son back-office',
            ], [
                'company' => 'DevSources',
                'jobName' => 'Développeur web',
                'startDate' => '2012-01-01',
                'endDate' => null,
                'city' => 'Marcq-en-baroeul',
                'description' => 'Création d’un site de ressources concernant les langages du web.',
            ], [
                'company' => 'Wanted Solutions',
                'jobName' => 'Stage développeur web',
                'startDate' => '2012-01-01',
                'endDate' => null,
                'city' => 'Roubaix',
                'description' => 'Mise à jour du site web, création d’un back-office pour la gestion des candidats, des offres et un système de matching candidats / offres.',
            ]
        ],
        'formations' => [
            [
                'place' => 'Lycée Yves Kernanec',
                'degree' => 'Baccalauréat général scientifique option musique',
                'startDate' => '2009-01-01',
                'endDate' => null,
                'city' => 'Marcq-en-baroeul',
                'description' => '',
            ], [
                'place' => 'C.M.A. (Centre des Musiques Actuelles)',
                'degree' => 'Formation de Musique Assistée par Ordinateur',
                'startDate' => '2010-01-01',
                'endDate' => null,
                'city' => 'Valenciennes',
                'description' => '',
            ], [
                'place' => 'Afpa',
                'degree' => 'Formation de développeur logiciel',
                'startDate' => '2012-01-01',
                'endDate' => null,
                'city' => 'Roubaix',
                'description' => '',
            ]
        ],
        'skills' => [
            ['name' => 'HTML5', 'percentage' => 70],
            ['name' => 'CSS3', 'percentage' => 70],
            ['name' => 'PHP7', 'percentage' => 70],
            ['name' => 'Symfony 1/2/3/4', 'percentage' => 70],
            ['name' => 'jQuery', 'percentage' => 70],
            ['name' => 'NodeJS', 'percentage' => 60],
            ['name' => 'Angular 2+', 'percentage' => 60],
            ['name' => 'Ionic', 'percentage' => 60],
            ['name' => 'MySQL', 'percentage' => 60],
            ['name' => 'MongoDB', 'percentage' => 50],
            ['name' => 'ElasticSearch', 'percentage' => 50],
        ],
        'works' => [
            [
                'title'         =>  'Youpicity',
                'description'   =>  'Développement de l\'application Youpicity avec Ionic / Symfony',
                'cover'       =>  'youpicity.jpg',
                'link'           =>  'https://www.youpicity.com'
            ], [
                'title'         =>  'WMS WebdealAuto',
                'description'   =>  'Refonte du logiciel d\'expédition avec NodeWebkit, Angular6 et une API sous Symfony3, développement d\'un backoffice de gestion de stock (réception / rangement / inventaire)',
                'cover'       =>  'wms.png',
            ], [
                'title'         =>  'Backoffice WebdealAuto',
                'description'   =>  'Création d\'un nouveau backoffice sous Symfony3 en préparation de la mise en place d\'un ERP',
                'cover'       =>  'seraphin.png',
            ], [
                'title'         =>  'Harlec',
                'description'   =>  'Mise en place d\'une page vitrine sans framework pour présenter l\'Harlec, un vélo hybride à mi chemin entre la moto et le vélo',
                'cover'       =>  'harlec.png',
                'link'           =>  'https://www.harlec.com/'
            ], [
                'title'         =>  'Avec Ton Vélo',
                'description'   =>  'Mise en place d\'un site sous Prestashop et intégration du design',
                'cover'       =>  'avectonvelo.png',
                'link'           =>  'https://avectonvelo.com'
            ], [
                'title'         =>  'WebdealAuto',
                'description'   =>  'Refonte visuelle du site marchand sous Symfony 1.4 avec gulp, scss, bootstrap et jQuery',
                'cover'       =>  'webdealauto-design.png',
                'link'           =>  'https://www.webdealauto.com'
            ], [
                'title'         =>  'WebdealAuto',
                'description'   =>  'Développement d\'outils sous Symfony 1.4 (gestion du catalogue de pièces / équipementiers / modes de livraison / menus des sites / imprimantes / avis de prélèvement pour la comptabilité / paramètres)',
                'cover'       =>  'webdealauto-admin-tools.png',
                'link'           =>  'https://www.webdealauto.com'
            ], [
                'title'         =>  'WebdealAuto Marketing',
                'description'   =>  'Développement d\'outils marketing sous Symfony 1.4 (gestion des bannières, offres promotionnelles, scripts de création et d\'envoi de newsletters, intégration de tag d\'affiliation, jeux concours)',
                'cover'       =>  'webdealauto-marketing.png',
                'link'           =>  'https://www.webdealauto.com'
            ], [
                'title'         =>  'WebdealAuto mobile',
                'description'   =>  'Développement d\'un site mobile sous Symfony 2 pour la société WebdealAuto',
                'cover'       =>  'webdealauto-mobile-main-menu.png',
                'link'           =>  'https://m.webdealauto.com'
            ], [
                'title'         =>  'Sapiet',
                'description'   =>  'Site musicien, dates, groupes, intégration Youtube et Soundcloud.
                                    Création d\'un espace réservé à la lecture et au téléchargement de
                                    musique en cours de composition.',
                'cover'       =>  'sapiet.png',
                'link'           =>  'http://sapiet.free.fr'
            ], [
                'title'         =>  'Reflexe Adoption',
                'description'   =>  'Refonte du site de l’association
                                    et création d\'un back-office permettant la gestion
                                    des animaux, la consultation des questionnaires,
                                    des messages et des dons et parainnages, l’édition du forum.',
                'cover'       =>  'reflexeadoption.png',
            ], [
                'title'         =>  'Galerie Le Trianon',
                'description'   =>  'Création du site de l’atelier galerie Le Trianon à Lille',
                'cover'       =>  'trianon.png',
            ], [
                'title'         =>  'Fabien-Assist06 v.2',
                'description'   =>  'Mise à jour du site d\'un technicien
                                    en maintenance informatique (structure et design)
                                    et création d\'un backoffice.',
                'cover'       =>  'fabienassist-v2.png',
                'link'           =>  'http://fabien-assist06.fr'
            ], [
                'title'         =>  'Hautes Loges Animation',
                'description'   =>  'Création du site de l\'association des
                                    Hautes Loges et d\'un backoffice sur mesure
                                    permettant de gérer le contenu.',
                'cover'       =>  'hautesloges.png',
                'link'           =>  'http://hautes-loges-animation.fr'
            ], [
                'title'         =>  'DevSources',
                'description'   =>  'Projet personnel regroupant des ressources
                                    et plugins concernant les langages du web, à visionner et
                                    à télécharger.',
                'cover'       =>  'devsources.png',
            ], [
                'title'         =>  'Equity-curve v.3',
                'description'   =>  'Troisième évolution d\'une application concernant le trading
                                    proposant des graphiques en temps réel au format
                                    image générés en PHP, contrôlables grâce à des
                                    "boîtes à outils" fonctionnant en JavaScript.',
                'cover'       =>  'equitycurve-v3.png',
            ], [
                'title'         =>  'Equity-curve v.2',
                'description'   =>  'Seconde application concernant le trading avec un
                                    nouveau mode de représentation, des graphiques en
                                    JavaScript ainsi qu\'un système de messagerie
                                    instantanée pour un pilotage des utilisateurs.',
                'cover'       =>  'equitycurve-v2.png',
            ], [
                'title'         =>  'Wanted Solutions',
                'description'   =>  'Mise à jour et optimisation du site, création
                                    d\'un espace dédié aux candidats ainsi qu\'un
                                    backoffice sur-mesure permettant une gestion des
                                    clients et des CV ainsi qu\'un matching de correspondance
                                    personnalisable.',
                'cover'       =>  'wantedsolutions.png',
            ], [
                'title'         =>  'Equity-curve v.1',
                'description'   =>  'Application d\'aide au trading avec des fonctionnalités
                                    comme les alertes sonores et visuelles, la gestion de
                                    la mise en page.',
                'cover'       =>  'equitycurve-v1.png',
            ]
        ]
	];
}
