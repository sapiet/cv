<?php

namespace App\Twig;

use App\Entity\Profile;
use App\Services\ProfileProvider;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ProfileExtension extends AbstractExtension
{
    /**
     * @var ProfileProvider
     */
    private $profileProvider;

    public function __construct(ProfileProvider $profileProvider)
    {
        $this->profileProvider = $profileProvider;
    }

    /**
     * @inheritDoc
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('getProfile', [$this, 'getProfile'])
        ];
    }

    /**
     * @return Profile
     */
    public function getProfile(): Profile
    {
        return $this->profileProvider->get();
    }
}
