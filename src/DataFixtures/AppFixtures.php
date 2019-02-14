<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Profile;
use App\Entity\Social;
use App\DataFixtures\Data;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $this->loadProfile($manager);
    }

    public function loadProfile(ObjectManager $manager)
    {
    	$profile = (new Profile())
    		->setFirstname(Data::PROFILE['firstname'])
			->setLastname(Data::PROFILE['lastname'])
			->setEmail(Data::PROFILE['email'])
			->setMobile(Data::PROFILE['mobile'])
			->setWebsite(Data::PROFILE['website'])
            ->setProfession(Data::PROFILE['profession'])
            ->setAddress(Data::PROFILE['address'])
            ->setCity(Data::PROFILE['city'])
            ->setZipcode(Data::PROFILE['zipcode'])
            ->setShortDescription(Data::PROFILE['shortDescription'])
            ->setLongDescription(Data::PROFILE['longDescription'])
		;

        foreach (Data::PROFILE['social'] as $social) {
            $social = (new Social())
                ->setClassName($social['className'])
                ->setTitle($social['title'])
                ->setLink($social['link'])
            ;
        }

        $manager->persist($profile);
        $manager->flush();
    }
}
