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
		'profession' => 'Développeur',
		'shortDescription' => 'Développeur <span>Web</span>, <span>Application</span> et <span>Mobile</span> depuis <span>2012</span><br><a class="smoothscroll" href="#about">Scrollez</a> pour en savoir plus <a class="smoothscroll" href="#about">sur moi</a>.',
		'longDescription' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
         eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
         voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
         voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
         sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
         Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.',
        'social' => [
        	[
        		'className' => 'fas fa-github',
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
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            ]
        ],
        'formations' => [
            [
                'place' => 'École',
                'degree' => 'Brevet',
                'startDate' => '2010-10-01',
                'endDate' => '2010-10-31',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            ]
        ],
        'skills' => [
            ['name' => 'PHP', 'percentage' => 84],
            ['name' => 'HTML5', 'percentage' => 84],
            ['name' => 'CSS3', 'percentage' => 84],
            ['name' => 'jQuery', 'percentage' => 84],
            ['name' => 'Symfony', 'percentage' => 84],
        ],
        'works' => [
            [
                'title' => 'Work 1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'cover' => 'https://512pixels.net/downloads/macos-wallpapers/10-14-Night.jpg',
            ]
        ]
	];
}
